@extends('admin.layouts.layout')

@section('title')
 Modifier une Universite
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
      Modifier l'universite "{{ $universite->nom_universite }}"
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/universite/'.$universite->id.'/edit') }}">Modifier une universite</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modifier l'Unversite {{ $universite->nom_universite}}</h3>
            </div><br>
    <form method="post" action="{{ url('/admin/universite/'.$universite->id)}}">
                {{ csrf_field()}}

                                             
 @method('PUT')
                        <div class="form-group row">
                            <label for="nom_universite" class="col-md-4 col-form-label text-md-right">{{ __("Nom de l'universite") }}</label>

                            <div class="col-md-6">
                            <input id="nom_universite" type="text" class="form-control @error('nom_universite') is-invalid @enderror" name="nom_universite" value="{{ $universite->nom_universite }}" required autocomplete="nom_universite" autofocus>

                                @error('nom_universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wilaya_universite" class="col-md-4 col-form-label text-md-right">{{ __('Wilaya') }}</label>

                            <div class="col-md-6">
                                 <input id="wilaya_universite" type="text" class="form-control @error('wilaya_universite') is-invalid @enderror" name="wilaya_universite" value="{{ $universite->wilaya_universite }}" required autocomplete="wilaya_universite" autofocus>
                              
                                @error('wilaya_universite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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