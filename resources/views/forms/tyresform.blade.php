  {{ csrf_field() }} 
  <div class="row">

     
                    <div class="col-lg-4">
                        <p class="text-white">Brand</p>
                  <div class='form-group {{ $errors->has('tbrandId') ? 'has-error' : '' }}'>
      {!! Form::select('tbrandId', $tbrand, null, ['class'=>'form-control input-text', 'placeholder' => 'Select Brand']) !!}
   <span class="text-danger">{{ $errors->first('tbrandId') }}</span>
    </div>
                </div>
                    <div class="col-lg-2">
                        <p class="text-white">Width</p>
                          <div class='form-group {{ $errors->has('twidthId') ? 'has-error' : '' }}'>
      {!! Form::select('twidthId', $twidth, null, ['class'=>'form-control input-text', 'placeholder' => 'Select Width']) !!}
   <span class="text-danger">{{ $errors->first('twidthId') }}</span>
    </div>
</div>
                <div class="col-lg-2">
                    <p class="text-white">Ratio</p>
                    <div class='form-group {{ $errors->has('tratioId') ? 'has-error' : '' }}'>
      {!! Form::select('tratioId', $tratio, null, ['class'=>'form-control input-text', 'placeholder' => 'Select Ratio']) !!}
   <span class="text-danger">{{ $errors->first('tratioId') }}</span>
    </div>
                </div>
                <div class="col-lg-2">
                    <p class="text-white">Rim</p>
                            <div class='form-group {{ $errors->has('trimId') ? 'has-error' : '' }}'>
      {!! Form::select('trimId', $trim, null, ['class'=>'form-control input-text', 'placeholder' => 'Select Rim']) !!}
   <span class="text-danger">{{ $errors->first('trimId') }}</span>
    </div>
                </div>
               <div class="col-lg-2">
                    <p class="text-white">Speed</p>
                           <div class='form-group {{ $errors->has('tratioId') ? 'has-error' : '' }}'>
      {!! Form::select('tspeedId', $tspeed, null, ['class'=>'form-control input-text', 'placeholder' => 'Select Speed']) !!}
   <span class="text-danger">{{ $errors->first('tspeedId') }}</span>
    </div>
                </div> 
            </div>
            <div class="row">
                
                <div class="col-lg-4">
                    <p class="text-white">Price</p>
                        <div class='form-group {{ $errors->has('tprice') ? 'has-error' : '' }}'>
      {!! Form::text('tprice', null, ['class' => 'form-control input-text', 'id' => 'tprice','placeholder' => 'Tyre price']) !!}
    <span class="text-danger">{{ $errors->first('tprice') }}</span>
    </div>
                </div>
                <div class="col-lg-4">
                    <p class="text-white">Stock #</p>
                 <div class='form-group {{ $errors->has('tstock') ? 'has-error' : '' }}'>
      {!! Form::text('tstock', null, ['class' => 'form-control input-text', 'id' => 'tstock','placeholder' => 'Stock Quantity']) !!}
    <span class="text-danger">{{ $errors->first('tstock') }}</span>
    </div>
                </div>

                    <div class="col-lg-4">
                        <p class="text-white">...</p>
                          {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary btn-lg btn-block']) !!}

                                
                        
                </div>  
            </div>