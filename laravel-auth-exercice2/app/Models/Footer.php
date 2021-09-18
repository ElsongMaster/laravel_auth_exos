<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $tables = "footers";

    protected $fillable = ["street","city","facebook","twitter","linkedin","dribble","linkTemplate"];
}
