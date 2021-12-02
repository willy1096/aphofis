<!DOCTYPE html>
<html lang="es">
    <head>
        @include('includes.metas')
        <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        @stack('link')
        <style>
          .container{
            align-content: center;
            align-items: center;
            justify-content: center;
            text-align: center;
          }
          .col__set{
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
          }
        </style>
    </head>
    <body>
        
        <div class="container d-flex" style="height:100vh">
          <div class="row justify-content-center">
           <div class="col-12 col__set">
           
                <img src="{{asset('img/logos/size/AphofisHorizontalBlanco.png')}}" alt="logo" class="m15 d-block" style="width: 300px;">
             
              <p class="p__info">POR EL MOMENTO NUESTRA PLATAFORMA SE ENCUENTRA EN PROCESO DE RECONSTRUCCIÓN.<br>
                MUY PRONTO ESTAREMOS EN LÍNEA CONTIGO</p>
           </div>
          </div>
        </div>

        

        <script>
            const PATH = "{{asset('')}}";
        </script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
      
    </body>
</html>
