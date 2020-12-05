<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title> 
   @yield('title')
 </title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
   

@yield('header')

</head> 
  <body id="app">
   @if($_SERVER['REQUEST_URI'] =='/login' || $_SERVER['REQUEST_URI']=='/register' || $_SERVER['REQUEST_URI'] == '/password/reset')

       @else
 <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-93">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                      <span class="mbr-brand__logo">
                        <a href="{{url('/home')}}">
                          <img class="mbr-navbar__brand-img mbr-brand__img" src="/designe/assets/images/logo1.png">
                        </a>
                      </span>
                      @if(Auth::user())
                    <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="{{ url('/home') }}">{{ getSetting()->site_name }}</a>
                      @else
                      <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="{{ url('/') }}">{{ getSetting()->site_name }}</a>
                    </span>
                    @endif
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                               @if(Auth::user())
                              <li class="mbr-navbar__item">
                                  
                                <a class="mbr-buttons__link btn text-white" href="{{url('/home')}}">Accueil</a>
                              </li> 
                               
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{url('/contact')}}">Contacts</a></li>
                                @endif
                                  @guest
                              
                              <li class="mbr-navbar__item">
                                <a class="mbr-buttons__link btn text-white" href="{{ route('login') }}">{{ __('Connectez-vous') }}</a>
                            </li>
                            @if (Route::has('register'))
                              <li class="mbr-navbar__item">
                                    <a class="mbr-buttons__link btn text-white" href="{{ route('register') }}">{{ __('Inscrivez-vous') }}</a>
                                </li>
                            @endif
                        @else
                        @if(Auth::user())
                       <li class="mbr-navbar__item">
                       <a class="mbr-buttons__link btn text-white" href="{{ url('/showfiliers') }}" type="submit" class="btn btn-primary">{{ __('tout les filiers') }}</a>
                        </li>
                         <li class="mbr-navbar__item">
                          @if(Auth::user()->admin != 1)
                                    <a class="mbr-buttons__link btn text-white"  href="{{ url('/client/profil') }}">{{ __('profil') }}</a>
                          @else
                          <a class="mbr-buttons__link btn text-white"  href="{{ url('/admin/profil') }}">{{ __('profil') }}</a>
                          @endif

                                </li>
                              @endif   
                            <li class="mbr-navbar__item dropdown">
                                <a class="mbr-buttons__link btn text-white" id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item mbr-buttons__link btn text-orange"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                           
                        @endguest
                            </ul>
                        </div>
                      
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endif 


  
 @include('layouts.flash_msg') 
       <section>
        @if($_SERVER['REQUEST_URI'] =='/')
          @yield('content1')
        @else
         @yield('content')
        @endif
       </section>

 
@if($_SERVER['REQUEST_URI'] =='/login' || $_SERVER['REQUEST_URI']=='/register' || $_SERVER['REQUEST_URI'] == '/password/reset')

       @else
<footer class="col-xs-12 mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-94" style="background-color: rgb(50, 50, 50);">
    
        <div class="mbr-footer mbr-footer--wysiwyg row">
          <div class="col-sm-12">
            <div class="copy text-white text-center">
              <strong>{{getSetting()->site_name}} &copy; {{ date('Y')}} <a href="https://facebook.com/profile.php?id=100010541768871">Mokhfi louanes</a> Tout les droit sont résérve.</strong>
            </div>
          </div>
        </div>
   
</footer>
@endif

  {!! Html::script('designe/assets/jquery/jquery.min.js') !!}
  {!! Html::script('designe/assets/bootstrap/js/bootstrap.min.js') !!}

  {!! Html::script('designe/assets/jarallax/jarallax.js') !!}  
  {!! Html::script('designe/assets/mobirise/js/script.js') !!}
  @yield('footer')
</html>
