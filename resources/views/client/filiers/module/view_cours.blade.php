@extends('layouts.app')


@section('title')
 Liste des cours
@endsection

@section('header')
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
  {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('designe/assets/bootstrap/css/bootstrap.min.css') !!}
   {!! Html::style('designe/assets/mobirise/css/style.css') !!}

  {!! Html::style('designe/assets/mobirise/css/mbr-additional.css') !!}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Poppins&amp;display=swap" rel="stylesheet">

  {!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('content')
 <section class="content-header">
      <h1>
      Listes des cours
      </h1>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <br>
            <div class="box-header">
              <h3 class="box-title">Liste des cours</h3>
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 160px;">Cours</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($cours as $cours)
                  <tr role="row" class="even">
                    <td>{{ $cours->cours }}</td>

                    <td><a class="btn btn-success" href="{{ asset('cours/'.$cours->cours )}}" target="_blank">Telecharger</a>
                  </tr>
                  @endforeach
                </tbody>
        </table>
    </div>
          <div class="row">
            
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
               
              </div>
            </div>
          </div>
        </div>
         <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/client/filiers/showmodule/'.$cours1->id_module) }}"> Reteur</a>
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
