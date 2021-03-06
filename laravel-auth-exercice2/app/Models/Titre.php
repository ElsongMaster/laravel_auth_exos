<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;

    protected $table = "titres";


    protected $fillable = ['h1Header','h2Portfolio','h2About','h2Contact'];
}
