<nav class="menu-movil d-lg-none">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-8">
                <a href="{{route('app.index')}}">
                    <img src="{{ asset('img/logos/size/AphofisHorizontalBlanco.png') }}" alt="logo" class="logo">
                </a>
            </div>
            <div class="col-4 text-right">
                <div class="menu menu-3 mt-2" id="btn-menu-toggle">
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-left">
        <ul class="menu-list">
            <li class="text-uppercase"><a class="{{Request::routeIs('app.index') ? 'orange' : ''}}" href="{{route('app.index')}}">Inicio</a></li>
            {{-- <li class="text-uppercase"><a class="{{Request::routeIs('app.galeria') ? 'orange' : ''}}" href="{{route('app.galeria')}}">Galería</a></li> --}}
            
            <li class="text-uppercase"><a class="{{Request::routeIs('app.nosotros') ? 'orange' : ''}}" href="{{route('app.nosotros',['#appNosotros'])}}">Nosotros</a></li>
            <li class="text-uppercase"><a class="{{Request::routeIs('app.servicios') ? 'orange' : ''}}" href="{{route('app.servicios')}}">Servicios</a></li>
            <li class="text-uppercase ">
                <a data-toggle="collapse" href="#collap-proyecto" role="button" aria-expanded="false" aria-controls="collap-proyecto" class="static-menu dropdown-toggle">Proyectos</a>
                <div class="collapse" id="collap-proyecto">
                    <a class="{{Request::routeIs('app.galeria') ? 'orange' : ''}}" href="{{route('app.galeria')}}">Galería</a>
                    <a class="d-block" href="#">Option</a>
                </div>
            </li>
            <li class="text-uppercase"><a  class="{{Request::routeIs('app.contacto') ? 'orange' : ''}}" href="{{route('app.contacto')}}">Contacto</a></li>

        </ul>
    </div>
</nav>



{{-- {{dd(Request::url())}} --}}
<nav class="menu-escritorio d-none d-lg-block {{Request::routeIs('app.contacto')  || Request::routeIs('app.servicios') || Request::routeIs('app.galeria')  ? 'header-color' : ''}}" 
    id="{{Request::routeIs('app.contacto')  || Request::routeIs('app.servicios') || Request::routeIs('app.galeria')  ? '' : 'menu'}}">
    <div class="container-fluid w14">
        <div class="row align-items-center">
            <div class="col-md-12 col-xl-12">
                <ul class="list-unstyled mb-0 menu">
                    {{-- <li class="text-uppercase"><a class="{{Request::routeIs('app.index') ? 'orange' : ''}}" href="{{route('app.index')}}">Inicio</a></li> --}}
                    {{-- <li class="text-uppercase"><a class="{{Request::routeIs('app.galeria') ? 'orange' : ''}}" href="{{route('app.galeria')}}">Galería</a></li> --}}
                    <li class="text-uppercase"><a class="{{Request::routeIs('app.nosotros') ? 'orange' : ''}}" href="{{route('app.nosotros',['#appNosotros'])}}">Nosotros</a></li>
                    <li class="text-uppercase"><a class="{{Request::routeIs('app.servicios') ? 'orange' : ''}}" href="{{route('app.servicios')}}">Servicios</a></li>
                  
                    <li class="text-uppercase">
                        <a href="{{route('app.index')}}">
                            <img src="{{ asset('img/logos/size/AphofisHorizontalBlanco.png') }}" alt="logo" class="logo" width="250px;">
                        </a>
                    </li>
                    <li class="text-uppercase ">
                        <a data-toggle="collapse" href="#collap-proyecto" role="button" aria-expanded="false" aria-controls="collap-proyecto" class="static-menu dropdown-toggle">Proyectos</a>
                        <div class="collapse" id="collap-proyecto">
                            <a class="{{Request::routeIs('app.galeria') ? 'orange' : ''}}" href="{{route('app.galeria')}}">Galería</a>
                            <a class="d-block" href="#">Option</a>
                        </div>
                    </li>
                    
                    <li class="text-uppercase"><a class="{{Request::routeIs('app.contacto') ? 'orange' : ''}}" href="{{route('app.contacto')}}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>