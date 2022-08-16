<!doctype html>
<html lang="en">
    <head>
        <title>Lab Integration</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		    <link rel="icon" href="{{asset('staticPages/images/favicon.png')}}" type="image/png">
        <!-- Bootstrap CSS -->
       <!--  <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
    rel="stylesheet" type="text/css" />
        <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" /> -->

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('staticPages/css/register.css')}}">
        <link rel="stylesheet" href="{{asset('staticPages/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('staticPages/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('staticPages/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{asset('staticPages/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('staticPages/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('staticPages/css/aos.css')}}"> 
        <link rel="stylesheet" href="{{asset('staticPages/css/animate.css')}}"> 
        <link rel="stylesheet" href="{{asset('staticPages/css/sdd-front-end.css?v=6.1')}}">        
        <!-- <link href="{{ URL::asset('css/bootstrap-multiselect.css')}}" rel="stylesheet" type="text/css"/> -->
        <link rel="canonical" href="https://coripple.com/" >
        <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css"/> 
        @yield('css')

              <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153496679-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-153496679-1');
        </script>

    </head>
        <body class="{{ !Request::is('sign-in','sign-up','password-reset','client-verification','user-forgot-password','resetlink')  ? 'index-page' : '' }}" >      
          @if(!Request::is('sign-in', 'sign-up','password-reset','client-verification','user-forgot-password','resetlink'))
            
            @yield('content')
            
          @else
            @yield('content') 
          @endif



    	<div class="cookies-notification">
    	    <p>We use cookies to recognize your preferences and for delivering the best browsing experience. By continuing to use our site, you agree to accept our privacy policy .</p>
    	    <button class="btn btn-primary btn-white">i Accept</button>
    	</div>


	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="{{asset('staticPages/js/waypoints.min.js')}}"></script>
        <script src="{{asset('staticPages/js/slick.min.js')}}" ></script>
        <script src="{{asset('staticPages/js/jquery.countup.js')}}"></script>
        <script type="text/javascript" src="{{asset('staticPages/js/jquery.validate.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}"></script>
        @if(Request::is('sign-up'))
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ09dtOd8YHF_ZCbfbaaMHJKiOr26noY8&libraries=places&callback=initAutocomplete" async defer></script>
        @endif
        @yield('js')
 
        <script type="text/javascript">

      
        $('#energy').select2({
          placeholder: 'Type or select sector ',
          selectOnClose: false
        });
        $('#industry').select2({
          placeholder: 'Type or select sector ',
          selectOnClose: false
        });
          
        $(window).scroll(function() {    
           var scroll = $(window).scrollTop();
           
           if (scroll >= 100) {
               $("header").addClass("scrollhead");
           } else {
               $("header").removeClass("scrollhead");
           }
       });

      // $(function () {
      //   $("label.fixed-error span span.cross-btn ").click(function(){
      //     $("label.fixed-error ").hide();
      //   });


      //    $('#submitBtn').prop("disabled",false);
       
      //     if(localStorage.getItem('popState') != 'shown'){
      //         setTimeout(function(){
      //             $('.cookies-notification').show(200);
      //         }, 500);
      //     }
          
      //     $(".cookies-notification button.btn.btn-primary.btn-white").click(function(){
      //         $(".cookies-notification").hide();
      //         localStorage.setItem('popState','shown')
      //     });
          
      //     setTimeout(function(){
      //         $('label.fixed-error').hide();
      //     }, 5000);
      // });



    </script>

    </body>
</html>
