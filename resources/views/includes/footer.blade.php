<div class="whatsapp-footer">
    <a href="wa.link/ihh5u6" target="_blank">
        <img style="width:40px;" src="{{asset('img/whats.png')}}" alt="whatsapp">
    </a>
    <a href="#" target="_blank">
        <img style="width:40px;" src="{{asset('img/fb.png')}}" alt="facebook">
    </a>
    <a href="#" target="_blank">
        <img style="width:40px;" src="{{asset('img/instagram.png')}}" alt="instagram">
    </a>
</div>
<footer>
    <div class="container-fluid w14">
       <div class="row justify-content-center menu">
           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 special mbutton">
                <img src="{{ asset('img/logos/Aphofis_LogoBlanco-03.png') }}" alt="logo-footer.svg" class="mbutton" style="width: 165px;">
                <ul>
                    <li>Aviso de Privacidad</li>
                    <li>Términos y Condiciones</li>
                </ul>
           </div>
           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 special mbutton">
                <h3 class="h3__footer">Menú</h3>
                <ul>
                    <li class="">
                        <a data-toggle="collapse" href="#collap-proyectoT" role="button" aria-expanded="false" aria-controls="collap-proyectoT" class="static-menu dropdown-toggle">Proyectos</a>
                        <div class="collapse" id="collap-proyectoT">
                            <a class="{{Request::routeIs('app.galeria') ? 'orange' : ''}}" href="{{route('app.galeria')}}">Galería</a>
                            <a class="d-block" href="#">Option</a>
                        </div>
                    </li>
                    <li class=""><a class="{{Request::routeIs('app.nosotros') ? 'orange' : ''}}" href="{{route('app.nosotros',['#appNosotros'])}}">Nosotros</a></li>
                    <li class=""><a class="{{Request::routeIs('app.servicios') ? 'orange' : ''}}" href="{{route('app.servicios')}}">Servicios</a></li>
                  
                    <li class=""><a class="{{Request::routeIs('app.contacto') ? 'orange' : ''}}" href="{{route('app.contacto')}}">Contacto</a></li>
                </ul>
           </div>
           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 special mbutton">
               <h3 class="h3__footer">Contáctanos</h3>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Dirreción:</li>
                    <li> Calle 45 #211 x 50 y 52 Col. Benito Juárez Norte</li>
                    
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> Correo:</li>
                    <li><a href="mailto:contacto@aphofis.com">contacto@aphofis.com</a></li>
                    
                    <li><i class="fa fa-phone" aria-hidden="true"></i> Teléfono:</li>
                    <li><a href="tel:+529999938605"> 999 993 8605</a></li>
                </ul>
           </div>
           <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 special__set">
               <div class="row">
                   <div class="col-12">
                        <h3 class="h3__footer mb-1">Síguenos</h3>
                        <a href="#"><i class="fa fa_set fa-facebook mr-1" aria-hidden="true"></i></a>
                        <a href="#" class="mr-3"><i class="fa fa_set fa-instagram" aria-hidden="true"></i></a>
                   </div>
               </div>
           </div>
       </div>
       <div class="row justify-content-center text-center pt-4">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{asset('img/WHATSAPP.png')}}" alt="logo" width="20px">
                <p class="text__logo">Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
       </div>
    </div>
</footer>
