<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Users\UsersFormRequest;
use App\Mail\UserRegister;
use Illuminate\Support\Facades\Mail;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Hash;
use App\User;
use DataTables;
use Image;
use File;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $options = [
        'route' => 'users',
        'route-views' => 'dashboard.modules.users.'
    ];
    /**
     *
     * Index
     *
     */
    public function index()
    {
    	return view($this->options['route-views']."index")
            ->with('options', $this->options);
    }
    /**
     *
     * List user
     *
     */
    public function list()
    {
        $query = User::orderBy('id', 'desc');
        return DataTables::eloquent($query)
            ->toJson();
    }
    /**
     *
     * User create
     *
     */
    public function create()
    {
        return view($this->options['route-views']."register")
            ->with('options', $this->options)
            ->with('roles', Role::all())
            ->with('typeForm', 'create');
    }
    /**
     *
     * User Store
     *
     */
    public function store(UsersFormRequest $request)
    {
        /** */
        $file = $request->avatar;
        $var = $request->input('name').' '.$request->input('surname');
        $clear_password = str_random(12);
        $password = bcrypt($clear_password);
        /***/
        $create             = new User();
        $create->name       = $request->input('name');
        $create->surname    = $request->input('surname');
        $create->slug       = SlugService::createSlug(User::class, 'slug', $var);
        $create->avatar     = $create->slug.'.'.$file->extension();
        $create->email      = $request->input('email');
        $create->password   = $password;
        $create->status     = $request->input('status');

        if($create->save()) {
            /**
             * Assign role
             */
            $role = Role::find($request->input('role'));
            $create->assignRole($role);
            /**
            *
            **/
            $path = public_path('/uploads/users/');
            if (!File::exists($path)) {
                File::makeDirectory($path, 0775, true, true);
            }
            /**
            *
            **/
            $file->move(public_path().'/uploads/users/', $create->avatar);
            /**
             * Send mail
             */
            $data = new \stdClass();
            $data->name = $create->name;
            $data->last_name = $create->surname;
            $data->email = $create->email;
            $data->password = $clear_password;
            Mail::to($create->email)->send(new UserRegister($data));

            return redirect($this->options['route'])->withSuccess('Registro exitoso!!');
        }
    }
    /**
     *
     * User edit
     *
     */
    public function edit(User $user)
    {
        foreach ($user->roles as $value) {
            $role_id = $value->id;
        }
        return view($this->options['route-views']."register")
            ->with('options', $this->options)
            ->with('typeForm', 'update')
            ->with('roles', Role::all())
            ->with('roleId', $role_id)
            ->with('row', $user);
    }
    /**
     *
     * User update
     *
     */
    public function update(UsersFormRequest $request, User $user)
    {
        $var = $request->input('name').' '.$request->input('surname');

        $edit             = User::find($user->id);
        $edit->name       = $request->input('name');
        $edit->surname    = $request->input('surname');
        $edit->slug       = SlugService::createSlug(User::class, 'slug', $var);
        $edit->email      = $request->input('email');
        if ($request->input('password') != null) {
            $edit->password   = bcrypt($request->input('password'));
        }
        $edit->status     = $request->input('status');
        /**
         * Update logo
         */
        if ($request->file('avatar') != null) {
            /**
             * Delete current logo
             */
            File::delete(public_path('/uploads/users/', $edit->avatar));
            /**
             *
             */
            $file = $request->avatar;
            $edit->avatar      = $edit->slug.'.'.$file->extension();
            $file->move(public_path().'/uploads/users/', $edit->avatar);
        }
        /**
         * Save changes
         */
        if($edit->save()) {
            $role = Role::find($request->input('role'));
            $edit->assignRole($role);

            return redirect('/'.$this->options['route'].'/'.$edit->id.'/edit')->withSuccess('Registro actualizado!!');
        }
    }
    /**
     *
     * User profile
     *
     */
    public function profile(User $user)
    {
        return view($this->options['route-views']."user-profile")
            ->with('options', $this->options)
            ->with('row', $user);
    }
    /**
     *
     * Update profile
     *
     */
    public function updateProfile(UsersFormRequest $request, User $user)
    {
        /** */
        $var = $request->input('name').' '.$request->input('surname');
        /** */
        $edit           = User::find($user->id);
        $edit->name     = $request->input('name');
        $edit->surname  = $request->input('surname');
        $edit->slug     = SlugService::createSlug(User::class, 'slug', $var);
        $edit->email    = $request->input('email');
        /**
        * Update logo
        */
        if ($request->file('avatar') != null) {
            /**
            * Delete current logo
            */
            File::delete(public_path('/uploads/users/', $edit->avatar));
            /**
            *
            */
            $file = $request->avatar;
            $edit->avatar  = $edit->slug.'.'.$file->extension();
            $file->move(public_path().'/uploads/users/', $edit->avatar);
        }

        if($edit->save()) {
            return redirect('/user-profile/'.$edit->id)->withSuccess('Registro actualizado!!');
        }
    }
}
