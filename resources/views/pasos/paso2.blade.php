@extends('layout')

@section('content')






<div align="" style="margin-left: 35%;"> 
    <div class='col-sm-9'>

  <h3 align="">Politica Colombiana {{session('usuario')}}</h3>
  <p align=""> Politica Colombiana </p>
<form action="{{ route('home.store') }}" method="POST"  autocomplete="off">

    @csrf 

    <p> ¿Por que Candidato votaria para presidente de Colombia en el 2022?</p>


<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1" value="Federico Gutiérrez">
    Federico Gutiérrez
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2" value=" Rodolfo Hernandez">
     Rodolfo Hernandez

  </label>
</div>


<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1" value="Enrique Gómez">
     Enrique Gómez

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2" value="  John Milton Rodríguez">
      John Milton Rodríguez
  </label>
</div>


<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1" value="Gustavo Petro">
    Gustavo Petro
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2" value="  Sergio Fajardo">
     Sergio Fajardo

  </label>
</div>


<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1" value="Enrique Gómez">
     Ingrid Betancourt

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2" value="  Ningno o Voto en Blanco">
      Ningno o Voto en Blanco
  </label>
</div>
    <br>



    <button type="submit" class="btn btn-primary">Envía tu respuesta y sigue participando</button>


</form>
</div>
</div>
@endsection