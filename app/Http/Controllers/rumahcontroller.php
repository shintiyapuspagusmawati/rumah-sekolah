<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rumahcontroller extends Controller
{
    //

    public function a()
    {
    	$a = "shintiya";
    	$b = "tio";
    	$c = "julio";
    	$d = "silvani";
    	$e = "rissa";
    	return view('index', compact('$a','$b','$c','$d','$e'));
    }

    public function b()
    {
    	$a = "cici";
    	$b = "opik";
    	$c = "tantan";
    	$d = "siti";
    	$e = "ucup";
    	return view('index1', compact('$a','$b','$c','$d','$e'));
    }

    public function c()
    {
    	$a = "rudi";
    	$b = "agus";
    	$c = "rizal";
    	$d = "gugun";
    	$e = "rosa";
    	return view('index2', compact('$a','$b','$c','$d','$e'));
    }

    public function d()
    {
    	$a = "usep";
    	$b = "kiki";
    	$c = "epul";
    	$d = "cepi";
    	$e = "engkos";
    	return view('index3', compact('$a','$b','$c','$d','$e'));
    }

    public function e()
    {
    	$a = "ewin";
    	$b = "widi";
    	$c = "rina";
    	$d = "erni";
    	$e = "elis";
    	return view('index4', compact('$a','$b','$c','$d','$e'));
    }

    public function param($id)
    {
    	return view('welcome');
    }

    public function parameter($a)
    {
    	return view('welcome2', compact('a'));
    }
}
