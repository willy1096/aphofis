@extends('layouts.app')

@push('link')
    <link rel="stylesheet" href="{{asset('css/pages/servicios.css')}}">
@endpush

@section('contenido')
    <section class="servicios">
       <div class="background__efect">
         <div class="container-fuild">
            <div class="row m-0 justify-content-center">
              <div class="col-12">
                <h2 class="h2__tlo">Servicios</h2>
              </div>
            </div>
            <?php
            $services = array(
              
                [ 
                 "title"=>"Diseño Arquitectónico",
                 "url1" =>"https://cdn.pixabay.com/photo/2017/02/20/19/29/architecture-2083687__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"Diseñamos espacios arquitectónicos con base a tus necesidades, tomando en cuenta detalles como estilos, espacios y funcionamiento de los mismos, ajustándonos al tamaño que requieras e integrando las características necesarias para que puedas disfrutar de tus espacios personalizados y llenos de confort. Cuidamos cada detalle para asegurar que sean espacios que disfrutes, entendiendo tus necesidades para crear el mejor proyecto, nuestro objetivo es superar tus expectativas.",
                 "icon"=>"fa-building-o"
             ],
             [ 
                 "title"=>"Construción",
                 "url1" =>"https://cdn.pixabay.com/photo/2021/08/02/20/35/architecture-6517841__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"Todo proyecto de Aphofis es llevado con extrema seriedad y profesionalismo, comenzado desde la cimentación del inmueble, nuestro proceso de construcción nos permite prever cualquier tipo de contratiempo antes de que se haga presente, lo que maximiza la eficiencia de nuestro trabajo (poner el desglose del proceso).",
                 "icon"=>"fa-ravelry"
             ],
         
             [ 
                 "title"=>"Gestoría y Consultoría<br> de la Construcción",
                 "url1" =>"https://cdn.pixabay.com/photo/2016/11/08/05/01/airplane-1807486__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"Trabajar con Aphofis significa que tendrás un proyecto libre de preocupaciones, nosotros nos encargamos de gestionar tu proyecto de principio a fin, desde el primer trámite hasta la entrega de las llaves de tu proyecto soñado.",
                 "icon"=>"fa-arrows-alt"
             ],
             [ 
                 "title"=>"Investigación y Consultoría de Proyectos,<br> Sostenibilidad y Diseño Bioclimático",
                 "url1" =>"https://cdn.pixabay.com/photo/2016/11/08/05/01/airplane-1807486__340.jpg",
                 "url2   "=>'ejemplo@service.com',
                 "info"=>"Es de vital importancia que nuestros proyectos tengan el menos impacto posible en el ambiente, el diseño bioclimático se encarga de aprovechar las condiciones naturales del ambiente para reducir el consumo de energía, estamos en un compromiso constante con el medio ambiente, apegados a todas las normativas establecidas.",
                 "icon"=>"fa-undo"
             ],
            
            );

           
        ?>
        
         
            
                @foreach ($services as $key => $item)
                    @if ($key%2==0)
                    <div class="separed__line">
                        {{-- <div class="container"> --}}
                            <div class="row justify-content-center mb__set">
                                <div class="col-12 col-lg-6 col-md-6">
                                    <img src="https://cdn.pixabay.com/photo/2021/10/19/17/55/soumaya-museum-6724229__340.jpg"  style="min-width:100%;" class="img-fluid" alt="service">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 m-0 p-0">
                                    <div class="container">
                                        <div class="row m-0">
                                            <div class="col-12">
                                                <h2 class="tlo_service mt_tl">{!! $item['title'] !!}</h2>
                                                <p class="p_service"> {{$item['info']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}

                    </div>
                  
                    @else
                    <div class="separed__line__two">
                    {{-- <div class="container"> --}}
                        <div class="row justify-content-center mb__set">
                            <div class="col-12 col-lg-6 col-md-6 m-0 p-0">
                                <div class="container">
                                    <div class="row m-0">
                                        <div class="col-12">
                                            <h2 class="tlo_service">{!! $item['title'] !!}</h2>
                                            <p class="p_service mb_tl"> {{$item['info']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6">
                                <img src="https://cdn.pixabay.com/photo/2021/08/02/10/45/cityscape-6516367__340.jpg"  style="min-width:100%;" class="img-fluid" alt="service">
                            </div>
                        </div>
                    {{-- </div> --}}
                    </div>
                        
                    @endif
                @endforeach
           


                <div class="container container-top">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <form class="servicios-form mb-5" id="formServicios" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="last_name" class="label__form">Nombre</label>
                                            <input type="text"  required name="name"  class="form-control__set form__capitalize"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="last_name" class="label__form">Apellidos</label>
                                            <input type="text" required name="last_name" class="form-control__set form__capitalize" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mail" class="label__form">Correo Electrónico</label>
                                    <input type="email" id="mail" required name="email" class="form-control__set"  autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="tel" class="label__form">Número de teléfono</label>
                                    <input type="text" required id="tel" name="tel" class="form-control__set"  minlength="10" maxlength="10" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="inputState" class="label__form">¿En que podemos ayudarte?</label>
                                    <select id="inputState" class="form-control__set"  autocomplete="off" name="helpselect">
                                      <option selected disabled>--SELECCIONA--</option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                    </select>
                                  </div>
                                
                                  <div class="row">
                                      <div class="col-12">
                                        <label  class="label__form">Ubícación del proyecto</label>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="inputCity" class="label__form">Ciudad</label>
                                            <input type="text" class="form-control__set form__capitalize" id="inputCity" name="inputCity"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="state"  class="label__form">Estado</label>
                                            <input type="text" class="form-control__set form__capitalize" id="state" name="state"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="country"  class="label__form">País</label>
                                            <input type="text" class="form-control__set form__capitalize" id="country" name="country"  autocomplete="off">
                                        </div>
                                    </div>
                                  </div>
        
                                <div class="form-group">
                                    <label class="label__form">Platicanos de tu proyecto</label>
                                    <p class="form__capitalize_unic">
                                    <textarea class="form-control__set textarea_text"id="mensaje" rows="3" name="mensaje"  required autocomplete="off" placeholder="Mensaje"></textarea>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <small class="small__form">Si tienes información (planos, fotos del terreno) puedes adjuntar los archivos a continuación.</small>
                                    <input type="file" class="form-control-file" name="file" id="file">
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="g-recaptcha" data-sitekey="6LewdBsUAAAAAIH9Qw9hOKwRFctPddMT3u_smkoreliminar"></div>    
                                    </div>
                                    <div class="w-100 mb-4"></div>
                                    <div class="col-lg-6 col-md-12 col-12 text-right">
                                        <button type="submit" class="orange" id="btnsend">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text__info__p">
                            <p class="strong__orange">
                                ¡Hola! Gracias por tu interés en Aphofis
                            </p>
                            <p>
                                Nos adaptamos a tus presupuestos y necesidades optimizando los espacios de tu proyecto con el valor agregado que nos caracteriza en Aphofis.
                            </p>
                            <p>
                                Te brindamos las mejores opciones técnicas y estéticas al mejor costo.
                            </p>
                            <p>
                                Estamos seguros de la calidad de nuestros servicios, nos comprometemos a cuidar de tu patrimonio.
                            </p>
                        </div>
                    </div>
                </div>

           
            </div> 
         </div>
       </div>
    </section>
@endsection
@push('js')
    <script>
        document.querySelector('.textarea_text').addEventListener('input', () => {
        text = document.querySelector('.textarea_text').value;
        document.querySelector('.textarea_text').value = text.charAt(0).toUpperCase() + text.slice(1);
        })
    </script>
    <script src="{{asset('js/formContacto.js')}}?v=12245"></script>
@endpush
