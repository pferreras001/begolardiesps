@extends('layout')

@section('section')

<section class="section contacto_enviado__section" style="height: 100vh;">
  <div class="contacto_enviado__container container">
    <h1 style="margin-top: 100px;color:#A2A0A0">¡El mensaje ha sido enviado!</h1>
    <a class="btn2" href="{{route('inicio')}}">Volver al inicio</a>
  </div>
</section>


@endsection