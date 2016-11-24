<?php

namespace App\Http\Controllers;

use App\Http\Requests\addPublicationRequest;
use Illuminate\Http\Request;
use \App\Publication;
use \App\Categorie;
use Illuminate\Support\Facades\Auth;

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
      $builder = Publication::where(
        'title',
        'LIKE',
        '%'.$request->input('query').'%'
        );
        $publications=$builder->paginate(8);
        return view('/searchResults',['publications' => $publications]);
    }

    // funcion para agregar una publicaciones
    public function add(){
        if(Auth::user()){
            $categories = Categorie::all();
            return view('/addPublication' , ['categories'=> $categories]);
        }else{
            return redirect()->action('PublicationController@showBestPublications');
        }
    }

    // funcion que agrega la pelicula a la base de datos pasando por el validador personalizado
    public function store(addPublicationRequest $request)
    {
//        var_dump($request->input());
//
//
//        $validation = \Validator::make(
//            $request->all(),
//            [
//                'title' => 'required|max:255',
//                'description' => 'required|max:500',
//                'price' => 'required|numeric',
//                'stock' => 'required|numeric',
////                'url_image' => 'required|max:255',
//                'categorie_id' => 'required',
//                'cover' => 'required',
//            ]
//        );
//
//        if($validation->fails()){
////            dd($validation->errors());
//            return redirect('/publications/add')
//                ->withInput()
//                ->withErrors($validation->errors());
//        }
//
//        var_dump($validation->errors());

        $publication = Publication::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'url_image' => '',
            'categorie_id' => $request->input('categorie_id'),
            'user_id' => Auth::id(),
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
