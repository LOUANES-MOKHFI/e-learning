@extends('admin.layouts.layout')

@section('title')
administrateur
@endsection



@section('content')

<section class="content">
    <div class="row">
        <h2 class="text-center">Bienvenu chez votre espace de L'administrateur</h2>
        <br>

        <h1 class="text-center">{{getSetting()->site_name}}</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{count(spec())}}<sup style="font-size: 15px"> Specialites</sup></h3>

              <p>Les Specialites </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('/All_filiers')}}" class="small-box-footer">Voir tout les specialites <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count(universite())}}<sup style="font-size: 15px"> universites</sup></h3>

              <p>Les Universites</p>
            </div>
            <div class="icon">
<i class="fas fa-university"></i>
            </div>
            <a href="{{url('admin/universite')}}" class="small-box-footer">Liste Des Universites <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count(user())}}<sup style="font-size: 15px"> utilisateur(s)</sup></h3>
              <p>Liste des Membres</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ url('admin/users')}}" class="small-box-footer">Liste des membres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>10<sup style="font-size: 15px"> parametres</sup></h3>

              <p>Parametres Des Pages</p>
            </div>
            <div class="icon">
              <i class="fa fa-gears"></i>
            </div>
            <a href="{{url('admin/sitesetting')}}" class="small-box-footer">Modifier les parametres <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{count(faculte())}}<sup style="font-size: 15px"> Facultes</sup></h3>

              <p>Les Facultes </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('/All_facultes')}}" class="small-box-footer">Voir tout les specialites <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
     
        <!-- ./col -->
    
        <!-- ./col -->
      </div>
</section>

@endsection