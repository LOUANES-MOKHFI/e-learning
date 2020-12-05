@extends('layouts.app')

@section('title')
 Inscription
 @endsection
 
 @section('header')
    {!! Html::style('designe/assets/css/register.css')!!}
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 @endsection
@section('content')
 <div class="container">
 <!---heading---->
     <header class="heading"> Inscrivez-vous</header><hr></hr>
    <!---Form starting----> 
    <div class="row ">
         <form method="POST" action="{{ route('register') }}">
                        @csrf
     <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="firstname">Nom et Préneom :</label> </div>
                 <div class="col-xs-8">
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom et Préneom">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             </div>
              </div>
         </div>

         <div class="col-sm-12">
             <div class="row">
                 <div class="col-xs-4">
                     <label class="mail" >Email :</label></div>
                 <div class="col-xs-8"  >    
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
             </div>
         </div>
          <div class="col-sm-12">
                 <div class="row">
                     <div class="col-xs-4">
                          <label class="pass">Mot de pass :</label></div>
                  <div class="col-xs-8">
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de pass">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
          </div>
          </div>
           <div class="col-sm-12">
                 <div class="row">
                     <div class="col-xs-4">
                          <label class="pass">Confirmer le mot de pass:</label></div>
                  <div class="col-xs-8">
                         <input id="password" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de pass">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
                <div class="col-sm-12">
                   <div >
                      <input type="Submit" name="submit" value="Inscriez-vous" class="btn btn-warning">

                   </div>
                </div>
          </div>
          </div>
        
        </form>
        <div class="card-footer">
                <div class="d-flex justify-content-center links">
                   Vous avez un compte?<a href="{{ route('login') }}">Connectez vous</a>
                </div>
            </div>
     </div>  
</div>

@endsection

@section('footer')

@endsection
