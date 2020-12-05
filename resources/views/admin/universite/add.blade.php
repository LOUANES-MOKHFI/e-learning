@extends('admin.layouts.layout')

@section('title')
 Ajouter une universite
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      Ajouter une universite
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/universite') }}">universite</a></li>
        <li class="active"><a href="{{ url('/admin/universite/create') }}">Ajouter une universite</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ajouter une universite</h3>
            </div><br>

            {!! Form::open(['url'=>'/admin/universite', 'method'=>'POST'])!!}
                @include('admin.universite.form')
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection