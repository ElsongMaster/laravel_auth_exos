<?php

namespace App\Http\Controllers;

use App\Models\HeaderData;
use App\Models\Titre;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::all();
        $datas = HeaderData::all();
        return view('backoffice.layouts.backHeader',compact('datas','titres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeaderData  $headerData
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {   
        $headerData = HeaderData::find($id);

        return view('backoffice.headerData.show',compact('headerData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeaderData  $headerData
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $headerData = HeaderData::find($id);
        return view('backoffice.headerData.edit',compact('headerData'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeaderData  $headerData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeaderData  $headerData
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               $headerData = HeaderData::find($id);
               $headerData->delete();

               return redirect()->route('header_data.index');

    }
}
