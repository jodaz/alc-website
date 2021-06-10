<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;
    protected $table = "tags";
    protected $fillable = [
        'name',
        'slug'
    ];

    public function sluggable()
    {
    	return [
    		'slug'	=>	[
    			'source'	=>	'name',
    			'onUpdate'	=>	true
    		]
    	];
    }

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
