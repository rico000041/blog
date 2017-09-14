<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;

class CommentsController extends Controller
{
      public function store(Post $post){

      


        Comment::create([	

            'body' => request('body'),
            'user_id' => auth()->id(),
            'post_id' => $post->id

            ]);

        /*$post = new Post;

    	
    	$post->body = request('body');
        $post->user_id = auth()->id();
        dd($post->post_id = $post->id());
    	$post->save();
*/

        return back();
    }
    
}
