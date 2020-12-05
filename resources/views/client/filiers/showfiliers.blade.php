@extends('layouts.app')

@section('title')
   Filiers
@endsection

@section('header')
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
  {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('designe/assets/bootstrap/css/bootstrap.min.css') !!}
   {!! Html::style('designe/assets/mobirise/css/style.css') !!}

  {!! Html::style('designe/assets/mobirise/css/mbr-additional.css') !!}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&amp;display=swap" rel="stylesheet">

  {!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
  {!! Html::style('designe/assets/css/show.css')!!}

@endsection


@section('content')
<section class="content" style="font-family: Poppins,sans-serif;overflow-x: hidden;">
  <div class="box">
  @if(count($filiers1)>0)
            <div class="col-xs-12 col-lg-12 col-sm-12">
                @include('layouts.nav')
            </div>
            <br>
            <div class="col-xs-10 col-lg-10">
            <div class="box-header">
              <h3 class="box-title">Liste des filiers</h3>
            </div>
            <div class="col-xs-2"></div>
            <div class="row d-flex justify-content-center col-xs-9">
                          <hr>

        @foreach($filiers1 as $filier)
         @if(count(nbr_module($filier->id))>0)

        <div class="col-xs-3 mb-4 my-4">
         <a href="{{ url('/client/filiers/showfilier/'.$filier->id) }}" class="section-card card elevation-8dp">
          <div class="overlay pink"></div>
          <div class="card-body"> <br>
            <h5 class="card-title year">{{ $filier->nom_filier }}</h5> 
            <p class="card-text">{{ $filier->niveau }}</p> 
            <span class="badge badge-dark font-weight-bold p-2">{{count(nbr_module($filier->id))}} module</span>
          </div>
         </a> 
        </div>
        @endif
           @endforeach
          </div>
 <div class="col-xs-1"></div>
      <div class="box-body">
        
        @else
        @include('layouts.exception_msg')
        @endif
      </div>
    
</section>


@endsection

@section('footer')
  {!! Html::script('designe/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
  {!! Html::script('designe/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

<!-- page script -->

 <script type="text/javascript">
              
               $('#nom_universite').on('change',function(e){
                console.log(e);
                var id_universite = e.target.value;

                //ajax
                $.get('/ajax-universite?id=' + id_universite,function(data){
                    $('#faculte_nom').empty();
                   $.each(data, function(showfilier,faculte){
                     // alert(faculte.id);
                      $('#faculte_nom').append('<option value="' +faculte.id+'">'+ faculte.nom_faculte+'</option>');
                   });
                });
              });

              $('#faculte_nom').on('change',function(e){
                console.log(e);
                var id_faculte = e.target.value;
             
                //ajax
                $.get('/ajax-faculte?id=' + id_faculte,function(data){
                    $('#nom_filier').empty();
                   $.each(data, function(showfilier,filiers){
                      
                      $('#nom_filier').append('<option value="' +filiers.id+'">'+ filiers.nom_filier+'</option>');
                   });
                });
              });


              $('#nom_filier').on('change',function(e){
                console.log(e);
                var id_filiers = e.target.value;

                //ajax
                $.get('/ajax-niveau?id=' + id_filiers,function(data){
                    $('#niveau').empty();
                   $.each(data, function(showfilier,filiers){
                      
                      $('#niveau').append('<option>'+ filiers.niveau+'</option>');
                   });
                });
              });
            </script>
@endsection

