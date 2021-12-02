@extends('layouts.app')

@push('link')
    <link rel="stylesheet" href="{{mix('css/pages/galeria.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('contenido')
    <section class="galeria">
       
          <div class="container">
              <div class="row justify-content-center">
                  <h2 class="h2__tlo" data-aos="fade-up" data-aos-duration="8000">
                      Galería
                  </h2>
              </div>
              <div class="row">
                  <div class="col-12">
                      
                      <div class="row flex flex-wrap justify-content-start "  data-aos="zoom-in-down" data-aos-duration="4000">

                        @for ($i = 1; $i < 97; $i++)
                            @if ($i%5 ==0)
                                    <div class="col-12 col-lg-8 col-md-8 m-0 m__tblr">
                                        <a data-fancybox="gallery" href="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}">
                                            <img class="imf-fluid gallery-img" src="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}" />
                                        </a>
                                    </div>
                                {{-- <div class="col-12 col-lg-3 col-md-6 m-0 m__tblr">
                                    <a data-fancybox="gallery" href="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}">
                                        <img class="imf-fluid gallery-img" src="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}" />
                                    </a>
                                </div> --}}
                            {{-- @elseif($i* % 6 ==0)
                                <div class="col-12 col-lg-8 col-md-8 m-0 m__tblr">
                                    <a data-fancybox="gallery" href="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}">
                                        <img class="imf-fluid gallery-img" src="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}" />
                                    </a>
                                </div> --}}
                            @else
                                <div class="col-12 col-lg-4 col-md-4 m-0 m__tblr">
                                    <a data-fancybox="gallery" href="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}" rel="group1">
                                        <img class="imf-fluid gallery-img" src="{{asset('img/pinturas/DBAU_page86_image'.$i.'.jpg')}}" />
                                    </a>
                                </div>
                            @endif
                            
                        @endfor

                       
                        
                        {{-- <div class="col-12 col-lg-3 col-md-6 m-0 m__tblr">
                            <a data-fancybox="gallery" href="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944__340.jpg">
                                <img class="imf-fluid gallery-img" src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944__340.jpg" />
                            </a>
                        </div>
                        
                        <div class="col-12 col-lg-3 col-md-6 m-0 m__tblr">
                            <a data-fancybox="gallery" href="https://lipsum.app/id/81/1600x1200">
                                <img class="imf-fluid gallery-img" src="https://lipsum.app/id/81/1600x1200" />
                            </a>
                        </div>
                        
                        <div class="col-12 col-lg-6 col-md-6 m-0 m__tblr">
                            <a data-fancybox="gallery" href="https://lipsum.app/id/73/1600x1200">
                                <img class="imf-fluid gallery-img" src="https://lipsum.app/id/73/1600x1200" />
                            </a>
                        </div> --}}

                     

                        
                        
                      </div>
                  </div>
              </div>
          </div>
    </section>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript">
        // $('.gallery').fancybox({
        //     'transitionIn':'elastic',
        //     'transitionOut':'elastic',
        //     'speedIn':600, 
        //     'speedOut':200, 
        //     'overlayShow':false
        // });
        // Fancybox.bind('[data-fancybox="gallery"]', {
        //     animated: false,
        //     showClass: false,
        //     hideClass: false,
        //     Toolbar: false,
        //     closeButton: "top",
        //     click: false,
        //     dragToClose: false,
        //     Carousel: {
        //         // Disable content slide animation
        //         friction: 0,
        //         // Disable touch guestures
        //         Panzoom: {
        //         touch: false,
        //         },
        //         Navigation: false,
        //     },
        //     Image: {
        //         // Disable animation from/to thumbnail on start/close
        //         zoom: false,
        //         // Disable zoom on scroll event
        //         wheel: false,
        //         // Disable zoom on image click
        //         click: false,
        //         // Fit image horizontally only
        //         fit: "contain-w",
        //     },
        //     // Center thumbnails only if draggable
        //     Thumbs: {
        //         minScreenHeight: 0,
        //         Carousel: {
        //         center: function () {
        //             return this.elemDimWidth > this.wrapDimWidth;
        //         },
        //         },
        //     },
        // });
    </script>
   
@endpush