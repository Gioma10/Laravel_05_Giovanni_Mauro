<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('home.index', compact('blogs'));
    }

    public function allUser(){
        $users= User::all();

        return view('allUsers', compact('users'));
    }

    public function destroy(User $user)
    {

        //Dellútente recupero tutti gli artcioli
        foreach($user->blogs as $blog){
            //Del singolo articolo controllo qual'é l'utente collegato e lo dissocio, inserisce null
            $blog->user()->dissociate();
            //Poi salvo la modifica
            $blog->save();
        }
        $user->delete();
        return redirect(route('all-users'))->with('message', 'Utente eliminato con successo!!');
    }
}
