@extends('admin.layouts.layout')


@section('title')
 Liste des membres
@endsection

@section('header')

  {!! Html::style('designe/dist/css/skins/_all-skins.min.css') !!}
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}

@endsection

@section('content')
 <section class="content-header">
      <h1>
      Listes des membres
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active"><a href="{{ url('/admin/users') }}">Liste des membres</a></li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des membres</h3>
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
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">ID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Nom et prenom</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Email</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Inscrié à</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Grade</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th></tr>
                </thead>
                <tbody>
              
                @foreach($user as $user1)
               
                   <tr role="row" class="even">
                     
                       <td class="sorting_1">{{ $user1->id }}</td>
                        <td>{{ $user1->name }}</td>
                       <td>{{ $user1->email }}</td>
                       <td>{{ $user1->created_at }}</td>
                       <td>{{ $user1->admin==1? 'admin':'membre' }}</td>
                       <td class="">
                      <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/users/'.$user1->id}}"></a>
                      <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/users/'.$user1->id.'/edit'}}"></a>
                     
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                       @if($user1->id != 1)
                        <a class="btn btn-danger fa fa-btn fa-trash-o" href="{{'/admin/users/'.$user1->id.'/delete'}}"></a>
                       @endif 
                     </td>

                     </tr>
                     @endforeach</tbody>
                <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">ID</th>
                  <th rowspan="1" colspan="1">Nom et prenom</th>
                  <th rowspan="1" colspan="1">Email</th>
                  <th rowspan="1" colspan="1">Inscrié à</th>
                  <th rowspan="1" colspan="1">Grade</th>
                  <th rowspan="1" colspan="2">Grade</th>
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
