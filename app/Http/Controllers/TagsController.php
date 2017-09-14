<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagsController extends Controller
{
    

    public function index(Tag $tag=null,Post $post){
    	$posts = $tag->post;


    	return view('posts.index',compact('posts'));
    }
}
