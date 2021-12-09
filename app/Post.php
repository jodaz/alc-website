<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model implements Viewable
{
    use Sluggable, InteractsWithViews;

    protected $table = "posts";

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'post',
        'slug',
        'image',
        'status',
        'youtube_video'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
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
