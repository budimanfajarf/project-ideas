<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Get the ideas for the tier.
     */
    public function ideas()
    {
        return $this->hasMany('App\Idea');
    }
}
