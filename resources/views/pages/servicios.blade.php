@extends('layouts.app')

@push('link')
    <link rel="stylesheet" href="{{asset('css/pages/servicios.css')}}">
@endpush

@section('contenido')
    <section class="servicios">
       <div class="background__efect">
         <div class="container">
            <div class="row justify-content-center">
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
            {{-- <div class="row justify-content-center mb-0">       
                <div class="col-12">
                    <div class="justify-content-center">
                        <ul class="ul__services">
                            <li class="li__ul"><i class="fa fa-check-square-o" aria-hidden="true"></i>
                               @include('pages.components._buton_component',['name'=>'Formulario','id'=>1])
                            </li>
                            <li class="li__ul"><i class="fa fa-building-o" aria-hidden="true"></i> 
                                @include('pages.components._buton_component',['name'=>'Diseño Arquitectónico','id'=>2])
                            </li>
                            <li class="li__ul"><i class="fa fa-ravelry" aria-hidden="true"></i> 
                                @include('pages.components._buton_component',['name'=>'Remodelación','id'=>3])
                            </li>
                            <li class="li__ul"><i class="fa fa-ioxhost" aria-hidden="true"></i>
                                @include('pages.components._buton_component',['name'=>'Interiorismo','id'=>4]) 
                            </li>
                            <li class="li__ul"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                @include('pages.components._buton_component',['name'=>'Apliación','id'=>5])  
                            </li>
                            <li class="li__ul"><i class="fa fa-undo" aria-hidden="true"></i>
                                @include('pages.components._buton_component',['name'=>'Restauración','id'=>6])
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>  

            <div class="row mb-5">
                @include('pages.components._buton_info_component')
            </div> --}}
            <div class="row mb__set justify-content-center text-center">
                <div class="col-12">
                    <div id="accordion">
                        @foreach ($services as $key => $item)
                        <div class="card">
                            <div class="card-header card-header{{$key}}" id="heading{{$key}}">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed collapsed__button" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                    {!! $item['title'] !!} <div class="ml-2 circle__icon"><i class="fa {{$item['icon']}} icon__size" aria-hidden="true"></i></div> 
                                </button>
                              </h5>
                            </div>
                            <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
                              <div class="card-body">
                                {{$item['info']}}
                              </div>
                            </div>
                          </div>
                        @endforeach
                         
                     
                      </div>
                </div>
            </div>


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
                                    <input type="text" class="form-control__set" id="inputCity" name="inputCity"  autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="state"  class="label__form">Estado</label>
                                    <input type="text" class="form-control__set" id="state" name="state"  autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="country"  class="label__form">País</label>
                                    <input type="text" class="form-control__set" id="country" name="country"  autocomplete="off">
                                </div>
                            </div>
                          </div>

                        <div class="form-group">
                            <label class="label__form">Platicanos de tu proyecto</label>
                            <textarea class="form-control__set form__capitalize" id="mensaje" rows="3" name="mensaje"  required autocomplete="off" placeholder="Mensaje"></textarea>
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
                    <p>
                        !Hola! Gracias por tu interes en Aphofis.
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

            {{-- <div class="row mb-5">
                <div class="col-12 p__info">
                    <h3 class="h3__subtitle">INVESTIGACIÓN Y CONSULTORÍA DE PROYECTOS, SOSTENIBILIDAD Y DISEÑO BIOCLIMÁTICO</h3>
                    
                    <p>
                        Participamos con diversos clientes orientándolos en fases conceptuales para integrar criterios de Diseño y un Programa Arquitectónico, entendiendo claramente las necesidades y deseos del usuario.
                    </p>
                    <p>
                        En APHOFIS Sostenibilidad, buscamos no solo mitigar, sino restaurar el medio ambiente natural y social, trabajando de lo general a lo particular, iniciando con un mapa de estrategias y lineamientos hasta llegar a soluciones específicas o certificaciones.
                    </p>
                    <p>
                        En Diseño Bioclimático analizamos los proyectos a través de simuladores de asoleamiento, ventilación e iluminación, para mejorar las condiciones de confort térmico y ambiental ,así como optimizar el consumo de energía, estableciendo estrategias de diseño pasivo que permiten disminuir el impacto ambiental de nuestras soluciones arquitectónicas. 
                    </p>

                </div>
            </div>
               
            <div class="row mb-5">
                <div class="col-12 p__info">
                    <h3 class="h3__subtitle">GESTORÍA Y CONSULTORÍA DE LA CONSTRUCCIÓN </h3>
                    <p>
                        Participamos con diversos clientes orientándolos en fases conceptuales para integrar criterios de Diseño y un Programa Arquitectónico, entendiendo claramente las necesidades y deseos del usuario.
                    </p>
                    <p>
                        En APHOFIS Sostenibilidad, buscamos no solo mitigar, sino restaurar el medio ambiente natural y social, trabajando de lo general a lo particular, iniciando con un mapa de estrategias y lineamientos hasta llegar a soluciones específicas o certificaciones.
                    </p>
                    <p>
                        En Diseño Bioclimático analizamos los proyectos a través de simuladores de asoleamiento, ventilación e iluminación, para mejorar las condiciones de confort térmico y ambiental ,así como optimizar el consumo de energía, estableciendo estrategias de diseño pasivo que permiten disminuir el impacto ambiental de nuestras soluciones arquitectónicas. 
                    </p>
                </div>
            </div> --}}

            </div> 
         </div>
       </div>
    </section>
@endsection
@push('js')
    <script src="{{asset('js/formContacto.js')}}?v=12245"></script>
@endpush
