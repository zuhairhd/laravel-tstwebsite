<?php

// app/Models/Post.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;              // optional
use Illuminate\Database\Eloquent\Factories\HasFactory;     // <-- add this

class Post extends Model
{
    use HasFactory;   // <-- enable Post::factory()
    // use SoftDeletes; // optional

    protected $fillable = ['title', 'body'];
}
