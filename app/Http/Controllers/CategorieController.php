<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function listByCategory($id){
        $category = Categorie::find($id);
        $publications_category = $category->publications()->get();
        return view('category',['publications' => $publications_category,"category" => $category->name]);
    }
}
