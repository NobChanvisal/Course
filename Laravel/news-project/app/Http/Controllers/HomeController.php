<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    //
    public function index(){
        $news = News::with(['Authors', 'Categories'])
                ->where('status', 'public')
                ->latest()
                ->paginate(20);

        return view('home', compact('news'));
    }

    public function show($id){
        
    }
}
