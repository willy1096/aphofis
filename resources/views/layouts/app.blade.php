<!DOCTYPE html>
<html lang="es">
    <head>
        @include('includes.metas')
        <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        @stack('link')
       
    </head>
    <body>
        
        <div class="loading w-100 vh-100 align-items-center justify-content-center" id="app">
			<div class="text-center">
				<img src="{{asset('img/logos/size/AphofisHorizontalBlanco.png')}}" alt="logo" class="m15 d-block" style="width: 300px;">
			</div>
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>

        @include('includes.menu')

        @yield('contenido')

        @include('includes.footer')

        <script>
            const PATH = "{{asset('')}}";
        </script>
        <script src="{{mix('js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        
        
        <script>
            $(function() {
                 var elemento = document.getElementById("menu");
                    if( elemento != null ) {
                      
                        $(window).scroll(function() {
                            if ($(this).scrollTop() > 200) {
                                elemento.classList.add('header-color');
                            } else {
                                    elemento.classList.remove('header-color');
                            }
                        })

                    }
            });


            
            
       </script>
      <!-- Messenger plugin de chat Code -->
        <div id=“fb-root”></div>    <!-- Your plugin de chat code -->
        <div id=“fb-customer-chat” class=“fb-customerchat”></div>    
        <script>
            var chatbox = document.getElementById(‘fb-customer-chat’);
            chatbox.setAttribute(“page_id”, “106850671766533”);
            chatbox.setAttribute(“attribution”, “biz_inbox”);      window.fbAsyncInit = function() {
                FB.init({
                xfbml            : true,
                version          : ‘v12.0’
                });
            };      (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = ‘https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js’;
                fjs.parentNode.insertBefore(js, fjs);
            }(document, ‘script’, ‘facebook-jssdk’));
        </script>
        @stack('js')
    </body>
</html>

{{-- 
        Las variedades de as necesidades de las cuales pordemos
    --}}