<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Book extends Model
{
    use HasFactory;

    // El libro puede tener muchas imagenes
    public function pages(){
        return $this->hasMany(Page::class);
    }
}
