@extends('layouts.app') 
  @section('title')
    Documents
  @endsection
 
  @section('header')

  {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  
   {!! Html::style('designe/assets/mobirise/css/style.css') !!}

  {!! Html::style('designe/assets/mobirise/css/mbr-additional.css') !!}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  {!! Html::style('designe/assets/css/show.css')!!}
  {!! Html::style('designe/assets/css/dz.css')!!}
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
  @endsection

  @section('content')
<section id="team" class="pb-5"  style="background-color: rgb(76, 90, 6);">
    <div class="container">
       <h2>Domain: <span>{{ $_GET['search']}}</span></h2>
       <h3>Nombre de documents: <span>{{ count($examens)+count($tds)+count($cours)+count($correction_e)+count($correction_t)}}</span></h3>
       <div class="button dropdown">
        @if(count($examens)+count($tds)+count($cours)+count($correction_e)+count($correction_t) == 0)
          
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row alert alert-info-alt alert-dismissable">
        <h2>Alerts</h2>
        <div class="col-md-12 text-center">
          
            <div class="alert alert-info-alt alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    </button>
                    <strong style="font-size: 25px">{{ $_GET['search']}}</strong><p style="font-size: 20px">Ce Domaine ne contient aucun document</p> 
            </div>
        </div>
    </div>
</div>
        @else
         <select class="form-control" id="document">
          <!--option value="doc">--selectionnez les documents--</option-->
           <option value="cours">Cours</option>
           <option value="tds">Tds</option>
           <option value="examens">Examens</option>
         </select>
         @endif
       </div>
       <br>
        <div class="py-3">
         <div class="container" id="doc" >
          <div class="row justify-content a" id="cours">
           @foreach($cours as $cour)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
              <a href="{{ asset('/cours/'.$cours->cours )}}" target="_blank" class="section-card card elevation-8dp btn  btn-sm">
            <div class="overlay blue"></div>
            <div class="card-body">
              <h5 class="card-title year">{{ $cour->domaine }}</h5>
              <h5 class="card-title year">{{ module($cour->id_module)->nom_module }}</h5>
              <p class="card-text">{{ str_limit($cour->cours,30) }}</p>
              <span class="badge badge-dark font-weight-bold text-center p-2 mr-2 type-doc">Cour</span> <i class="fa fa-download"></i>
            </div> 
            </a> 
            </div>
            @endforeach
          </div>

            <br>
            <div class="row justify-content-center a" id="tds">
             @foreach($tds as $tds)
             <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
              <a href="{{ asset('/Tds/'.$tds->serie )}}" target="_blank" class="section-card card elevation-8dp btn  btn-sm">

            <div class="overlay mint"></div>
            <div class="card-body">
              <h5 class="card-title year">{{ $tds->domaine }}</h5>
              <h5 class="card-title year">{{ module($tds->id_module)->nom_module }}</h5>
              <p class="card-text">{{ str_limit($tds->serie,30) }}</p>
              <span class="badge badge-dark font-weight-bold text-center p-2 mr-2 type-doc">Td</span> <i class="fa fa-download"></i>
            </div> 
            </a> 
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ asset('Tds/'.$tds->correction )}}" target="_blank" class="section-card card elevation-8dp btn  btn-sm"> 
            <div class="overlay mint"></div>
            <div class="card-body">
              <h5 class="card-title year">{{ $tds->domaine }}</h5>
              <h5 class="card-title year">{{ module($tds->id_module)->nom_module }}</h5>
              <p class="card-text">{{ str_limit($tds->correction,30) }}</p>
              <span class="badge badge-dark font-weight-bold text-center p-2 mr-2 type-doc">correction Td</span> <i class="fa fa-download"></i>
            </div> 
            </a> 
            </div>
            @endforeach
          </div>
       
            <div class="row justify-content-center a" id="examens">
            @foreach($examens as $examens)
             <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">

            <a href="{{ asset('examen/'.$examens->examen )}}" target="_blank" class="section-card card elevation-8dp btn  btn-sm"> 
            <div class="overlay red"></div>
            <div class="card-body">
              <h5 class="card-title year">{{ $examens->domaine }}</h5>
              <h5 class="card-title year">{{ module($examens->id_module)->nom_module }} {{$examens->annee_examen }}</h5>
              <p class="card-text">{{ str_limit($examens->examen,30) }}</p>
              <span class="badge badge-dark font-weight-bold text-center p-2 mr-2 type-doc">Examen</span> <i class="fa fa-download"></i>
            </div> 
            </a> 
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ asset('examen/'.$examens->correction )}}" target="_blank" class="section-card card elevation-8dp btn  btn-sm"> 
            <div class="overlay red"></div>
            <div class="card-body">
              <h5 class="card-title year">{{ $examens->domaine }}</h5>
              <h5 class="card-title year">{{ module($examens->id_module)->nom_module }} {{$examens->annee_examen }}</h5>
              <p class="card-text">{{ str_limit($examens->correction,30) }}</p>
              <span class="badge badge-dark font-weight-bold text-center p-2 mr-2 type-doc">correction Examen</span> <i class="fa fa-download"></i>
            </div> 
            </a> 
            </div>
             @endforeach
             </div>
         
      
         </div>
      </div>
    </div>
</section>

@endsection

@section('footer')
 <script type="text/javascript">
              $("#examens").hide();
              $("#tds").hide();
             
             $('#document').on('change',function(e){
                console.log(e);
                var module = e.target.value;
              //  alert(module);
                $('.a').hide();
                $('#' + $(this).val()).show();
                if(module == 'doc'){
                     $('#' + $(this).val()).show();
                }
               
              });
            </script>

           
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
