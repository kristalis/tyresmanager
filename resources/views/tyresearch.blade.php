@extends('layouts.main')
@section('header')
 
<header class="header" id="header">
        <!--header-start-->
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Welcome To K Motors</h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li>A powerful web application to manage your tyres inventory for your customers. 
                <br>In addition you get your frontend designed with tons of features to promote your business.</li>
            </ul>
            
            <a class="link animated fadeInUp delay-1s servicelink" href="#tyres">Come On In - Let's Talk Business</a>
        </div>
    </header>
    <!--header-end-->
    @endsection
@section('content')
<section class="main-section client-part" id="tyres">
        <!--main-section client-part-start-->
        <div class="container">

      {!! Form::open(['action' => 'HomeController@searchTyre']) !!}
            @include('forms.tyresearchform', ['submitButtonText' => 'SEARCH'])
    {!! Form::close() !!} 
               
               
              
             
         </div>
    </section>


    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Our Tyre Stock</h2>
            <h6>We offer New & Used tyres</h6>
            @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif 
            <div class="row">
                @foreach($tyre as $tyres)
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <img src="img/tire.png" width="64px" alt="">
                        </div>
                          <div class="service-list-col2">
                            <h3>{{ $tyres->tbrand->brand}} - {{ $tyres->twidth->width}}/{{$tyres->tratio->ratio}}{{$tyres->tspeed->speed}}{{$tyres->trim->rim}}</h3>
                               <p><strong>Price:</strong> {{ $tyres->tprice}} <br>
                                <strong>Stock:</strong> {{ $tyres->tstock}}<br>
                                <strong>Type:</strong> {{ $tyres->ttype}}</p>
                        </div>
                         <a class="link animated fadeInUp delay-1s btn-block" href="tel:07951461280">Call US - 07951461280</a>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection