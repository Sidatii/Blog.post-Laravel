<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function find($slug){
        if (! file_exists($path = resource_path("/posts/{$slug}.html"))){
            // If there is no file, we make action
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", now()->addHours(24), fn() => file_get_contents($path));
    }

    public static function all(){
        return File::files(resource_path("posts/"));
    }
}
