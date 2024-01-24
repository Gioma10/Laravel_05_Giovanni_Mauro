<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function newBlog(){

        return view('newBlog');
    }

    public function save(Request $request){
        $blog = Blog::create([
            'title'=> $request -> input('title'),
            'time'=> $request -> input('time'),
            'description'=> $request -> input('description'),
        ]);
        return redirect(route('home'))->with('message', 'Blog aggiunto con successo!!');
    }
}
