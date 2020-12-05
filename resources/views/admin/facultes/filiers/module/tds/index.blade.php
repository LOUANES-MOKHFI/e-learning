@extends('admin.layouts.layout')


@section('title')
 Liste des tds
@endsection

@section('header')

  {!! Html::style('designe/dist/css/skins/_all-skins.min.css') !!}
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}

@endsection

@section('content')
 <section class="content-header">
      <h1>
      Listes des tds
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers') }}">Liste des tds</a></li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <br>
            <div class="box-header">
              <h3 class="box-title">Liste des tds</h3>
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
    <div class="col-xs-12">
   <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Td</th>

                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">Correction</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 120px;">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($td as $td)
                  <tr role="row" class="even">
                    <td>{{ $td->serie }}
                      <a class=" btn-success" href="{{ asset('storage/'.$td->serie )}}" target="_blank">Telecharger</a>
                    </td>
                    <td>{{ $td->correction }}
                    <a class=" btn-success" href="{{ asset('storage/'.$td->correction )}}" target="_blank">Telecharger</a></td>
                    <td>
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    <a class="btn btn-danger fa fa-btn fa-trash-o" href="{{'/admin/facultes/filiers/module/tds/'.$td->id_td.'/delete'}}"></a></td>
                  </tr>
                  @endforeach
                </tbody>
        </table>
        <div>
         <form action="{{url('admin/facultes/filiers/module/td')}}" method="post" enctype="multipart/form-data">{{ csrf_field()}}
          <div class="col-xs-6">
            <input type="text" name="domaine" class="form-control" placeholder="Nom de domaine">
            <label>{{ __('Ajouter un td') }}</label>
            <input type="file" name="serie" class="form-control">
          </div>
          <div class="col-xs-6">
            <label>{{ __('correction') }}</label>
             <input type="file" name="correction" class="form-control">
          </div>
             <input type="hidden" name="id_module" value="{{ $module->id_module }}">
            <input type="submit" name="submit" value="Ajouter" class="btn btn-success">
          </form>
         
        </div>
    </div>
            <div class="row">
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
               
              </div>
            </div>
          </div>
        </div>
         <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/admin/facultes/filiers/module/'.$module->id_module) }}"> Reteur</a>

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
