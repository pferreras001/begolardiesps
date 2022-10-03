@extends('layout')

@section('section')

<section class="section section__show_entry">
  <div class="show_entry__container container">
    <div class="show_entry__entry">
        <img class="show_entry__img" src="{{asset('/images/blog/'.$entry->image)}}">
        <h1>{{$entry->titulo}}</h1>
        <p>{!! nl2br(e($entry->texto)) !!}      <p>
      </p>
    </div>
    @if(session('tipo')=='user')
    <a  href="{{route('edit_entry',['id' =>$entry->id])}}" class="btn2"> Editar</a>
    <a  href="{{route('delete_entry',['id' =>$entry->id])}}" class="btn2"> Borrar</a>
    @endif
    <div class="show_entry__button">
      <button class="btn2" onclick="location.href='{{ route('blog') }}'">Volver</button>
    </div>
  </div>
</section>


@endsection