@extends('admin.layouts.layout')

@section('title')
 Ajouter un membre
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      Ajouter un membres
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/users/create') }}">Ajouter un membres</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ajouter un membre</h3>
            </div><br>

            {!! Form::open(['url'=>'/admin/users', 'method'=>'POST'])!!}
                @include('admin.user.form')
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection