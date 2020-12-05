@extends('admin.layouts.layout')

@section('title')
Affiche un module
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>               
        @foreach($module as $module)
    Affiche le module {{ $module->nom_module }}
    @endforeach
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/facultes/filiers') }}">Liste des modules</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers/module/'.$module->id_module.'/edit') }}">Affiche le module</a></li>
      </ol>
</section>

<section class="content">
      <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiche le module  <strong> " {{ $module->nom_module}} "</strong></h3>
            </div><br>
             <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Affiche le module</h2>
            </div>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom de module:</strong>
                {{ $module->nom_module}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Semestre:</strong>
                {{ $module->num_semstr }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Filier:</strong>
                {{ $module->filier }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Coeffesion:</strong>
                {{ $module->coeff }}
            </div>
        </div>

    </div>
    <div class="pull-right">

            <a class="btn btn-primary" href="{{ url('/admin/facultes/filiers/module/'.$module->id.'/index') }}"> Reteur</a>

    </div>

      </div>
    </div>
  </div>
</section>
    
<section class="content-2 " id="features1-108" style="background-color: rgb(239, 239, 239);">
    
    <div class="container">
        <div class="row">
            <div class="col-4 col-xs-4">
                <div class="thumbnail">
                    <div class="image"><a ref="{{ url('/admin/facultes/filiers/module/cours/'.$module->id_module.'/index') }}"><img class="undefined" src="designe/assets/images/cours-jour-ico.png"></a>
                    </div>
                    <div class="caption">
                        <div>
                            <h3>Cours</h3>
                            
                        </div>
                        <p class="group"><a href="{{ url('/admin/facultes/filiers/module/cours/'.$module->id_module.'/index') }}" class="btn btn-default">VIEW Cours</a></p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xs-4">
                <div class="thumbnail">
                    <div class="image"><a ref="{{ url('/admin/facultes/filiers/module/tds/'.$module->id_module.'/index') }}"><img class="undefined" src="/public/designe/assets/images/téléchargement (1).jpg"></a></div>
                    <div class="caption">
                        <div>
                            <h3>Td</h3>
                            
                        </div>
                        <p class="group"><a href="{{ url('/admin/facultes/filiers/module/tds/'.$module->id_module.'/index') }}" class="btn btn-default">VIEW Tds</a></p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-xs-4">
                <div class="thumbnail">
                    <div class="image"><a href="{{ url('/admin/facultes/filiers/module/examens/'.$module->id_module.'/index') }}"><img class="undefined" src="designe/assets/images/téléchargement.jpg"></a></div>
                    <div class="caption">
                        <div>
                            <h3>Examens</h3>
                            
                        </div>
                        <p class="group"><a href="{{ url('/admin/facultes/filiers/module/examens/'.$module->id_module.'/index') }}" class="btn btn-default">VIEW DEMO</a></p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>


@endsection


@section('footer')

@endsection