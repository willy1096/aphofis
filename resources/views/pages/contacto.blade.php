@extends('layouts.app')
@push('link')
    <link rel="stylesheet" href="{{asset('css/pages/contacto.css')}}">
@endpush
@section('contenido')
    <section class="contacto">
        <div class="contacto-form">
          <div class="container-fluid">
            <div class="row m-0 justify-content-center" data-aos="zoom-in">
                <div class="col-12 col-xl-5 col-lg-10 col-md-12">
                    <h2 class="text-uppercase h2__tlo">Contacto</h2>
                    <form class="mb-5" id="formContacto" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text"  required name="name"  class="form-control__set form__capitalize" placeholder="Nombre" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" required name="last_name" class="form-control__set form__capitalize" placeholder="Apellido" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="email" required name="email" class="form-control__set" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <input type="text" required name="tel" class="form-control__set" placeholder="Teléfono"  minlength="10" maxlength="10" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control__set form__capitalize" id="mensaje" rows="3" name="mensaje" placeholder="Mensaje" required autocomplete="off"></textarea>
                        </div>
                       
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="g-recaptcha" data-sitekey="6LewdBsUAAAAAIH9Qw9hOKwRFctPddMT3u_smkoreliminar"></div>    
                            </div>
                            <div class="w-100 mb-4"></div>
                            <div class="col-lg-12 col-md-12 col-12 align-self-center text-center">
                                <button type="submit" class="orange" id="btnsend">Enviar</button>
                            </div>
                          
                        </div>
                    </form>
                </div>
                {{-- <div class="col-1"></div> --}}
                <div class="col-12 col-xl-5 col-lg-10 col-md-12">
                    {{-- <img src="https://cdn.pixabay.com/photo/2018/01/31/05/43/web-3120321__340.png" alt="" class="img-fluid"> --}}
                    {{-- <div id="mapa"></div> --}}
                    {{-- <iframe src="https://www.google.com/maps/d/embed?mid=1abCpnL2PTBQ7DvsLsHng_tb0I1VaWi4j&hl=es-419&ehbc=2E312F" width="100%" height="480"  scrolling="no" style="border:0" frameborder="0" seamless="seamless"></iframe> --}}

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14897.13227564356!2d-89.6182397!3d21.0213568!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5eb983989bff8481!2sAphofis%20M%C3%A9rida!5e0!3m2!1ses!2smx!4v1641325992835!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
          </div>
        </div>
    </section>
@endsection
@push('js')
    <script type="text/javascript">
        var lat = 21.0185226
            lng = -89.6075588;
    </script>
    {{-- <script src="{{asset('js/mapa.js')}}?v=12245"></script> --}}
    <script src="{{asset('js/formContacto.js')}}?v=12245"></script>
    {{-- <script type="text/javascript" src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuu1Q0hHmlO30h7YRDZ0mWYof-SM-edns&callback=initMaps"></script> --}}
@endpush