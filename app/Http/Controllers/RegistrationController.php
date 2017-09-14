<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeAgain;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Request\RegistraionRequest;

class RegistrationController extends Controller
{
    //
    
    public function create(){

 		return view('registration.create');   	
    }

    public function store(){

    	$this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|confirmed'


    		]);

    	$user = User::create([
           
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))


            ]);

    	auth()->login($user);

        \Mail::to($user)->send(new WelcomeAgain($user));


        session()->flash('message','Thanks so much!!');
    	return redirect()->home();
    }
}
