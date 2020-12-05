@extends('admin.layouts.layout')

@section('title')
Affiche une Filier
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>               
    Affiche la Filier {{ $filiers->nom_filier }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/facultes/filiers') }}">Liste des Filiers</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers/'.$filiers->id.'/edit') }}">Affiche la Filier</a></li>
      </ol>
</section>

<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiche la Filier <strong> " {{ $filiers->nom_filier}} "</strong></h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche la Filier</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de la Filier:</strong>
                {{ $filiers->nom_filier }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Niveau:</strong>
                {{ $filiers->niveau }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ajouter le:</strong>
                {{ $filiers->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Nom de la faculte:</strong>
                {{ $filiers->faculte_nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Description de filier:</strong>
                {{ $filiers->filier_discription }}
            </div>
        </div>

    </div>
    <div class="pull-right">
            <a class="btn btn-info" href="{{ url('/admin/facultes/filiers/module/'.$filiers->id.'/index') }}"> voir les module</a>
            <a class="btn btn-primary" href="{{ url('/admin/facultes/filiers/'.$filiers->id_faculte.'/index') }}"> Reteur</a>

    </div>

      </div>
    </div>
  </div>

    
</section>


@endsection


@section('footer')

@endsection