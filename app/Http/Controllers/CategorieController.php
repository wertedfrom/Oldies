<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function listByCategory($id){
        $category = Categorie::find($id);
        $builder = $category->publications();
        $publications_category = $builder->paginate(8);
        return view('category',['publications' => $publications_category,"category" => $category->name]);
    }
}
