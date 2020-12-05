@extends('admin.layouts.layout')

@section('title')
 Modifier un membre
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      {{ $user->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/users/'.$user->id.'/edit') }}">Afficher un membres</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">le membre {{ $user->name}}</h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche un membre</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/admin/users') }}"> Reteur</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom et prenom:</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Inscrié à</strong>
                {{ $user->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Grade:</strong>
                {{ $user->admin==1? 'admin':'membre' }}
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection