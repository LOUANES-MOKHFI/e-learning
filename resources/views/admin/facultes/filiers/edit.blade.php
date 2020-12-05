@extends('admin.layouts.layout')

@section('title')
 Modifier une Filier
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      Modifier la Filier "{{ $filiers->nom_filier }}"
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/facultes/filiers/'.$filiers->id.'/edit') }}">Modifier une Filier</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modifier la Filier {{ $filiers->nom_filier}}</h3>
            </div><br>
    <form method="post" action="{{ url('/admin/facultes/filiers/'.$filiers->id)}}">
                 {{ csrf_field()}}                                       
 @method('PUT')                       
                        <div class="form-group row">
                            <label for="nom_filier" class="col-md-4 col-form-label text-md-right">{{ __('Nom de filier') }}</label>

                            <div class="col-md-6">
                            <input id="nom_filier" type="text" class="form-control @error('nom_filier') is-invalid @enderror" name="nom_filier" value="{{ $filiers->nom_filier }}" required autocomplete="nom_filier" autofocus placeholder="Nom de filier" >

                                @error('nom_filier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="faculte_nom" class="col-md-4 col-form-label text-md-right">{{ __('Faculte') }}</label>

                            <div class="col-md-6">
                                <select name="faculte_nom" class="form-control">
                                    <option>{{ $filiers->faculte_nom }}</option>
                                    @foreach(faculte() as $faculte)
                                    <option> {{ $faculte->nom_faculte }}</option>
                                    @endforeach
                                </select>
                              
                                @error('faculte_nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="niveau" class="col-md-4 col-form-label text-md-right">{{ __('Niveau') }}</label>

                            <div class="col-md-6">
                                <select name="niveau" class="form-control">
                                    <option>{{ $filiers->niveau }}</option>
                                    <option>1er année licence</option>
                                    <option>2eme année licence</option>
                                    <option>3eme année licence</option>
                                    <option>1er année Master</option>
                                    <option>2eme année Master</option>     
                                </select>   
                              
                                @error('niveau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="filier_discription" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                             {!! Form::textarea("filier_discription", $filiers->filier_discription ,['class'=>'form-control'])!!}

                                @error('filier_discription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status de la filier') }}</label>

                            <div class="col-md-6">
                             {!! Form::select("status",['1'=>'active' ,'0'=>'desactive'], $filiers->status ,['class'=>'form-control'])!!}
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <input type="hidden" name="id" value="{{ $filiers->id_faculte }}">
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