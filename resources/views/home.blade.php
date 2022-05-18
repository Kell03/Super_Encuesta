@extends('layout')

@section('content')



    




<div align="" style="margin-left: 35%;"> 
  <div class="col-sm-9">
  <h3 align="center">Encuesta</h3>
<form action="{{ route('home.store') }}" method="POST"  autocomplete="off">

    @csrf 


{{--Apellidos--}}

    <div class="form-group"> 
      <label></label>
    <input class="form-control @error('nombres') is-invalid @enderror" type="text" placeholder="Nombres..." name="nombres" required>

    @error('nombres')
                    
            <span class="invalid-feedback" role="alert">
                    
                   <strong>{{ $message }}</strong>
                
            </span>
                
          @enderror

    </div>


{{--Apellidos--}}
        <div class="form-group"> 
          <label> </label>
    <input class="form-control @error('apellidos') is-invalid @enderror" type="text" placeholder="Apellidos..." name="apellidos" required >
    @error('apellidos')
                    
            <span class="invalid-feedback" role="alert">
                
                 <strong>{{ $message }}</strong>
                
             </span>
                
         @enderror

    </div>  


{{--Email--}}

      <div class="form-group"> 
        <label></label>
    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email..."    name="email" required >
    @error('email')
                
         <span class="invalid-feedback" role="alert">
                
               <strong>{{ $message }}</strong>
                
             </span>
                
         @enderror

    </div>


    {{--celular--}}

     <div class="form-group"> 
        <label></label>
    <input class="form-control @error('celular') is-invalid @enderror" type="text" placeholder="Celular..." name="celular" required >
    @error('celular')
                
          <span class="invalid-feedback" role="alert">
                
                <strong>{{ $message }}</strong>
                
             </span>
                
         @enderror

    </div>



    <br>



    <button type="submit" class="btn btn-primary" aling="center">Registrate y a Contestar..</button>


</form>
</div>
</div>
@endsection