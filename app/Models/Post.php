<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; //users can't modify database entries from form

    // associa tutta l'entry della table category al post su cui viene invocato category()
    // da invocare non come metodo ma come proprietà
    public function category() {
        //hasOne, hasMany,belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
}
