@extends('layout')

@section('section')

<section class="section section__edit_entry">    
    <div class="edit_entry__container container">
        <form action="{{route('update_entry')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$entry->id}}"/>
            Título<br>
            <input type="text" name="titulo" value="{{$entry->titulo}}"/><br><br>
            Texto<br> 
            <textarea name="texto">{{$entry->texto}}</textarea><br><br>
            Selecciona una nueva imagen en caso de desear modificarla<br><input type="file" name="imagen" accept="image/*"/><br><br>
            Etiquetas<br>
            <input type="text" name="etiquetas" value="{{$entry->etiquetas}}"/><br><br>
            <input class="btn2" type="submit" value="Modificar"/> 
        </form>
    </div>
</section>


@endsection