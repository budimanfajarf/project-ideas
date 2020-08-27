<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'path', 'content_json', 'commits_json', 'committed_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'committed_at'];

    /**
     * Get the github's idea.
     */
    public function idea()
    {
        return $this->morphOne('App\Idea', 'ideaable');
    }
}
