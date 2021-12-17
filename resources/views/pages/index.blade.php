@extends('layouts.app')

@push('link')
    <link rel="stylesheet" href="{{asset('css/pages/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/swiper/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/splide/dist/css/splide.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endpush

@section('contenido')
    <section class="home">
     
        <?php
            $slider = array(
                [
                    'frase' => 'Arquitectura y diseño como jamás habías visto.',
                    'img' => 'https://cdn.pixabay.com/photo/2020/11/05/23/16/city-5716456_960_720.jpg',
                ],
                [
                    'frase' => 'Construye el futuro que quieres ver <br> (en el que quieres vivir).',
                    'img' => 'https://cdn.pixabay.com/photo/2017/06/30/12/10/shipyard-2458150_960_720.jpg',
                ],
                [
                    'frase' => 'Tus ideas nuestra pasión,<br> construye un futuro con Aphofis.',
                    'img' => 'https://cdn.pixabay.com/photo/2015/12/03/01/05/architect-1073607_960_720.jpg',
                ],
                [
                    'frase' => 'Convertimos espacios en auténticas obras de arte,<br> descubre como.',
                    'img' => 'https://cdn.pixabay.com/photo/2018/05/26/13/08/construction-3431327_960_720.jpg',
                ],
                [
                    'frase' => 'Conoce Aphofis y cambia para siempre la forma en la que ves<br> tus proyectos.',
                    'img' => 'https://cdn.pixabay.com/photo/2020/11/05/23/16/city-5716456_960_720.jpg',
                ]

            );    
        ?>
        {{-- Banner --}}
        <div class="swiper-container1 home-banner">
            {{-- <div class="info__content_header">
                <h2 data-aos="fade-up" data-aos-duration="8000">Aphofis</h2>
                <p data-aos="fade-up" data-aos-duration="8000">
                    Arquitectura y diseño como jamás habías visto. <br>
                    Construye el futuro que quieres ver (en el que quieres vivir). <br>
                    Tus ideas nuestra pasión, construye un futuro con Aphofis. <br>
                    Convertimos espacios en auténticas obras de arte, descubre como. <br>
                    Conoce Aphofis y cambia para siempre la forma en la que ves tus proyectos.
                </p>
            </div> --}}
            {{-- <div class="line___bar">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center align-items-center">
                        <div class="col-lg-3 col-md-4 col-4 p-0">
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Correo:</p>
                            <li><a href="mailto:contacto@aphofis.com">contacto@aphofis.com</a></li>

                        </div>
                        <div class="col-lg-3 col-md-4 col-4 p-0">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> Teléfono:</p>
                            <a href="tel:+529999938605"> 999 993 8605</a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-4 p-0">
                            <p>Redes:</p>
                            <i class="fa fa-facebook mr-1" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="swiper-wrapper">
              
                @foreach ($slider as $item)
                    <div class="swiper-slide">

                        <div class="header__efect">
                            <p data-aos="fade-up" data-aos-duration="8000">
                                {!! $item['frase'] !!}
                            </p>
                        </div>
                        <div class="bg home-banner" style="background-image: url({{$item['img']}})">
                            <img src="{{$item['img']}}" a   lt="Slider-">
                        </div>
                    </div>
                @endforeach
                {{-- <div class="swiper-slide">
                    <div class="header__efect"> </div>
                    <div class="bg home-banner" style="background-image: url('https://cdn.pixabay.com/photo/2017/06/30/12/10/shipyard-2458150_960_720.jpg')">
                        <img src="https://cdn.pixabay.com/photo/2017/06/30/12/10/shipyard-2458150_960_720.jpg" alt="Slider-">
                    </div>
                </div> --}}
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
               
            {{-- @endif --}}
        </div>

     
        {{-- Informacion --}}
         <div class="home-informacion padding__tb" id="appNosotros" data-aos="fade-in" data-aos-duration="4000">
             
            <div class="container-fluid p-0 m-0">
                {{-- <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.H3kEnQLEbO99AJeEvipL6QHaC1%26pid%3DApi&f=1" class="img-fluid img-float"> --}}
                <div class="row m-0">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 col-md-10 card-one">
                              <div class="row justify-content-center">
                                  <div class="col-12 col-lg-12 col-md-11">
                                    <h2 class="h2__tlo">Nosotros</h2>
                                    <p class="p__info">
                                        Aphofis es una compañía afiliada a Grupo Tikal, enfocada en ofrecer soluciones creativas e innovadoras en arquitectura y diseño. Se busca siempre ofrecer proyectos que estén a la vanguardia, usando las mejores tecnologías y respetando el medio ambiente.
                                    </p>
                                    <p class="p__info">
                                        En Aphofis no hacemos una simple construcción, ya que vemos en la arquitectura una forma de expresión artística. Diseñamos estrategias a partir de las distintas formas de habitar, por lo que nos caracterizamos por ofrecer soluciones únicas antes problemas específicos.
                                    </p>
                                  </div>
                              </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="decoration__line">
                1
            </div>
            <div class="decoration__line__dos">
            2
            </div>
            <div class="decoration__line__tres">
            3
            </div>
            <div class="decoration__line__cuatro">
            4
            </div> --}}
        </div>

        {{-- arquitecto --}}
        <?php
            $arquitecto = array(
                [ 
                    "name"=>"Arq. Luis Estrada Salazar",
                    "url" =>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.JF8y6azJIJ0r9w9Ho4Og-wHaE7%26pid%3DApi&f=1",
                    "info"=>"Licenciado por la Universidad Veracruzana con una especialidad en Diseño Industrial en la Facultad de Arquitectura, Diseño y Urbanismo (Fadu) en Buenos Aires, Argentina.<br>
                    Cuenta con múltiples artículos y capítulos de libros especializados en arquitectura, así como ponencias en diversos estados del país, así como en la Universidad de Chiba en Japón. Además de estar involucrado en el desarrollo y supervisión de obra, de más de 350 proyectos de vivienda residencial y comercial en Xalapa, Veracruz y Puebla.",
                    "mail"=>''
                ],
                [ 
                    "name"=>"Arq. Brahim Abdaly Bautista",
                    "url" =>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.8ZTGNmcyDgN3YX7ciH0ovgHaEL%26pid%3DApi&f=1",
                    "info"=>"Arq. Brahim Abdaly Bautista, graduado de la Universidad Veracruzana con una maestría en la Universidad Cristóbal Colón.<br>
                    Sus escritos se han publicado en más de 20 revistas especializadas y ha impartido ponencias en Universidades nacionales e internacionales, además ha sido galardonado con más de una docena de premios, entre los que destaca el premio Primea Bienal de Arquitectura del Golfo.",
                    "mail"=>''
                ],
            );
        ?>

        
        <div class="home-arquitecto" data-aos="fade-right" data-aos-duration="4000">
            <div class="lin__kj"></div>
            <div class="oscured__effect padding__tb">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <h2 class="h2__tlo">Arquitectos</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        @foreach ($arquitecto as $key=>$item)
                            <div class="col-md-6">
                                <div class="profile-card-4 text-center">
                                        <div class="row">
                                            <div class="col-4 img__m p__info__h4">{{$item['name']}}</div>
                                            <div class="col-8 img__k p-0">
                                                <img src="{{$item['url']}}" class="img img-responsive">
                                                <div class="oscured"></div>
                                            </div>
                                            
                                        </div>
                                    <div class="profile-content">
                                        {{-- <div class="profile-name p__info__h4">{{$item['name']}}
                                        </div> --}}
                                        <div class="profile-description p__info__small">
                                            {!! $item['info'] !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach
                       
                    </div>
                  
                </div>
            </div>
        </div>
        <?php
        $services = array(
                       
             [ 
                 "title"=>"Diseño Arquitectónico",
                 "url1" =>"https://cdn.pixabay.com/photo/2017/02/20/19/29/architecture-2083687__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"",
                 "icon"=>"fa-building-o"
             ],
             [ 
                 "title"=>"Construción",
                 "url1" =>"https://cdn.pixabay.com/photo/2021/08/02/20/35/architecture-6517841__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"",
                 "icon"=>"fa-ravelry"
             ],
         
             [ 
                 "title"=>"Gestoría y Consultoría de la Construcción",
                 "url1" =>"https://cdn.pixabay.com/photo/2016/11/08/05/01/airplane-1807486__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"",
                 "icon"=>"fa-arrows-alt"
             ],
             [ 
                 "title"=>"Investigación y Consultoría de Proyectos, Sostenibilidad y Diseño Bioclimático",
                 "url1" =>"https://cdn.pixabay.com/photo/2016/11/08/05/01/airplane-1807486__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"",
                 "icon"=>"fa-undo"
             ],
       
         );
       
       ?>
       
       {{-- servicios --}}
       <div class="home-services padding__tb" id="appServices" data-aos="zoom-in-down" data-aos-duration="4000">
           
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <h2 class="h2__tlo">Servicios</h2>
                    </div>    
                </div>
                {{-- <div class="row">
                   <div class="col-12">
              
                    <div class="swiper-container2">
                        <div class="swiper-wrapper">
                            @foreach ($services as $key => $item)
                                <div class="swiper-slide">
                                    <div class="col-12 pb-3">
                                        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
                                        <div class="card-custom-img" style="background-image: url({{$item['url1']}});"></div>
                                        <div class="card-custom-avatar">
                                            <div class="circle">
                                                <i class="fa fa-building-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow-y: auto">
                                            <h4 class="card-title p__info__h4">{{$item['title']}}</h4>
                                            <p class="card-text p__info__small">
                                                {{$item['info']}}
                                            </p>
                                        </div>
                                        <div class="card-footer" style="background: inherit; border-color: inherit;">
                                            <a href="{{route('app.servicios')}}" class="btn btn-outline-primary">Ver más</a>
                                        </div>

                                        </div>
                                    </div>
                                    
                               
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <h4 class="card-title p__info__h4">{{$item['title']}}</h4>
                                       
                                        <a href="{{route('app.servicios')}}" class="btn btn-outline-primary">Ver más</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br><br>
                        <div class="swiper-pagination mt-5"></div>
                    </div>
                   </div>
                </div> --}}

                <div class="row">
                    @foreach ($services as $key => $item)

                        <div class="col-lg-3  col-md-3 col-sm-6 col-6 p-0 col__background" style="background-image: url({{$item['url1']}})">
                            <div class="effect__l">
                                <div class="circle__icon"><i class="fa {{$item['icon']}} icon__size" aria-hidden="true"></i></div>
                                <h3>{{$item['title']}}</h3>
                                <a href="{{route('app.servicios',['#collapse1'])}}" class="btn__service">Ir</a>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
       </div>
       
       {{-- <div class="line__all"></div>
       <div class="line__all__cuadrado"></div>
       <div class="line__all__small"></div> --}}
       {{-- <div id="muteYouTubeVideoPlayer"></div> --}}
    </section>
@endsection

@push('js')

    <script src="{{asset('assets/swiper/swiper.min.js')}}"></script>
    {{-- <script src="{{asset('assets/splide/dist/js/splide.min.js')}}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script> --}}
    {{-- <script type="text/javascript" src='https://www.google.com/recaptcha/api.js?hl=es'></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script> --}}
    <script>
        var sw3 = new Swiper('.swiper-container1', {
            slidesPerView: 1,
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-container1 .swiper-button-next',
                prevEl: '.swiper-container1 .swiper-button-prev',
            },
            autoplay: {
                delay: 1500,
            },
        });
        
    </script>
     <!-- Initialize Swiper -->
     
     <script>
        //  console.log( $( window ).width() );
     var swiper = new Swiper(".swiper-container2", {
          slidesPerView: $( window ).width() < 768 ? 3 : 5 ,
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-container2 .swiper-button-next',
            prevEl: '.swiper-container2 .swiper-button-prev',
          },
            autoplay: {
            delay: 1500,
          },
        });
      </script>
      
@endpush