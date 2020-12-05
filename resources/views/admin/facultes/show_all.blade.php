@extends('admin.layouts.layout')


@section('title')
 Liste des Facultes
@endsection

@section('header')

  {!! Html::style('designe/dist/css/skins/_all-skins.min.css') !!}
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}

@endsection

@section('content')
 <section class="content-header">
      <h1>
        Affiche Tout Les Facultes
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active"><a href="{{ url('/filiers') }}">Liste des Facultes</a></li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <br>
              <i class="fa fa-add"></i>
               Liste de Tout les filiers  
            </a>
            <div class="box-header">
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Nom de la Facultes</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Universite</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th></tr>
                </thead>
                <tbody>
              
               
                                  @foreach($faculte as $facultes)

                   <tr role="row" class="even">
                       <td>{{ $facultes->nom_faculte }}</td>
                       <td>{{ $facultes->universite_faculte }}</td>
                       <td class="">
                        <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/universite/facultes/'.$facultes->id}}"></a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/universite/facultes/'.$facultes->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger fa fa-btn fa-trash-o" href="{{'/admin/universite/facultes/'.$facultes->id.'/delete'}}"></a>
                        
                     </td>

                     </tr>
                     @endforeach</tbody>
                <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Nom de la Faculte</th>
                  <th rowspan="1" colspan="1">Universite</th>
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
