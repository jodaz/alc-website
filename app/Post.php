<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model implements Viewable
{
    use Sluggable;
    use InteractsWithViews;

    protected $table = "posts";

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'post',
        'slug',
        'image',
        'status'
    ];

    public function sluggable()
    {
    	return [
    		'slug'	=>	[
    			'source'	=>	'title',
    			'onUpdate'	=>	true
    		]
    	];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
