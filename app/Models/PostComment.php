<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use SoftDeletes;

    protected $fillable = ['post_id','name','email','content','status'];

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
    
}
