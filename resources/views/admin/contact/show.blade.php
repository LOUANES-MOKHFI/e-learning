@extends('admin.layouts.layout')

@section('title')
Affiche un message
@endsection

@section('content')

<section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/contact') }}">Liste des contacts</a></li>
        <li class="active"><a href="{{ url('/admin/contact/'.$contact->id) }}">Affiche le message</a></li>
      </ol>
</section>
<br>
<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiche le message de  <strong> " {{ $contact->name}} "</strong></h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche un message</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom et prenom:</strong>
                {{ $contact->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Specialite:</strong>
                {{ $contact->specialite }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Objet:</strong>
                {{ $contact->objet }}
            </div>
        </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Message:</strong>
                {{ $contact->message }}
            </div>
      </div>
    </div>
    <div class="pull-right">
            <a class="btn btn-danger" href="{{ url('/admin/contact/'.$contact->id.'/delete') }}">
           <i class="fa fa-btn fa-trash-o"></i>Supprimer</a>
            <a class="btn btn-primary" href="{{ url('/admin/contact') }}"> Reteur</a>

    </div>

      </div>
    </div>
  </div>

    
</section>


@endsection


@section('footer')

@endsection