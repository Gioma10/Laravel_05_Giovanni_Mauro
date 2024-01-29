<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function newBlog(){

        return view('blog.newBlog');
    }

    public function save(BlogRequest $request){
        $blog = Blog::create([
            'title'=> $request -> input('title'),
            'time'=> $request -> input('time'),
            'description'=> $request -> input('description'),
            'img'=> $request -> file('img')->store('public/img'),
        ]);
        return redirect(route('home.home'))->with('message', 'Blog aggiunto con successo!!');
    }

    public function message(){
        return[
        'title.required'=> "Il titolo deve contenere minimo 5 caratteri",
        'time.required'=> "Il tempo di preparazione che hai inserito non è valido",
        'description.required'=> "La descrizione deve avere massimo 1000 caratteri",
        'img.required'=> "Attenzione alle immagini",
        ];
    }
}
