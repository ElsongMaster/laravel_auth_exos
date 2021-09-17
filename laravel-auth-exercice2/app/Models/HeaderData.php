<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderData extends Model
{
    use HasFactory;

    protected $tables = "header_data";

    protected $fillable = ["avatar","skills"];
}
