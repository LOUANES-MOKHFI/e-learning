@extends('layouts.app')

@section('title')
Profile
@endsection

@section('header')

  {!! Html::style('designe/assets/css/profil.css') !!}
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
  {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('designe/assets/bootstrap/css/bootstrap.min.css') !!}
   {!! Html::style('designe/assets/mobirise/css/style.css') !!}

  {!! Html::style('designe/assets/mobirise/css/mbr-additional.css') !!}
         {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&amp;display=swap" rel="stylesheet">

  {!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  
@endsection

@section('content')
<br><br>
<div style="height: 520px">
    <div class="container main-secction">
        <div class="row">
           
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                            <a id="btn-contact"  class="btn btn-success btn-block follow" href="{{ url('/client/modifier_profil')}}">Modifier</a> 
                        </div>
                       
                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1>{{$user->name}}</h1>

                                    <h5> Etudiant(e)</h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                </div>
                            </div>
                        </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Profil personnel</a>
                </li>
            </ul>
                                              
                                              <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel"  id="profile">
                <div class="row">
                    <div class="col-md-2">
                        <label>Nom</label>
                    </div>
                <div class="col-md-6">
                    <p>{{$user->name}}</p>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label>Specialite</label>
                    </div>
                    <div class="col-md-6">
                     <p>{{$user->email}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label>Profesion</label>
                    </div>
                    <div class="col-md-6">
                    <p>Etudiant(e)</p>
                    </div>
                </div>
            </div>
                                                
        </div>
                          
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
@endsection

@section('footer')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection