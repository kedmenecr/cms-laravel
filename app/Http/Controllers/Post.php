<?php
/**
 * Created by PhpStorm.
 * User: Roberto
 * Date: 1/15/2018
 * Time: 7:22 PM
 */

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //restricts columns from modifying
    protected $guarded = [];
    // posts has many comments
    // returns all comments on that post
    public function comments()
    {
        return $this->hasMany('App\Comments','on_post');
    }
    // returns the instance of the user who is author of that post
    public function author()
    {
        return $this->belongsTo('App\User','author_id');
    }
}