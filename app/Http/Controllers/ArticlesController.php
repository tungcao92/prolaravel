<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function all()
    {
    	$articles = Articles::all(); 
    }
}
