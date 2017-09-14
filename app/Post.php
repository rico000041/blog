<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function comments(){

    	return $this->hasMany(Comment::class);
    }
     //
    public function user(){

    	return $this->belongsTo(User::class);
    }


    public function scopeFilter($query, $filters){



        if($month = $filters(request(['month']))){
            $query->whereMonth('created_at',Carbon::parse($month)->month)->get();
        }
        if($year = $filters(request(['year']))){
            $query->whereYear('created_at',$year)->get();
        }


        //$posts = $posts->get();

    }
    public static function archives(){

    	return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at)desc')
        ->get()
        ->toArray();
    }

    public function tags(){

       return $this->belongsToMany(Tag::class);

        //many to many relationship
        //one post many tag 1 to many
    }
}
