<nav>
    <div class="nav-wrapper">
        <div class="brand">
            <a href="{{ route('inicio') }}"><?php require('svg/navbar/logo.svg')?></a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-list">
            <li class="{{ (Request::route()->getName()=='inicio') ? 'active' : '' }}">
                <a href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="{{ (Request::route()->getName()=='horarios') ? 'active' : '' }}">
              <a href="">Servicios</a>
            </li>
            <li class="{{ (Request::route()->getName()=='actividades') ? 'active' : '' }}">
                <a href="">Tarifas</a>
            </li>
            <li class="{{ (Request::route()->getName()=='cuotas') ? 'active' : '' }}">
              <a href="">Sobre mi</a>
            </li>
            <li class="{{ (Request::route()->getName()=='blog') ? 'active' : '' }}">
              <a href="">Blog</a>
            </li>
            <li class="{{ (Request::route()->getName()=='galeria') ? 'active' : '' }}">
              <a href="">Contacto</a>
            </li>
            <li class="{{ (Request::route()->getName()=='galeria') ? 'active' : '' }}">
              <a href=""><?php require('svg/mail.svg')?></a>
            </li>
            <li class="{{ (Request::route()->getName()=='galeria') ? 'active' : '' }}">
              <a href=""><?php require('svg/telephone.svg')?></a>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript">
  window.addEventListener('resize', function(){
    addRequiredClass();
})


function addRequiredClass() {
    if (window.innerWidth < 1025) {
        document.body.classList.add('mobile')
    } else {
        document.body.classList.remove('mobile') 
    }
}

window.onload = addRequiredClass

let hamburger = document.querySelector('.hamburger')
let mobileNav = document.querySelector('.nav-list')

let bars = document.querySelectorAll('.hamburger span')

let isActive = false

hamburger.addEventListener('click', function() {
    mobileNav.classList.toggle('open')
    if(!isActive) {
        bars[0].style.transform = 'rotate(45deg)'
        bars[1].style.opacity = '0'
        bars[2].style.transform = 'rotate(-45deg)'
        isActive = true
    } else {
        bars[0].style.transform = 'rotate(0deg)'
        bars[1].style.opacity = '1'
        bars[2].style.transform = 'rotate(0deg)'
        isActive = false
    }
    

})
</script>