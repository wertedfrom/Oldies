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
    public function add(){
      $categories = Categorie::all();
      return view('/addPublication' , ['categories'=> $categories]);
    }

    // funcion que agrega la pelicula a la base de datos pasando por el validador personalizado
    public function store(Request $request)
    {
        var_dump($request->input());
        $publication = Publication::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'url_image' => '',
            'categorie_id' => $request->input('categorie_id'),
            'user_id' => '1',
        ]);

        if ($request->hasFile('cover')){
            $file = $request->file('cover');

            $name = str_slug($publication->title).'-'.$publication->id.'.'.$file->extension();

            $filename = $file->storeAs('images', $name, env('PUBLIC_STORAGE', 'public'));

//            \Storage::disk('public')->putFileAs('images', $file, $name);

            $publication->url_image = $filename;
        }else{
            $publication->url_image = "images/no-image.jpg";
        }

        $publication->save();
        return redirect('/publication/'.$publication->id);
    }
}
