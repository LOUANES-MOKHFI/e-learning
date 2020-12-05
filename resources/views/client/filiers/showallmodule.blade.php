@extends('layouts.app')

@section('title')
   Tout les modules
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
  {!! Html::style('designe/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
    {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}

{!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
    {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  <!-- Ionicons -->
    {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
@endsection


@section('content')
<section class="content">
  <div class="box">
              <br>
       
            <div class="col-xs-3 col-lg-3">
              <form method="get" action="{{ url('/client/filiers/showallmodule_smstre/'.$spec->id) }}">
               <label>Semetre</label><br>
                {!! Form::select("num_semstr", ['1'=> 'impair', '2'=>'paire'], null ,['class'=>'form-control'])!!} 

                <br>      
                <input type="submit" name="submit" value="Recherche" class="btn btn-success">
              </form>
            </div>

             @if(count($module)>0)
            <div class="col-xs-9 col-lg-9">
            <div class="box-header">
              <h3 class="box-title">Liste des modules</h3>
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
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">Specialite</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Semestre</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Coeffession</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th>
                </tr>
                </thead>
                <tbody>
              
              
        @foreach($module as $module)

            <tr role="row" class="even">
                <td>{{ $module->nom_module }}</td>
                
                <td>{{ $module->filier }}</td>
                <td>{{ $module->num_semstr }}</td>
                <td>{{ $module->coeff }}</td>
                <td class="">
                <a class="btn btn-info fa fa-eye-slash" href="{{'/client/filiers/showmodule/'.$module->id_module}}"></a>
                </td>
            
            </tr>
        @endforeach
                 </tbody>
                 </table>
               </div>
             </div>
@else
<div class="col-lg-9 col-xs-9">
  @include('layouts.exception_msg')

</div>
@endif

  </div>
    
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

