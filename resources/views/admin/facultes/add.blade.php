@extends('admin.layouts.layout')

@section('title')
   Ajouter une faculte
@endsection

@section('header')
   
@endsection

@section('content')

<section class="content-header">
      <h1>

      Ajouter une faculte
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/universite/facultes') }}">Faculte</a></li>
        <li class="active"><a href="{{ url('/admin/universite/facultes/create') }}">Ajouter une faculte</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ajouter une faculte</h3>
            </div><br>

            {!! Form::open(['url'=>'/admin/universite/facultes', 'method'=>'POST'])!!}
                @include('admin.facultes.form')
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection