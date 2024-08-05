<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{
    public function index(){
        return view("Backend.index");
    }
    public function category(){
        return view("Backend.category.category");
    }
}
