@extends('layouts.app')

@section('title')
Affiche un module
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
         {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}

@endsection

@section('content')


<section class="content-header">
      <h1>               
    Affiche le module {{ $module->nom_module }}
      </h1>
</section>
<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiche le module  <strong> " {{ $module->nom_module}} "</strong></h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche le module</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de module:</strong>
                {{ $module->nom_module}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Semestre:</strong>
                {{ $module->num_semstr }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Filier:</strong>
                {{ $module->filier }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Coeffesion:</strong>
                {{ $module->coeff }}
            </div>
        </div>
    </div>
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/client/filiers/showallmodule/'.$module->id) }}"> Reteur</a>
    </div>
      </div>
    </div>
  </div>
</section>
    
<section class="content-2 " id="features1-108" style="background-color: rgb(239, 239, 239);">
    
    <div class="container">
        <div class="row">
            <div class="col-4 col-xs-4">
                <div class="thumbnail">
                    <div class="image"><a href="{{ url('/client/filiers/module/'.$module->id_module.'/view_cours') }}"><img class="undefined" src="/designe/assets/images/cours-jour-ico.png" height="1%"></a>
                    </div>
                    <div class="caption">
                        <div>
                            <h3>Cours</h3>
                        </div>
                        <p class="group"><a href="{{ url('/client/filiers/module/'.$module->id_module.'/view_cours') }}" class="btn btn-default">VIEW Cours</a></p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xs-4">
                <div class="thumbnail">
                    <div class="image"><a href="{{ url('/client/filiers/module/'.$module->id_module.'/view_tds') }}"><img class="undefined" src="/designe/assets/images/téléchargement (1).jpg"></a></div>
                    <div class="caption">
                        <div>
                            <h3>Td</h3>
                        </div>
                        <p class="group"><a href="{{ url('/client/filiers/module/'.$module->id_module.'/view_tds') }}" }}" class="btn btn-default">VIEW Tds</a></p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xs-4">
                <div class="thumbnail">
                    <div class="image"><a href="{{ url('/client/filiers/module/'.$module->id_module.'/view_examens') }}"><img class="undefined" src="/designe/assets/images/téléchargement.jpg"></a></div>
                    <div class="caption">
                        <div>
                            <h3>Examens</h3>
                        </div>
                        <p class="group"><a href="{{ url('/client/filiers/module/'.$module->id_module.'/view_examens') }}" class="btn btn-default">VIEW Examens</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('footer')

@endsection