@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Area Start -->
<section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Connexion</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li class="active"><a href="{{route('login')}}">Connexion</a></li>
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
                     <h3>Connectez-vous !</h3>
                        <form method="POST" action="{{ route('login') }}">
                           @csrf
                            <p>
                                <input type="email" name="email" placeholder="Adresse email" />
                                <i class="fa fa-envelope"></i>
                            </p>

                            <p>
                                <input type="password" name="password" placeholder="Mot de passe" />
                                <i class="fa fa-lock"></i>
                            </p>

                            <p class="lost_pass">
                                <a href="#">Mot de passe oublié ?</a>
                            </p>

                            <p>
                                <button type="submit" >Connexion</button>
                            </p>
                        </form>

                     <!-- <div class="social-login">
                        <p class="optional_login">or</p>
                        <a href="#" class="fb">
                        <i class="fa fa-facebook"></i>Sign in <span>Facebook</span>
                        </a>
                        <a href="#" class="google">
                        <i class="fa fa-google"></i>Sign in <span>Google</span>
                        </a>
                     </div> -->
                     <div class="register_have">
                        <p>Vous n'avez pas de compte ? <a href="{{route('register')}}">Inscrivez-vous</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Page End -->
@endsection
