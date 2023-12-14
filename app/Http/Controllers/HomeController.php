<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $data['getrecord'] = HomeModel::all();

        
        return view('index', $data);

    }

    public function about(){
        
        return view('about');
    }

    public function faq(){
        
        return view('faq');
    }

    public function contact(){
        
        return view('contact');
    }
    
}
