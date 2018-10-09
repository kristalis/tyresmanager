<?php

namespace TireManager\Http\Controllers;

use Illuminate\Http\Request;
use TireManager\Twidth;
use TireManager\Tratio;
use TireManager\Trim;
use TireManager\Tspeed;
use TireManager\Tyre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $twidth= Twidth::all()->pluck('width','id');
       $tratio= Tratio::all()->pluck('ratio','id');
       $trim= Trim::all()->pluck('rim','id');
       $tspeed= Tspeed::all()->pluck('speed','id');
       return view('welcome', ['twidth'=>$twidth,'tratio'=>$tratio,'trim'=>$trim,'tspeed'=>$tspeed ]);     
    }
      public function searchTyre(Request $request)
    {
        $twidthId = $request->twidthId;
        $tratioId = $request->tratioId;
        $trimId = $request->trimId;
        $tspeedId = $request->tspeedId;
        $tyreId =$twidthId.$tratioId.$trimId.$tspeedId;
 
       $tyre = Tyre::where('tyreId',$tyreId)->get();
      
       $twidth= Twidth::all()->pluck('width','id');
       $tratio= Tratio::all()->pluck('ratio','id');
       $trim= Trim::all()->pluck('rim','id');
       $tspeed= Tspeed::all()->pluck('speed','id');
        if(!$tyre->isEmpty())
            { 
      return view('tyresearch', ['tyre'=>$tyre,'twidth'=>$twidth,'tratio'=>$tratio,'trim'=>$trim,'tspeed'=>$tspeed ]);
}
else
{
  //return response ('no stock',200);
  $data['status'] = 'None in Stock';
 return view('tyresearch', ['tyre'=>$tyre,'twidth'=>$twidth,'tratio'=>$tratio,'trim'=>$trim,'tspeed'=>$tspeed ])->with($data); 
}
    }
}
