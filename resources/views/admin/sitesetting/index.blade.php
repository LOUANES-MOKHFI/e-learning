@extends('admin.layouts.layout')

@section('title')
 Parametres de site
@endsection

@section('header')

@endsection

@section('content')

<section class="content-header">
      <h1>
 Parametres de site
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Accueil</a></li>
        <li class="active"><a href="{{ url('/admin/sitesetting') }}"> Modifier Parametres de site
</a></li>
      </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Modifier Parametres de site</h3>
            </div><br>
            <form action="{{ url('/admin/sitesetting/'.$sitesetting->id)}}" method="post" enctype='multipart/form-data'>
            {{ csrf_field()}}
        
                        <div class="form-group row">
                          <div class="col-lg-2">
                             Nom de Site Web
                          </div>
                            <div class="col-md-10">
                              {{ Form::text('site_name', $sitesetting->site_name,['class'=>'form-control'])}}
                                @error('site_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-lg-2">
                             Slegon
                          </div>
                            <div class="col-md-10">
                              {{ Form::text('slegon', $sitesetting->slegon,['class'=>'form-control'])}}
                                @error('slegon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-lg-2">
                             Adresse
                          </div>
                            <div class="col-md-10">
                               {{ Form::text('Adress',$sitesetting->Adress,['class'=>'form-control'])}}
                           
                                @error('Adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Facebook
                          </div>
                            <div class="col-md-10">
                              {{ Form::text('facebook', $sitesetting->facebook,['class'=>'form-control'])}}
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Twitter
                          </div>
                            <div class="col-md-10">
                              {{ Form::text('twitter', $sitesetting->twitter,['class'=>'form-control'])}}
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                          <div class="col-lg-2">
                             Description
                          </div>
                            <div class="col-md-10">
                               {{ Form::textarea('description',$sitesetting->description,['class'=>'form-control'])}}
                           
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-lg-2">
                            photo de menu
                          </div>
                            <div class="col-md-10">
                                <input type="file" name="image" value="">
                           
                              <div class="col-xs-4">

                                <img src="{{ asset('/images/'.$sitesetting->image) }}">
                              </div>
                             
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-lg-2">
                            photo de la page d'accueil 1
                          </div>
                            <div class="col-md-10">
                                <input type="file" name="image1" value="">
                           
                              <div class="col-xs-4">
                                <img src="{{ url('/storage/'.$sitesetting->photo_welcom) }}">
                              </div>
                             
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                          <div class="col-lg-2">
                            photo de la page d'accueil 2
                          </div>
                             <div class="col-md-10">
                                <input type="file" name="image2" value="">
                           
                              <div class="col-xs-4">
                               <img src="{{ asset('/images/'.$sitesetting->photo_welcom1) }}">

                              </div>
                             
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group row">
                          <div class="col-lg-2">
                            photo de la page d'accueil 3
                          </div>
                             <div class="col-md-10">
                                <input type="file" name="image3" value="">
                           
                              <div class="col-xs-4">
                                                                <img src="{{ asset('/images/'.$sitesetting->photo_welcom2) }}">

                              </div>
                             
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
         
           <Button type="submit" name="submit" class="btn btn-success">Sauvegarder<i class="fa fa-save"></i>
           </Button>
           
           </form>
        </div>
    </div>
  </div>
</section>

@endsection


@section('footer')

@endsection