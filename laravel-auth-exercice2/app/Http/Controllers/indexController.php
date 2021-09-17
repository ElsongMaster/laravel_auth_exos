<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderData;
use App\Models\Titre;
use App\Models\Portfolio;
class indexController extends Controller
{
    public function index(){
        $projects = Portfolio::all();
        $headerDatas = HeaderData::all();
        $titres = Titre::all();

        return view('index',compact('headerDatas','titres','projects'));
    }
}
