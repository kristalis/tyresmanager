@extends('layouts.mainpanel')
@section('content')
<section class="main-section client-part" id="tyres">
        <!--main-section client-part-start-->
        <div class="container">
    {!! Form::open(['action' => 'TyreController@store']) !!}
      @include('forms.tyresform', ['submitButtonText' => 'ADD'])
    {!! Form::close() !!} 
           
                
                </div>
             
        
    </section>


    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Price List</h2>
            <table width="100%">
                <tr class="tm15-text">
                    <td>Brand</td>
                    <td>Tyre attributes</td>
                    <td>Price</td>
                    <td>Stock</td>
                  
                    <td></td>
                </tr>
               @foreach($tyre as $tyres)
               <tr>
                    <td>{{ $tyres->tbrand->brand}}</td>
                    <td>{{ $tyres->twidth->width}}/{{$tyres->tratio->ratio}}{{$tyres->tspeed->speed}}{{$tyres->trim->rim}}</td>
                    <td>{{ $tyres->tprice}}</td>
                    <td>{{ $tyres->tstock}}</td>
                    <td>
                        <form action="{{@url('tyres').'/'.$tyres->id}}" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button>

                  </form><a href="{{@url('tyres').'/'.$tyres->id.'/edit'}}" class="btn btn-primary pull-right"><i class="fa fa-edit"></i></a>
     </td>
                </tr>
                 
                @endforeach
                
            </table>
              {{ $tyre->render('vendor.pagination.bootstrap-4') }}
           
                </div>
                

            </div>
        </div>
    </section>
    <!--main-section-end-->
 
@endsection
