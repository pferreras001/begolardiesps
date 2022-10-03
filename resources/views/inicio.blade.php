@extends('layout')

@section('section')

<section class="section section__home">

  <x-home/>
  <x-lo_que_hago/>
  <x-servicios/>
  <x-sobre_mi/>
  <x-tarifas/>
  <section class="secrtion blog">
    <div class="blog__container container">
      <h1 class="blog__title">Blog.</h1>
      <div class="blog__noticias">
        @foreach($blogentrys as $blogentry)
        <div class="blog__box" style="background: url('{{asset('/images/blog/'.$blogentry->image)}}') no-repeat right;">
          <h2>{{ $blogentry->titulo }}</h2>
          <p>{{ $blogentry->texto }}</p>
          <a class="btn2" href="{{route('show_entry',['id' =>$blogentry->id])}}">Leer mas...</a>
        </div>
        @endforeach
        <div style="width: 100%;"></div>
      </div>
    </div>
  </section>

</section>


@endsection