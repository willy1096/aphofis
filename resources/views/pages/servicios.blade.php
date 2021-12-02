@extends('layouts.app')

@push('link')
    <link rel="stylesheet" href="{{mix('css/pages/servicios.css')}}">
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
            <div class="row justify-content-center mb-0">       
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
            </div>

            <div class="row mb-5">
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
            </div>

            </div> 
         </div>
       </div>
    </section>
@endsection
