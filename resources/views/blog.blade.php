@extends('layout')

@section('section')

<section data-aos="fade-right" class="section section__blog">
  <div class="blog__container container">
    <form action="{{route('blog')}}" method="POST">
      @csrf
      <select class="btn2" id="etiquetas" name="etiquetas" onchange="this.form.submit()">
          @isset($data)
              @foreach($etiquetas as $etiqueta)
                    @if($etiqueta->etiqueta==$data)
                        <option selected="selected">{{$etiqueta->etiqueta}}</option>
                    @else
                        <option>{{$etiqueta->etiqueta}}</option>
                    @endif
              @endforeach
          @else
            <option selected="selected">--escoger categoría--</option>
            @foreach($etiquetas as $etiqueta)
                <option>{{$etiqueta->etiqueta}}</option>
            @endforeach
          @endisset
      </select>
    </form>

    <div class="blog__noticias">
      @foreach($blogentrys as $blogentry)
      <div class="blog__box" style="background: url('{{asset('/images/blog/'.$blogentry->image)}}') no-repeat right;">
        <h2>{{ $blogentry->titulo }}</h2>
        <p>{{ $blogentry->texto }}</p>
        <a class="btn2" href="{{route('show_entry',['id' =>$blogentry->id])}}">Leer mas...</a>
      </div>
      @endforeach
      <div style="width: 100%;"></div>
      {{$blogentrys->links()}}
    </div>

    @if(session('tipo')=='user')
      <a href="{{route('create_entry')}}"><button class="btn2"> Crear Entrada</button></a>
    @endif
  </div>
</section>


@endsection