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
          <li><a href="">C. Juan Antonio Fernández 6A, 1ºA - 31500 Tudela, Navarra</a></li>
          <li><a href="">+34 652 54 04 49</a></li>
          <li><a href="">info@begoñalardiespsicologia.com</a></li>
        </ul>
      </div>     
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.2381816993907!2d-1.9699937845133804!3d43.30927317913466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x455f4dbd8ebd5839!2sBox%20Training%20Club!5e0!3m2!1ses!2ses!4v1626081590774!5m2!1ses!2ses" allowfullscreen="" loading="lazy" frameBorder="0">
    </iframe>
  </div>
</section>