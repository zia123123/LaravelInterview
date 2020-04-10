<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $with = ['user'];
	 protected $table = "posts";

	 protected $fillable = [
        'title', 'slug', 'content','user_id'
    ];
    
     public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
