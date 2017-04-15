<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title') </title>

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/timer.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/component.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/gridlayout.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialadmin.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/hover.css') }}">
    <script src="js/modernizr.custom.js"></script>
    <title>Tanny & Hiphy</title>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <audio id="audioplayer"  controls> <!-- Remove the "Controls" Attrebute if you dont want the visual controls -->
   </audio>

 <style media="screen">
   .player{
     position:absolute;
     bottom:0;
     z-index:99999;
   }

   .footer{
     position: absolute;
     right: 5px;
     bottom: 0;
     z-index: 9999999999;
     width: 60%;
     padding: 3px 0;
     color:#454545;
   }
   .footer a{
     color: #cc0000;
   }
 </style>
 <script>

   window.setTimeout(function(){
   $('#audioplayer').addClass("player");

 }, 15000);

   </script>

 <script>

 var lastSong = null;
 var selection = null;
 var playlist = [

   "{{ asset('audio/0.mp3') }}",
   "{{ asset('audio/1.mp3') }}",
   "{{ asset('audio/3.mp3') }}"
   // "http://cdn.naijaextra.com/wp-content/uploads/2017/01/Simi-Smile-For-Me.mp3",
   //  "http://tooxclusive.com/wp-content/uploads/2014/02/Timi-Dakolo-Iyawo-Mi_tooXclusive.com_.mp3",
   //  "http://www.flexymusic.com/wp-content/uploads/2015/06/Tiwa_Savage_-_Ife_Wa_Gbona_Ft_Leo_Wonder_www.flexymusic.com_.mp3"

    //"http://tooxclusive.com/wp-content/uploads/2016/05/Solidstar-ft.-Patoranking-x-Tiwa-Savage-Wait-Refix.mp3"
  ]; // List of Songs
 var player = document.getElementById("audioplayer"); // Get Audio Element
 player.autoplay=true;
 player.addEventListener("ended", selectRandom); // Run function when song ends
 player.volume=0.5;

 function selectRandom(){
 while(selection == lastSong){ // Repeat until different song is selected
   selection = Math.floor(Math.random() * playlist.length);
 }
 lastSong = selection; // Remember last song
 player.src = playlist[selection]; // Tell HTML the location of the new Song

 }

 selectRandom(); // Select initial song
 player.play(); // Start Song


 $(window).ready(function(){
   setInterval(function(){
     $("audio").addClass("player")
   }, 15000);

 });

 </script>


    @yield('menu')
    @yield('home')
    @yield('front')
    @yield('couple')
    @yield('events')
    @yield('gallery')
    @yield('friends')
    @yield('wishes')
    @yield('rsvp')



    @section('footer')

        <div class="footer pull-right">
          <div class="footer">
            <small>&copy; 2017, HiphyTanny | <a href="http://a1digitalsystems.com">A1-Digital Systems &trade;</a></small>
          </div>
        </div>

    @show



  <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/function.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/randomsong`.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/easyResponsiveTabs.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/timer.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.final-countdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.dlmenu.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/pagetransitions.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.countdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.masonarygrid.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.fancybox.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/formValidation.js') }}"></script>
</body>
</html>
