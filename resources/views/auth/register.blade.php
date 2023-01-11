@extends('layouts.frontend')

@section('content')

<!-- Breadcrumb Area Start -->
    <section class="peulis-breadcrumb-area">
        <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Inscription</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active"><a href="{{route('register')}}">Inscription</a></li>
                      </ul>
                  </div>
               </div>
            </div>
        </div>
    </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Login Page Start -->
    <section class="peulis-login-page section_70">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">
                    <div class="login-box">
                        <h3>Créer un compte!</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <p>
                            <input type="text" placeholder="Nom complet" name="name" />
                            <i class="fa fa-user"></i>
                            </p>

                            <p>
                            <input type="email" placeholder="Adresse email" name="email" />
                            <i class="fa fa-envelope"></i>
                            </p>

                            <p>
                            <input type="password" placeholder="Mot de passe" name="password" />
                            <i class="fa fa-lock"></i>
                            </p>

                            <p>
                            <input type="password" placeholder="Répeter le mot de passe" name="password_confirmation" />
                            <i class="fa fa-lock"></i>
                            </p>

                            <p class="register_action">
                            <button type="submit" >Inscrire</button>
                            </p>

                        </form>
                            <div class="social-login">
                                <p class="optional_login">or</p>
                                <a href="#" class="fb">
                                <i class="fa fa-facebook"></i>Inscription avec <span>Facebook</span>
                                </a>
                                <a href="#" class="google">
                                <i class="fa fa-google"></i>Inscription avec<span>Google</span>
                                </a>
                            </div>
                        <div class="register_have">
                            <p>Avez-vous déjà un compte ? <a href="{{route('login')}}">Connectez-vous ici !</a></p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </section>
      <!-- Login Page End -->
@endsection
