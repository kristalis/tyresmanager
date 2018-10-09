  {{ csrf_field() }} 
<div class="row">

     
               
                    <div class="col-lg-2">
                        <p class="text-white">Width</p>
                          <div class='form-group {{ $errors->has('twidthId') ? 'has-error' : '' }}'>
      {!! Form::select('twidthId', $twidth, null, ['class'=>'form-control', 'placeholder' => 'Select Width']) !!}
   <span class="text-danger">{{ $errors->first('twidthId') }}</span>
    </div>
</div>
                <div class="col-lg-2">
                    <p class="text-white">Ratio</p>
                    <div class='form-group {{ $errors->has('tratioId') ? 'has-error' : '' }}'>
      {!! Form::select('tratioId', $tratio, null, ['class'=>'form-control', 'placeholder' => 'Select Ratio']) !!}
   <span class="text-danger">{{ $errors->first('tratioId') }}</span>
    </div>
                </div>
                <div class="col-lg-2">
                    <p class="text-white">Rim</p>
                            <div class='form-group {{ $errors->has('trimId') ? 'has-error' : '' }}'>
      {!! Form::select('trimId', $trim, null, ['class'=>'form-control', 'placeholder' => 'Select Rim']) !!}
   <span class="text-danger">{{ $errors->first('trimId') }}</span>
    </div>
                </div>
               <div class="col-lg-2">
                    <p class="text-white">Speed</p>
                           <div class='form-group {{ $errors->has('tratioId') ? 'has-error' : '' }}'>
      {!! Form::select('tspeedId', $tspeed, null, ['class'=>'form-control', 'placeholder' => 'Select Speed']) !!}
   <span class="text-danger">{{ $errors->first('tspeedId') }}</span>
    </div>
                </div> 
            
                
              
             

                    <div class="col-lg-4">
                        <p class="text-white">...</p>
                          {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary btn-lg btn-block']) !!}

                                
                        
                </div>  
            </div>