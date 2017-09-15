<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use App\Comment;
use Carbon\Carbon;
use App\Tag;


class PostsController extends Controller
{
    
    public $post;


    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(Posts $posts){
        

        $archives = Post::archives();


       

        if($month = request('month')){
           $post = Post::whereMonth('created_at','=',Carbon::parse($month)->month)->get();
        }
        if($year = request('year')){
           $post = Post::whereYear('created_at','=',$year)->get();
        }
        
       
       

        $posts = Post::latest()->get();

       
        
      /*  $posts = $posts->get();
*/
    	return view('posts.index', compact('posts'));

    }
     public function show(Post $post){

     	
    	return view('posts.show',compact('post'));

    }
    public function create	(){
    	return view('posts.create');
    }
    

    public function store(){
    
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'  

            ]);

  

    	$post = new Post;

    	$post->title = request('title');
    	$post->body = request('body');
        $post->user_id = auth()->id();
    	$post->save();

    	return redirect('/');



    }

 
}
