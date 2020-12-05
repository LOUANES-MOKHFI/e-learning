@extends('admin.layouts.layout')

@section('title')
Affiche une faculte
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>               
        @foreach($faculte as $faculte)
    Affiche la faculte {{ $faculte->nom_faculte }}
    @endforeach
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/universite/facultes') }}">Liste des modules</a></li>
        <li class="active"><a href="{{ url('/admin/universite/facultes/'.$faculte->id.'/edit') }}">Affiche la faculte</a></li>
      </ol>
</section>

<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiche la faculte  <strong> " {{ $faculte->nom_faculte}} "</strong></h3>
            </div><br>
             <div class="row">
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de la faculte:</strong>
                {{ $faculte->nom_faculte}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Universite:</strong>
                {{ $faculte->universite_faculte }}
            </div>
        </div>
    </div>
    <div class="pull-right">
            <a class="btn btn-info" href="{{ url('/admin/facultes/filiers/'.$faculte->id.'/index') }}"> voir les spécialite </a>
            <a class="btn btn-primary" href="{{ url('/admin/universite/facultes/'.$faculte->id_universite.'/index') }}"> Reteur</a>

    </div>

      </div>
    </div>
  </div>
</section>
    
<section class="content-2 " id="features1-108" style="background-color: rgb(239, 239, 239);">
    
    <div class="container">
        <div class="row">
           
           
        </div>
    </div>
</section>


@endsection


@section('footer')