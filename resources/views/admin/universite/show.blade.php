@extends('admin.layouts.layout')

@section('title')
Affiche une Universite
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>               
    Affiche l'universite {{ $universite->nom_universite }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/universite') }}">Liste des universites</a></li>
        <li class="active"><a href="{{ url('/admin/universite/'.$universite->id.'/edit') }}">Affiche l'universite</a></li>
      </ol>
</section>

<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiche l'universite <strong> " {{ $universite->nom_universite}} "</strong></h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche l'universite</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de la Filier:</strong>
                {{ $universite->nom_universite }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Wilaya:</strong>
                {{ $universite->wilaya_universite }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ajouter le:</strong>
                {{ $universite->created_at }}
            </div>
        </div>
    </div>
    <div class="pull-right">
            <a class="btn btn-info" href="{{ url('/admin/universite/facultes/'.$universite->id.'/index') }}"> voir les facultes</a>
            <a class="btn btn-primary" href="{{ url('/admin/universite') }}"> Reteur</a>

    </div>
      </div>
    </div>
  </div>

    
</section>


@endsection


@section('footer')

@endsection