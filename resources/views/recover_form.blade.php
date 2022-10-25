@extends('layout')

@section('section')

<section class="section section__create_entry">
<script src="{{ asset('/js/comprobarContras.js')}}"></script>
  <h1> Editar Miembro</h1>
<div class="container">
    <form action="{{route('update_pass')}}" method="POST" onsubmit="return comprobarContras()">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}"/>
        Email<br> 
        <input type="text" name="email" readonly value="{{$user->email}}"/><br><br>
        Contraseña nueva <br>
        <input type="password" id="password" name="password" onchange="comprobarLongitud()"/><br><br>
        Repita la contraseña<br> 
        <input type="password" id="password2" name="password2"/><br><br>
        <label id="error" class="text-red">La contraseña debe tener al menos 6 caracteres</label>
        <label hidden id="valido" class="text-green">La contraseña es valida</label><br><br>
        <input class="btn2" type="submit" value="Cambiar contraseña"/> 
    </form>
    
</div>

</section>


@endsection