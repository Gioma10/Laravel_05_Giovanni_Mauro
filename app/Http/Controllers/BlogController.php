<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function message(){
        return[
        'title.required'=> "Il titolo deve contenere minimo 5 caratteri",
        'time.required'=> "Il tempo di preparazione che hai inserito non è valido",
        'description.required'=> "La descrizione deve avere massimo 1000 caratteri",
        'img.required'=> "Attenzione alle immagini",
        ];
    }

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    
     
    public function index()
    {
        $blogs= Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Category::all();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = Blog::create([
            'title'=> $request -> input('title'),
            'time'=> $request -> input('time'),
            'description'=> $request -> input('description'),
            'img'=> $request -> file('img')->store('public/img'),
            'user_id'=> Auth::user()->id,
        ]);
        // dd($request->categories);
        foreach ($request->categories as $category) {
            
            $blog->categories()->attach($category);
        }
        return redirect(route('home'))->with('message', 'Blog aggiunto con successo!!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update([
            'name'=> $request->name,
        ]) ;
        return redirect(route('blog-index'))->with('message', 'Blog modificato con successo!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        foreach ($blog->categories as $category) {
            $category->blogs()->detach($blog->id);
        };
        $blog->delete();
        return redirect(route('blog-index'))->with('message', 'Blog eliminato con successo!!');
    }
}
