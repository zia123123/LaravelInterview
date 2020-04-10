<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
 protected $table = "comments";

    protected $fillable = [
        'name', 'email', 'website','comment','post_id',
    ];

	public function post(){
        $this->belongsTo(Post::class);
    }


     public function user()
    {
        return $this->belongsTo(User::class);
    }
}


