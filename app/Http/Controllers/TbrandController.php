<?php

namespace TireManager\Http\Controllers;

use TireManager\Tbrand;
use Illuminate\Http\Request;

class TbrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        return Tbrand::latest()->get();
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
     
        $this->validate($request, [
            'brand' => 'required|max:500'
        ]);
        return Tbrand::create([ 'brand' => request('brand') ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \TireManager\Tbrand  $tbrand
     * @return \Illuminate\Http\Response
     */
    public function show(Tbrand $tbrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TireManager\Tbrand  $tbrand
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbrand $tbrand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TireManager\Tbrand  $tbrand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbrand $tbrand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TireManager\Tbrand  $tbrand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbrand = Tbrand::findOrFail($id);
        $tbrand->delete();
        return 204;
    }
}
