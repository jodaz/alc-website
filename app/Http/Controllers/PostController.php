<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\User;
use Image;
use File;
use Illuminate\Http\Request;
use App\Http\Requests\Posts\PostCreateFormRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $options = [
        'route' => 'posts',
        'route-views' => 'dashboard.modules.posts.'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::whereUserId(Auth::user()->id)->orderBy('id', 'desc')->get();

        return view($this->options['route-views']."index")
            ->with('articles', $posts)
            ->with('options', $this->options);
    }

    public function listPosts()
    {
        $query = Post::with('user')->orderBy('id', 'desc');
        return DataTables::eloquent($query)
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->options['route-views']."register")
            ->with('options', $this->options)
            ->with('tags', Tag::get())
            ->with('typeForm', 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateFormRequest $request)
    {
        $file = $request->image;
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $url = $request->youtube_video;
        parse_str(parse_url($url, PHP_URL_QUERY), $vars);

        if (empty($vars)) {
            return back()
                ->withInput()
                ->withErrors([
                    'youtube_video' => 'El link ingresado no es válido'
                ]);
        }

        $youtubeId = $vars['v'];

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'post' => $request->post,
            'slug' => $slug,
            'status' => $request->status,
            'image' => $slug.'.'.$file->extension(),
            'description' => $request->description,
            'youtube_video' => $youtubeId
        ]);

        // Save tags
        $post->tags()->sync($request->get('tag_id'));

        // Save file
        $path = public_path('/uploads/posts/');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0775, true, true);
        }
        $file->move(public_path().'/uploads/posts/', $post->image);

        // Resize image here
        $thumbnailpath = public_path('uploads/posts/'.$post->image);
        $img = Image::make($thumbnailpath)->resize(800, 600, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);

        return redirect($this->options['route'].'/'.$post->id)
            ->withSuccess('¡Ha registrado un nuevo artículo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view($this->options['route-views']."show")
            ->with('options', $this->options)
            ->with('row', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view($this->options['route-views']."register")
            ->with('options', $this->options)
            ->with('typeForm', 'update')
            ->with('tags', Tag::get())
            ->with('row', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostCreateFormRequest $request, Post $post)
    {
        $edit               = Post::find($post->id);
        $edit->title        = $request->input('title');
        $edit->description  = $request->input('description');
        $edit->post         = $request->input('post');
        $edit->slug         = SlugService::createSlug(Post::class, 'slug', $request->input('title'));
        $edit->status       = $request->input('status');
        /**
         * Update logo
         */
        if ($request->file('image') != null) {
            /**
             * Delete current logo
             */
            File::delete(public_path('/uploads/posts/', $edit->image));
            /**
             *
             */
            $file = $request->image;
            $edit->image      = $edit->slug.'.'.$file->extension();
            $file->move(public_path().'/uploads/posts/', $edit->image);
            //Resize image here
            $thumbnailpath = public_path('uploads/posts/'.$edit->image);
            $img = Image::make($thumbnailpath)->resize(800, 600, function($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
        }
        /**
         * Save changes
         */
        if($edit->save()) {
            /* Update tags */
            $edit->tags()->sync($request->tag_id);

            return redirect('/'.$this->options['route'].'/'.$edit->id.'/edit')->withSuccess('Registro actualizado!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
