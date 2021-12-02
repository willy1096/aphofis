@extends('layouts.app')

@push('link')
    <link rel="stylesheet" href="{{mix('css/pages/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/swiper/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/splide/dist/css/splide.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endpush

@section('contenido')
    <section class="home">
     
        {{-- Banner --}}
        <div class="swiper-container1 home-banner">
            <div class="info__content_header">
                <h2 data-aos="fade-up" data-aos-duration="8000">Hola mundo</h2>
                <p data-aos="fade-up" data-aos-duration="8000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quam!<br>Eum doloribus rem veniam debitis quis</p>
            </div>
            <div class="line___bar">
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
            </div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="header__efect"> </div>
                    <div class="bg home-banner" style="background-image: url('https://cdn.pixabay.com/photo/2017/09/18/16/36/building-2762319_960_720.jpg')">
                        <img src="https://cdn.pixabay.com/photo/2017/09/18/16/36/building-2762319_960_720.jpg" alt="Slider-">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header__efect"> </div>
                    <div class="bg home-banner" style="background-image: url('https://cdn.pixabay.com/photo/2017/06/30/12/10/shipyard-2458150_960_720.jpg')">
                        <img src="https://cdn.pixabay.com/photo/2017/06/30/12/10/shipyard-2458150_960_720.jpg" alt="Slider-">
                    </div>
                </div>
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
                                    <p class="p__info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, placeat dolore ab commodi veniam vero eveniet blanditiis dicta accusantium itaque error dolores tempore rem aliquid! Facere, nihil? Iusto, soluta nam!
                                    Cupiditate, exercitationem magnam. Assumenda natus provident itaque nesciunt! Exercitationem deleniti accusantium quam voluptatibus eius eos nisi itaque, laboriosam recusandae doloribus? Dolorem non libero repellendus cupiditate corrupti! Tempore error amet quae.
                                    Temporibus autem obcaecati eum, voluptate laudantium est vero veritatis! Non possimus tenetur qui illo alias eius exercitationem consequatur nihil, voluptatem delectus vel. Suscipit autem in quo doloribus quasi animi commodi?
                                    Qui ad non quam deserunt, natus tenetur quae voluptas praesentium veniam! Officia ipsum quibusdam minus sunt. Modi quas perspiciatis, laudantium quo, explicabo optio quae minus rem temporibus nulla, nemo facere.</p>
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
                    "name"=>"John Doe",
                    "url" =>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.JF8y6azJIJ0r9w9Ho4Og-wHaE7%26pid%3DApi&f=1",
                    "info"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates cum, aliquam quo pariatur ipsa ullam alias optio veniam suscipit atque sint necessitatibus esse totam modi molestias, nostrum tempore, est eveniet.",
                    "mail"=>'ejemplo@service.com'
                ],
                [ 
                    "name"=>"John Doe",
                    "url" =>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.8ZTGNmcyDgN3YX7ciH0ovgHaEL%26pid%3DApi&f=1",
                    "info"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates cum, aliquam quo pariatur ipsa ullam alias optio veniam suscipit atque sint necessitatibus esse totam modi molestias, nostrum tempore, est eveniet.",
                    "mail"=>'ejemplo@service.com'
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
                            <div class="col-md-4">
                                <div class="profile-card-4 text-center">
                                    <img src="{{$item['url']}}" class="img img-responsive">
                                    <div class="profile-content">
                                        <div class="profile-name p__info__h4">{{$item['name']}}
                                            <p>{{$item['mail']}}</p>
                                        </div>
                                        <div class="profile-description p__info__small">
                                            {{$item['info']}}
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
                    "title"=>"Formulario",
                    "url1" =>"https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944__340.jpg",
                    "url2   "=>'ejemplo@service.com',
                    "info"=>"",
                    "icon"=>"fa-check-square-o"
                ],
                [ 
                    "title"=>"Diseño Arquitectónico",
                    "url1" =>"https://cdn.pixabay.com/photo/2017/02/20/19/29/architecture-2083687__340.jpg",
                    "url2   "=>'ejemplo@service.com',
                    "info"=>"",
                    "icon"=>"fa-building-o"
                ],
                [ 
                    "title"=>"Remodelación",
                    "url1" =>"https://cdn.pixabay.com/photo/2021/08/02/20/35/architecture-6517841__340.jpg",
                    "url2   "=>'ejemplo@service.com',
                    "info"=>"",
                    "icon"=>"fa-ravelry"
                ],
                [ 
                    "title"=>"Interiorismo",
                    "url1" =>"https://cdn.pixabay.com/photo/2016/12/17/20/05/building-1914309__340.jpg",
                    "url2   "=>'ejemplo@service.com',
                    "info"=>"",
                    "icon"=>"fa-ioxhost"
                ],
                [ 
                    "title"=>"Apliación",
                    "url1" =>"https://cdn.pixabay.com/photo/2016/11/08/05/01/airplane-1807486__340.jpg",
                    "url2   "=>'ejemplo@service.com',
                    "info"=>"",
                    "icon"=>"fa-arrows-alt"
                ],
                [ 
                    "title"=>"Restauración",
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
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-0 col__background" style="background-image: url({{$item['url1']}})">
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
        //   autoplay: {
        //     delay: 5000,
        //   },
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