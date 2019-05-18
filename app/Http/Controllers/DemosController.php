<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\demo;
class DemosController extends Controller
{
    public function register(Request $request){
    	$fname=$request->Firstname;
    	$Lame=$request->Lastname;
    	$in=$request->ind;
        $in2=$request->ind2;
        $in3=$request->ind3;
    	$ps=$request->password;
    	$em=$request->email;
    	
    	demo::create([
    		'Firstname'=>$fname,
    		'Lastname'=>$Lame,
    		'Email'=>$em,
    		'Index Number'=>$in.$in2.$in3,
    		'Password'=>$ps

    ]);
    	return 'Registration Successful';

    }
    
    public function votesite(request $request){
        demo::find();

    }


}
