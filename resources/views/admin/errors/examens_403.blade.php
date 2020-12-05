@extends('layouts.app')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&amp;display=swap" rel="stylesheet">

  {!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection
@section('content')
       <div class="container">
       	<div class="col-md-8 col-md-offset-2 text-center">
       		<div>
       			<h2>Ce module ne contient aucun examens</h2>
       		</div>
       	</div>
       </div>
@endsection