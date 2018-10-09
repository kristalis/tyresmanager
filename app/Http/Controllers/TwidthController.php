<?php

namespace TireManager\Http\Controllers;

use TireManager\Twidth;
use Illuminate\Http\Request;

class TwidthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return Twidth::latest()->get();

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
            'width' => 'required'
        ]);
        return Twidth::create([ 'width' => request('width') ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \TireManager\Twidth  $twidth
     * @return \Illuminate\Http\Response
     */
    public function show(Twidth $twidth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TireManager\Twidth  $twidth
     * @return \Illuminate\Http\Response
     */
    public function edit(Twidth $twidth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TireManager\Twidth  $twidth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twidth $twidth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TireManager\Twidth  $twidth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $twidth = Twidth::findOrFail($id);
        $twidth->delete();
        return 204;
    }
}
