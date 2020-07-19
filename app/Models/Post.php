<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'id','title', 'content', 'user_id','created_at','updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment','post_id','id');
    }
}
