@extends('admin.layouts.layout')

@section('title')
 Modifier un module
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>

      Modifier le module "{{ $module->nom_module }}"
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers/module/').$module->id_module.'/edit' }}">Modifier un module</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modifier le module {{ $module->nom_module}}</h3>
            </div><br>
    <form method="post" action="{{ url('/admin/facultes/filiers/module/'.$module->id_module)}}">
                {{ csrf_field()}}

                                             
 @method('PUT')
                        <div class="form-group row">
                            <label for="nom_filier" class="col-md-4 col-form-label text-md-right">{{ __('Nom de module') }}</label>

                            <div class="col-md-6">
                            <input id="nom_module" type="text" class="form-control @error('nom_module') is-invalid @enderror" name="nom_module" value="{{ $module->nom_module }}" required autocomplete="nom_module" autofocus>

                                @error('nom_module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filier" class="col-md-4 col-form-label text-md-right">{{ __('filier') }}</label>

                            <div class="col-md-6">
                             <input id="filier" type="text" class="form-control @error('filier') is-invalid @enderror" name="filier" value="{{ $module->filier }}" required autocomplete="filier" autofocus placeholder="exemple: MI,snv...">
                                @error('filier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="num_semstr" class="col-md-4 col-form-label text-md-right">{{ __('Semestre') }}</label>

                            <div class="col-md-6">
                             {!! Form::select("num_semstr", ['1'=> 'impaire', '2'=>'paire'], $module->num_semstr ,['class'=>'form-control'])!!}

                                @error('num_semstr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="coeff" class="col-md-4 col-form-label text-md-right">{{ __('Coeffesion') }}</label>

                            <div class="col-md-6">
                             <input id="coeff" type="text" class="form-control @error('coeff') is-invalid @enderror" name="coeff" value="{{ $module->coeff }}" required autocomplete="coeff" autofocus>

                                @error('coeff')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $module->id }}">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-warning"><i class="fa fa-edit"></i>
                                    Modifier
                                </button>
                            </div>
                        </div>

            </form>
      </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection