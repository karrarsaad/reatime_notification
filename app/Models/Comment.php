<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id','post_id', 'comment', 'user_id','created_at','updated_at'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
