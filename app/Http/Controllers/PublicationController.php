<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Publication;

class PublicationController extends Controller
{
    public function listByCategory($id){
        $publications = Publication::where('categorie_id',$id);
        return view('/category',['publications' => $publications]);
    }

    public function showPublication($id){
        $publication = Publication::find($id);
        return view('/publication',['producto' => $publication]);
    }

    public function showBestPublications(){
        $publications = Publication::all()->take(8);
        return view('index',['publications' => $publications]);
    }
}
