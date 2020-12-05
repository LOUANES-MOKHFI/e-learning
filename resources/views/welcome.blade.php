@extends('layouts.app') 
  @section('title')
   Bienvenu
  @endsection
 
  @section('header')
  {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}

  {!! Html::style('designe/assets/css/welcome.css')!!}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
  {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  
   {!! Html::style('designe/assets/mobirise/css/style.css') !!}

  {!! Html::style('designe/assets/mobirise/css/mbr-additional.css') !!}
  
  <style type="text/css">
    .image{
      background-image: url('designe/assets/images/accueil.jpg');
    }
  </style>
  @endsection
  @section('content1')
  <!--section>
   <div class="slider-area">
    <div id="myCarousel" class="carousel" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>    
  </ol>

  <div class="carousel-inner">
    <div class="item">
      <img src="{{url('/storage/'.getSetting()->photo_welcom1)}}" alt="" width="100%">
      <div class="carousel-caption"></div>
    </div>
    <div class="item active">
      <img src="{{url('/storage/'.getSetting()->photo_welcom)}}" alt="" width="100%" height="50%">
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="{{url('/storage/'.getSetting()->photo_welcom2)}}" alt="" width="100%" >
      <div class="carousel-caption"></div>
    </div>
  </div>


  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</section-->


<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar image" id="header1-73" >
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center">
      <div class="mbr-overlay" style="opacity: 0.6;"></div>
        <div class="mbr-box__container mbr-section__container container">
          <div class="mbr-box mbr-box--stretched">
              <div class="mbr-box__magnet mbr-box__magnet--center">
                <div class="row">
                  <div class=" col-sm-12 col-md-12 col-xs-12">
                    <div class="mbr-hero animated fadeInUp">
                      <h3 class="my-heading ">{{ getSetting()->slegon }}<span class="bg-main">Chéres amis</span></h3>
                        <br>
                        <p class="mbr-hero__subtext myp-slider ">{{ getSetting()->description}}<br></p>
                      <form class=" form-inline my-4 my-lg-0 col-md-12" action="{{ url('/searche')}}" method="get">
                        {{ csrf_field()}}
                        <input class="myform-control mr-sm-2" type="search" placeholder="Domaine..." aria-label="Search" name="search" required>
                        <button class="btn btn-light" name="submit"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
       
    </div>
</section>

<div class="div" id="bas" >
<div class="container">


</div>
       
</div>
@endsection

@section('footer')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/jquery/jquery.min.js"></script>
  <script src="designe/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="designe/assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="designe/assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="designe/assets/jarallax/jarallax.js"></script>
  <script src="designe/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="designe/assets/masonry/masonry.pkgd.min.js"></script>
  <script src="designe/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="designe/assets/social-likes/social-likes.js"></script>
  <script src="designe/assets/mobirise/js/script.js"></script>
  <script src="designe/assets/mobirise-gallery/script.js"></script>
  @endsection
</html>
