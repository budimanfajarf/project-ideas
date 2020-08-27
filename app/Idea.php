<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ideaable_id',
        'ideaable_type',
        'tier_id',
        'name',
        'slug',
        'short_description',
        'required_description',
        'additional_description',
        'description',
        'content',
    ];

    /**
     * Get the tier that owns the idea.
     */
    public function tier()
    {
        return $this->belongsTo('App\Tier');
    }

    /**
     * Get the owning ideaable model.
     */
    public function ideaable()
    {
        return $this->morphTo();
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

}
