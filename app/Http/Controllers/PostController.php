<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'title' =>'required|unique:posts'
            ]
            // ... TASK: write validation here so that "title" field
            //           would be required and unique in the "posts" DB table
        );

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
