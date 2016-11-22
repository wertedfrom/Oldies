<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Publication;
use \App\Categorie;

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

    // funcion de busqueda de las publicaciones que recibe por el input del buscador
    public function searchPublications(Request $request){
      $publications = Publication::where(
        'title',
        'LIKE',
        '%'.$request->input('query').'%'
        )->get();
        return view('/searchResults',['publications' => $publications]);
    }
    // funcion para agregar una publicaciones
    public function addPublicationForm(){
      $categories = Categorie::all();

      return view('/addPublication' , ['categories'=> $categories]);
    }
    // funcion que agrega la pelicula a la base de datos pasando por el validador personalizado
    public function addPublicationRequest(Request $request){

      // $data = $request->only(['title', 'description','price','stock','categorie_id']);
      // $publication = Publication::create($data);
      $publication = Publication::create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'stock' => $request->input('stock'),
        'url_image' => '.images/coser.jpg',
        'categorie_id' => $request->input('categorie_id'),
        'user_id' => '1',
      ]);
      $publication->save();

      return view('index');
    }
}
