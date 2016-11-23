<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['title','description','price','stock','url_image','categorie_id','user_id'];

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
