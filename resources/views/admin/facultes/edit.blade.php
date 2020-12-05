@extends('admin.layouts.layout')

@section('title')
 Modifier une faculte
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>

      Modifier la faculte "{{ $faculte->nom_faculte }}"
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active"><a href="{{ url('/admin/universite/facultes/').$faculte->id.'/edit' }}">Modifier une faculte</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modifier la faculte {{ $faculte->nom_faculte}}</h3>
            </div><br>
    <form method="post" action="{{ url('/admin/universite/facultes/'.$faculte->id)}}">
                {{ csrf_field()}}

                                             
 @method('PUT')
                        <div class="form-group row">
                            <label for="nom_faculte" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la faculte') }}</label>

                            <div class="col-md-6">
                            <input id="nom_faculte" type="text" class="form-control @error('nom_faculte') is-invalid @enderror" name="nom_faculte" value="{{ $faculte->nom_faculte }}" required autocomplete="nom_faculte" autofocus>

                                @error('nom_faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="universite_faculte" class="col-md-4 col-form-label text-md-right">{{ __('Universite') }}</label>

                            <div class="col-md-6">
                                <select name="universite_faculte" class="form-control">
                                 <option>{{ $faculte->universite_faculte }}</option>
                                 @foreach(universite() as $universite)
                                 <option>{{ $universite->nom_universite }}</option>
                                 @endforeach
                                </select>
                                @error('universite_faculte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $faculte->id_universite }}">
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