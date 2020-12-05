@extends('layouts.app')
@section('header')
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
  {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('designe/assets/bootstrap/css/bootstrap.min.css') !!}
   {!! Html::style('designe/assets/mobirise/css/style.css') !!}

  {!! Html::style('designe/assets/mobirise/css/mbr-additional.css') !!}
  <style type="text/css">
  .image{
      background-image: url('/designe/assets/images/accueil.jpg');
    }
</style>
@endsection
@section('title')
  Accueil
@endsection


@section('content') 
  <section class="content-2 simple col-undefined mbr-parallax-background mbr-after-navbar image" id="content5-92" style="height: 520px" >
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                    <h3>{{getSetting()->site_name}}</h3>
                    <div><p>Cheres etudiants,Bienvenu dans votre site web! <br></p></div>
                    <br>

           
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
