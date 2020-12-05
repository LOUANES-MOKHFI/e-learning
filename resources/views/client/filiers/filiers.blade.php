@extends('layouts.app')

@section('title')
Affiche une Specialite
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
@endsection

@section('content')
@if(empty($filiers1))
@include('layouts.exception_msg')
@else
<section class="content-header">
      <h1>               
       
    Affiche la Specialite {{ $filiers1->nom_filier }}
  
      </h1>
      
</section>

<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
             
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche la filier</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de la filier:</strong>
                {{ $filiers1->nom_filier}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Faculte:</strong>
                {{ $filiers1->faculte_nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Niveau:</strong>
                {{ $filiers1->niveau }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Universite:</strong>
                Mhammed Bouguerra-Boumerdes           
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Description:</strong>
                {{ $filiers1->filier_discription }}
            </div>
        </div>

    </div>
    <div class="pull-right">

            <a class="btn btn-primary" href="{{ url('/showfiliers') }}"> Reteur</a>
            <a class="btn btn-primary" href="{{ url('/client/filiers/showallmodule/'.$filiers1->id) }}"> Voire les Modules</a>
    </div>

      </div>
    </div>
  </div>
</section>
@endif
@endsection


@section('footer')

@endsection