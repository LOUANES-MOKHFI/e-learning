@extends('admin.layouts.layout')


@section('title')
 Liste des Filiers
@endsection

@section('header')

  {!! Html::style('designe/dist/css/skins/_all-skins.min.css') !!}
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}

@endsection

@section('content')
 <section class="content-header">
      <h1>
      Listes des Filiers de la {{ $faculte->nom_faculte}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers') }}">Liste des Filiers</a></li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <br>
            <a href="{{ url('/admin/facultes/filiers/'.$faculte->id.'/create') }}" class="btn btn-info">
              <i class="fa fa-add"></i>
              Ajouter une Filier
            </a>
            <div class="box-header">
              <h3 class="box-title">Liste des Filiers de <strong>la {{ $faculte->nom_faculte}}</strong></h3>
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Nom de la filier</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Niveau</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Faculte</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th></tr>
                </thead>
                <tbody>
              
               
                                  @foreach($filiers as $filiers)

                   <tr role="row" class="even">
                       <td>{{ $filiers->nom_filier }}</td>
                       <td>{{ $filiers->niveau }}</td>
                       <td>{{ $filiers->faculte_nom }}</td>
                       <td>{{ $filiers->status==1? 'active' : 'desactive' }}</td>
                       <td class="">
                        <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/facultes/filiers/'.$filiers->id}}"></a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/facultes/filiers/'.$filiers->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger fa fa-btn fa-trash-o" href="{{'/admin/facultes/filiers/'.$filiers->id.'/delete'}}"></a>
                        
                     </td>

                     </tr>
                     @endforeach</tbody>
                <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Nom de la filier</th>
                  <th rowspan="1" colspan="1">Niveau</th>
                  <th rowspan="1" colspan="1">Faculte</th>
                  <th rowspan="1" colspan="1">Status</th>
                  <th rowspan="1" colspan="3">Action</th>
                </tr>
                </tfoot>
              </table>
              
            </div>
          </div>
          <div class="row">
            
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
               
              </div>
            </div>
          </div>
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@endsection

@section('footer')
  {!! Html::script('designe/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
  {!! Html::script('designe/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

<!-- page script -->
<script>

  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

@endsection
