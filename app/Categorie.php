<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name',
    ];

    public $timestamps = true;

    public function publications(){
        return $this->hasMany(Publication::class);
    }

}
