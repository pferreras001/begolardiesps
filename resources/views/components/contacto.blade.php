<section class="section section__contacto">
  <div class="contacto__form">
    <div data-aos="fade-right" class="contacto__form__left">
      <form method="POST" action="{{route('contacto')}}">
      @csrf
        <input type="email" name="email" required="true" placeholder="Email"><br>
          @isset($asunto)
            <input type="text" name="asunto" required="true" value="{{$asunto}}"><br>
          @else
          <input type="text" name="asunto" required="true" placeholder="Asunto"><br>
         @endisset
        <textarea name="mensaje" required="true" placeholder="Mensaje..."></textarea><br>

        <button type="submit" class="btn2">Enviar</button><br>

      </form>
    </div>
    <div data-aos="fade-left" class="contacto__form__right">
      <h1>
        Puedes escribirme un mensaje.<br>
        ¡Te responderé lo antes posible!
      </h1>
    </div>
  </div>
  <div class="contacto__maps">
    <div class="contacto__maps__info">
      <div class="contacto__yellow_box contacto__yellow_box__contacto">
        <ul>
          <li><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.2813091771113!2d-1.6031960844998265!3d42.058589279208284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5a4f525efba757%3A0xe078f18a46d2a1e8!2sC.%20Juan%20Antonio%20Fern%C3%A1ndez%2C%206A%2C%2031500%20Tudela%2C%20Navarra!5e0!3m2!1ses!2ses!4v1675328969371!5m2!1ses!2ses">C. Juan Antonio Fernández 6A, 1ºA - 31500 Tudela, Navarra</a></li>
          <li><a href="tel:+34652540449">+34 652 54 04 49</a></li>
          <li><a href="mailto:begolardies@gmail.com">begolardies@gmail.com</a></li>
        </ul>
      </div>     
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.2813091771113!2d-1.6031960844998265!3d42.058589279208284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5a4f525efba757%3A0xe078f18a46d2a1e8!2sC.%20Juan%20Antonio%20Fern%C3%A1ndez%2C%206A%2C%2031500%20Tudela%2C%20Navarra!5e0!3m2!1ses!2ses!4v1675328969371!5m2!1ses!2ses" allowfullscreen="" loading="lazy" frameBorder="0">
    </iframe>
  </div>
</section>