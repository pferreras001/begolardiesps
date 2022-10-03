@extends('layout')

@section('section')

<section class="section login__section">

  <div data-aos="flip-left" class="container login__container">

    <form method="POST" action="{{route('session_start')}}">
    @csrf

    <fieldset class="fieldset fieldset__login">
        @isset($fail)
        <span class="errmsg errmsg__login">Nombre de usuario o contraseña incorrectos</span>
        @endisset
        
        @isset($email)
            <input type="text" name="email" value="{{ $email }}"><br>
        @else
            <input type="text" name="email" placeholder="Email"><br>
        @endisset
      <input type="password" name="password" placeholder="Contraseña"><br>

      <button type="submit" class="btn2 btn__login">Iniciar sesión</button><br>

      <span><a href="{{route('recover_password')}}">¿Has olvidado tu contraseña?</a></span>

    </fieldset>

    </form>

  </div>


</section>


@endsection