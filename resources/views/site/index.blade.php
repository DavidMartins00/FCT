<!DOCTYPE html>
<html lang="en">
<head>

<title>Duarte Comunicações</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tooplate-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/parallax.css')}}">
</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.blade.php" class="navbar-brand" ></a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">

                   <li><a href="login" class="smoothScroll section-btn"><span data-hover="Entrar">Entrar</span></a></li>
                   <li><a href="register" class="smoothScroll section-btn"><span data-hover="Entrar">Registar</span></a></li>

                    <ul class="section-btn">

                    </ul>
               </ul>
          </div>

     </div>
</div>
<!-- HOME -->
<section id="home" class="parallax">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1>Duarte Comunicações</h1>
                         <p></p>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- TEAM -->
<section id="team" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                         <h1>Discontos</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div id="owl-team" class="owl-carousel">
                   @forelse ($ad as $var)
                       <div class="col-md-4 col-sm-4 item">
                           <div class="team-item">
                              <img src="{{$var->img}}" class="img-responsive" alt="">
                               <div class="team-overlay">
                               </div>
                           </div>
                           <a href="/anuncio/{{$var->id}}"><h3>{{$var->nome}}</h3></a>
                           <p>{{$var->preco}}€</p>
                       </div>
                   @empty
                       <div style="text-align: center;">
                       <h1>Sem discontos</h1>
                       </div>
                   @endforelse
               </div>

          </div>
     </div>
</section>


<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                         <h1>Local da loja</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- Mapa -->

               </div>

          </div>
     </div>
</section>

@include('site/assets/footer')

<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
