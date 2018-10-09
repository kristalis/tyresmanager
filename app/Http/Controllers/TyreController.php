<?php

namespace TireManager\Http\Controllers;

use TireManager\Tyre;
use TireManager\Tbrand;
use TireManager\Twidth;
use TireManager\Tratio;
use TireManager\Trim;
use TireManager\Tspeed;
use Illuminate\Http\Request;

class TyreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $tyre = Tyre::orderBy('tbrandId','asc')->paginate(7);
       $tbrand = Tbrand::all()->pluck('brand','id');
       $twidth= Twidth::all()->pluck('width','id');
       $tratio= Tratio::all()->pluck('ratio','id');
       $trim= Trim::all()->pluck('rim','id');
       $tspeed= Tspeed::all()->pluck('speed','id');
       return view('tpanel.home', ['tyre'=>$tyre,'tbrand'=>$tbrand,'twidth'=>$twidth,'tratio'=>$tratio,'trim'=>$trim,'tspeed'=>$tspeed ]); 
    
       
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
 public function formValidation(Request $request)
    {
        $this->validate($request,[
                'tbrandId' => 'required|integer|min:1',
                'twidthId' => 'required|integer|min:1',
                'tratioId' => 'required|integer|min:1',
                'trimId' => 'required|integer|min:1',
                'tspeedId' => 'required|integer|min:1',
                'tprice' => 'required',
                'tstock' => 'required',
            ],[
                'tbrandId.required' => ' Select tyre brand',
                'tbrandId.min' => ' Select tyre brand from dropdown list',
                'twidthId.required' => ' Select tyre width',
                'twidthId.min' => ' Select tyre width from dropdown list',
                'tratioId.required' => ' Select ratio brand',
                'tratioId.min' => ' Select tyre ratio from dropdown list',
                'trimId.required' => ' Select tyre rim',
                'trimId.min' => ' Select tyre rim from dropdown list',
                'tspeedId.required' => ' Select tyre speed',
                'tspeedId.min' => ' Select tyre speed from dropdown list',
                'tprice.required' => ' Please add tyre price',
                'tstock.required' => ' Please add tyre quantity',
                
            ]);

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->formValidation($request);
        $tyres = new Tyre;
        $tyres->tbrandId = $request->tbrandId;
        $tyres->twidthId = $request->twidthId;
        $tyres->tratioId = $request->tratioId;
        $tyres->trimId = $request->trimId;
        $tyres->tspeedId = $request->tspeedId;
        $tyres->tprice= $request->tprice;
        $tyres->tstock = $request->tstock;
        $tyres->tyreId = $tyres->twidthId.$tyres->tratioId.$tyres->trimId.$tyres->tspeedId;
        $tyres->save();

        $data['status'] = 'Tyre added Successfully';
        return back()->with( $data );
         
    }
     /**
     * Display the specified resource.
     *
     * @param  \TireManager\Tyre  $tyre
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Display the specified resource.
     *
     * @param  \TireManager\Tyre  $tyre
     * @return \Illuminate\Http\Response
     */
    public function show($tyreId)
    {
          $tyres= Tyre::find($tyreId);
          return response($tyres,200);
        
        //return view('tpanel.homedit', ['tyres'=>$tyres,'tyre'=>$tyre,'tbrand'=>$tbrand,'twidth'=>$twidth,'tratio'=>$tratio,'trim'=>$trim,'tspeed'=>$tspeed ]); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TireManager\Tyre  $tyre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tyre = Tyre::orderBy('tbrandId','asc')->paginate(7);
        $tbrand = Tbrand::all()->pluck('brand','id');
        $twidth= Twidth::all()->pluck('width','id');
        $tratio= Tratio::all()->pluck('ratio','id');
        $trim= Trim::all()->pluck('rim','id');
        $tspeed= Tspeed::all()->pluck('speed','id');

        $tyres= Tyre::find($id);
        return view('tpanel.homedit', ['tyres'=>$tyres,'tyre'=>$tyre,'tbrand'=>$tbrand,'twidth'=>$twidth,'tratio'=>$tratio,'trim'=>$trim,'tspeed'=>$tspeed ]); 

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TireManager\Tyre  $tyre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->formValidation($request);
      
        $tyres = Tyre::find($id);
        $tyres->tbrandId = $request->tbrandId;
        $tyres->twidthId = $request->twidthId;
        $tyres->tratioId = $request->tratioId;
        $tyres->trimId = $request->trimId;
        $tyres->tspeedId = $request->tspeedId;
        $tyres->tprice= $request->tprice;
        $tyres->tstock = $request->tstock;
        $tyres->tyreId = $tyres->twidthId.$tyres->tratioId.$tyres->trimId.$tyres->tspeedId;
    
        $tyres->save();
           
        $data['status'] = 'Tyres updated Successfully';
      
        return redirect()->back()->with( $data );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TireManager\Tyre  $tyre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tyres = Tyre::find($id);
        $tyres->delete();
        return back();
    }
}
