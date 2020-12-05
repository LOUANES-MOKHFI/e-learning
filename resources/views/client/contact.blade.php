@extends('layouts.app')

@section('title')
Contacte nous
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
         {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&amp;display=swap" rel="stylesheet">

  {!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  
@endsection

@section('content')

<br><br><br>
<div class="box-body">
         {!! Form::open(['url'=>'/contact', 'method'=>'POST'])!!}
         <div class="form-group">
                   <label class="box-title">Nom et prenom</label>
                   <input type="text" class="form-control" name="name" placeholder="Nom et prenom">
                </div>
                <div class="form-group">
                   <label class="box-title">Specialite</label>
                   <input type="text" class="form-control" name="specialite" placeholder="Specialite">
                </div>
                <div class="form-group">
                   <label class="box-title">Objet</label>
                   <input type="text" class="form-control" name="objet" placeholder="Objet">
                </div>
               
                <div>
                    <label class="box-title">Message</label>
                  <textarea name="message" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;" placeholder="Message"></textarea>
                </div>
                <div>
                    <input type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
                </div>
            {!! Form::close() !!}
</div>


@endsection

@section('footer')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection