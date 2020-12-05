@extends('admin.layouts.layout')

@section('title')
   Ajouter une module
@endsection

@section('header')
   
@endsection

@section('content')

<section class="content-header">
      <h1>

      Ajouter une module
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/facultes/filiers/module') }}">Filier</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers/module/create') }}">Ajouter une module</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ajouter une module</h3>
            </div><br>

            {!! Form::open(['url'=>'/admin/facultes/filiers/module', 'method'=>'POST'])!!}
                @include('admin.facultes.filiers.module.form')
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection