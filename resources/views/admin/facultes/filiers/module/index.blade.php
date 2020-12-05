@extends('admin.layouts.layout')

@section('title')
Affiche les modules
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>               
    Affiche les module 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="{{ url('/admin/facultes/filiers/module') }}">Liste des module</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers/module') }}">affiche les module</a></li>
      </ol>
</section>

<section class="content">
     <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <br>
            <a href="{{ url('/admin/facultes/filiers/module/'.$filiers->id.'/create') }}" class="btn btn-info">
              <i class="fa fa-add"></i>
              Ajouter un module
            </a>
            @if(count($module)<1)
               @include('admin.layouts.msg_vide')
            @else
           
            <div class="box-header">
              <h3 class="box-title">Liste des module</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6">
                  <div class="dataTables_length" id="example1_length">
              </div>
            </div>
              <div class="col-sm-6">
               
                <div id="example1_filter" class="dataTables_filter">
             
              </div>
            </div>
          </div>
            <div class="row">
                <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 160px;">Nom de module</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 160px;">filier</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">coeff</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">semestre</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th>
                </tr>
                </thead>
                <tbody>
              
              
        @foreach($module as $module)

            <tr role="row" class="even">
                <td>{{ $module->nom_module }}</td>
                <td>{{ $module->filier }}</td>
                 <td>{{ $module->coeff }}</td>
                <td>{{ $module->num_semstr }}</td>
                <td class="">
                <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/facultes/filiers/module/'.$module->id_module}}"></a>
                <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/facultes/filiers/module/'.$module->id_module.'/edit'}}"></a>
                {{ csrf_field()}}
                   {{ method_field('DELETE') }}
                        <a class="btn btn-danger fa fa-btn fa-trash-o" href="{{'/admin/facultes/filiers/module/'.$module->id_module.'/delete'}}"></a>

                </td>
            
            </tr>
        @endforeach
                 </tbody>
                 </table>
            @endif

    <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/admin/facultes/filiers/'.$filiers->id) }}"> Reteur</a>

    </div>

      </div>
    </div>
  </div>
</div>
    
</section>


@endsection


@section('footer')

@endsection