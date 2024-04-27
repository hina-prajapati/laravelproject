<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cricket- Home</title>
    <link rel="shortcut icon" href="/assets2/favicon.ico" type="image/x-icon">
    <link href="/assets2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Audiowide&family=Barlow+Condensed:wght@700;800&family=Covered+By+Your+Grace&family=DM+Sans:wght@400;500;700&family=Dancing+Script:wght@500;600;700&family=Jost:wght@200;300;400;500;600;700;800;900&family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500;1,600;1,700;1,800&family=Kaushan+Script&family=Lato:wght@300;900&family=Libre+Franklin:wght@400;500&family=Open+Sans:wght@300;400;500;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&family=Quicksand:wght@300;400;500;700&family=Rajdhani:wght@400;500;600;700&family=Raleway:wght@300;400;500;600;700;800&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;500;700&family=Russo+One&family=Saira+Extra+Condensed:wght@400;500&family=Shadows+Into+Light&family=Signika:wght@300;400;500;600;700&family=Sora:wght@300;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <link href="/assets2/css/all.min.css" rel="stylesheet">
    <link href="/assets2/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets2/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets2/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets2/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets2/css/jquery.fancybox.min.css">
    <style>
    .error {
        color: red !important;
    }

    #phoneError {
        color: red;
    }

    .nav-item {
        margin: 2px 2px;
    }

    @media (max-width: 768px) {
        .nav-item {
            display: block !important;
            color: black;
        }

        .nav-link {
            color: black !important;
        }
    }

    a.nav-item.nav-link:hover {
        color: #0a58ca !important;
    }

    a.nav-item.nav-link {
        color: #fff !important;
    }

    @media (max-width: 768px) {
        .nav-link {
            color: black !important;
            padding: 0px;
            margin: 6px;
        }
    }
    </style>


</head>

<body>

    <header class="float-start w-100">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="/assets2/images/logo.png" alt="logo" />
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/about')}}">About Club</a>
                        </li>
                        <li class="nav-item">
                            @auth
                            <a class="nav-link" href="{{url('main/profile-page')}}">My Profile</a>
                            @endauth
                        </li>
                        <li class="nav-item">
                            @auth
                            <a class="nav-link" href="{{url('/matches')}}">Create Matches</a>
                            @endauth
                        </li>
                        @auth
                        <a class="nav-link " href="{{url('/all-matches')}}">All Matches</a>
                        @endauth
                        </li>
                        <!-- Check if the user is authenticated -->
                        @if (Auth::check())
                        <!-- User is authenticated (logged in) -->
                        <!-- Do not show the Register link -->
                        @else
                        <!-- User is not authenticated (not logged in) -->
                        <!-- Show the Register link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/login') }}">Login</a>
                        </li>
                        @endif

                        <!-- <li class="nav-item">
             <a class="nav-link" href="shop.html">Shop</a>
           </li> -->

                        <!-- <li class="nav-item">
             <a class="nav-link" href="players.html">Players</a>
           </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                    </ul>

                </div>
                <div class="right-top">
                    <ul class="d-flex align-items-center">
                        <li class="dropdown position-relative">
                            @auth
                            <button type="button" class="btn cart-btn-links" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">
                                <a></a>
                                <span class="m-0 ion-0">
                                    <img src="/assets2/images/747376.png" alt="pnm">
                                </span>
                            </button>
                            @endauth
                            <ul class="dropdown-menu  cart-dropdown-ne">
                                <li>
                                    <!-- <div class="comon-cart-ps">
                     <div class="d-flex align-items-center justify-content-between">
                       <a href="#" class="products-sm-pic">
                           <figure>
                               <img src="/assets2/images/botsman1.png" alt="bn"/>
                           </figure>
                       </a>
                       <div class="cart-ps-details">
                           <a href="#" class="titel-crt-products">
                             Junior Shoes
                           </a>
                           <h6> $10.52 </h6>
                       </div>
                       <a href="#" class="close-crt"> <i class="fas fa-close"></i> </a>
                     </div>
                 </div> -->
                                    <!-- <div class="comon-cart-ps">
                   <div class="d-flex align-items-center justify-content-between">
                     <a href="#" class="products-sm-pic">
                         <figure>
                             <img src="/assets2/images/ballsk.png" alt="bn"/>
                         </figure>
                     </a>
                     <div class="cart-ps-details">
                         <a href="#" class="titel-crt-products">
                           SE Wooden
                         </a>
                         <h6> $20.52 </h6>
                     </div>
                     <a href="#" class="close-crt"> <i class="fas fa-close"></i> </a>
                   </div>
                 </div> -->
                                </li>
                                @auth
                                <li>
                                    <div class="sub-total-products d-flex align-items-center justify-content-between">
                                        <h5>Welcome : {{ auth()->user()->name }}</h5>
                                    </div>
                                </li>
                                @endauth
                                <li>
                                    @auth
                                    <a href="{{ url('/change-password') }}" class="btn cart-drop-bn"> Update Password
                                    </a>
                                    @endauth
                                </li>
                                @auth
                                <li>
                                    <a href="{{ route('/logout') }}" class="btn check-drop-bn">Logout</a>
                                </li>
                                @endauth


                            </ul>


                        </li>
                        @guest
                        <!-- This will only be displayed for guests (users who are not logged in) -->
                        <li>
                        <li style="display: none; color: black" class="nav-item">
                            <a class="nav-link" href="{{ route('/register') }}">Register</a>
                        </li>
                        <li style="display: none; color: black" class="nav-item">
                            <a class="nav-link" href="{{ route('/login') }}">Login</a>
                        </li>
                        <!-- <button data-bs-toggle="modal" data-bs-target="#loginModal" class="btn login-btn-links">
                <span class="m-0 oipn">
                    <img src="/assets2/images/747376.png" alt="pnm">
                </span>
            </button> -->
                        </li>
                        @endguest

                        <li>


                            <button type="button" class="btn bar-btn-links" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRightmobile">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-grid-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                                    </svg>
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    @yield('content')



    <footer class="float-start w-100">
        <div class="container">
            <div class="row g-lg-5 mt-0">
                <div class="col-lg-5">
                    <div class="logo-about mt-3 mt-lg-0 d-md-flex align-items-start justify-content-between">
                        <a href="#" class="col-lg-4">
                            <img src="/assets2/images/logo.png" alt="logo">
                        </a>
                        <p class="col-lg-8 ms-md-4 mt-4 mt-md-0 text-white spt"> Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry.
                            Lorem Ipsum has been </p>
                    </div>
                    <div class="support-section mt-4">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4 g-lg-5">
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <figure class="m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg>
                                    </figure>
                                    <div class="comnlink ms-3">
                                        <h6 class="m-0"> JOIN OUR TEAM </h6>
                                        <a href="#"> example@gmail.org </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <figure class="m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                                            <path
                                                d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z">
                                            </path>
                                        </svg>
                                    </figure>
                                    <div class="comnlink ms-3">
                                        <h6 class="m-0"> CONTACT US </h6>
                                        <a href="#"> mail@demolink.org </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="get-intouch-div mt-4 d-flex align-items-center justify-content-between">
                        <ul>
                            <li>
                                <a href="#" class="btn btn-socal-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-socal-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-socal-1">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="#" class="btn btn-socal-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>


                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="row row-cols-1 row-cols-sm-2 mt-4 mt-lg-0">
                        <div class="col d-grid justify-content-lg-center">
                            <div class="right-fgo">
                                <h4 class="text-white"> Quick Links</h4>
                                <ul class="mt-4">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/about')}}">About Club</a>
                                    </li>
                                    <li class="nav-item">
                                        @auth
                                        <a class="nav-link" href="{{url('main/profile-page')}}">My Profile</a>
                                        @endauth
                                    </li>
                                    <li class="nav-item">
                                        @auth
                                        <a class="nav-link" href="{{url('/matches')}}">Create Matches</a>
                                        @endauth
                                    </li>
                                    @auth
                                    <a class="nav-item nav-link" href="{{url('/all-matches')}}">All Matches</a>
                                    @endauth
                                    </li>

                                    <!-- <li class="nav-item">
             <a class="nav-link" href="shop.html">Shop</a>
           </li> -->

                                    <!-- <li class="nav-item">
             <a class="nav-link" href="players.html">Players</a>
           </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>

                                    <!-- <li>
                        <a href="{{url('/home')}}"> Home </a>
                      </li>
                      <li>
                        <a href="about.html"> About Club </a>
                      </li>

                      <li>
                        <a href="{{url('/profile-page')}}"> Profile Page </a>
                      </li>
                      <li>
                        <a href="matches.html"> Matched </a>
                      </li>
                      <li>
                        <a href="blog.html"> Blog </a>
                      </li>
                      <li>
                        <a href="shop.html"> Shop </a>
                      </li>
                      <li>
                        <a href="players.html"> Players </a>
                      </li>
                      <li>
                        <a href="contact.html"> Contact </a>
                      </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="right-fgo">
                                <h4 class="text-white mt-0">
                                    Twitter Feed
                                </h4>
                                <div class="comon-news mt-4">
                                    <figure class="m-0">
                                        <img src="/assets2/images/istockphoto-186546636-612x612.jpg" alt="pbn">
                                    </figure>
                                    <div class="left-divbn">
                                        <a href="#" class="btn tg-btn"> Tennis
                                        </a><a href="#" class="titel-text1 my-2 d-block">
                                            Lorem Ipsum is simply dummy
                                        </a>
                                        <p> <i class="far fa-clock"></i> APRIL 15, 2022 </p>
                                    </div>


                                </div>

                                <div class="comon-news mt-4">
                                    <figure class="m-0">
                                        <img src="/assets2/images/istockphoto-186546636-612x612.jpg" alt="pbn">
                                    </figure>
                                    <div class="left-divbn">
                                        <a href="#" class="btn tg-btn"> Tennis
                                        </a><a href="#" class="titel-text1 my-2 d-block">
                                            Lorem Ipsum is simply dummy
                                        </a>
                                        <p> <i class="far fa-clock"></i> APRIL 15, 2022 </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>


            </div>
        </div>

        <div class="footer-div1 mt-4">
            <div class="container">
                <div
                    class="row row-cols-1 row-cols-lg-2 text-center text-lg-start gy-4 gy-lg-0 justify-content-center justify-content-lg-between">
                    <div class="col">
                        <p class="text-white"> Copyright © 2023.All Rights Reserved </p>
                    </div>
                    <div class="col d-grid justify-content-lg-end">
                        <ul>
                            <li>
                                <a href="#"> Privacy Policy </a>
                                <a href="#"> Term Of Service </a>
                                <a href="#">Disclaimer </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </footer>



    <!-- <div class="modal fade login-div-modal" id="memberModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="{{ route('/register') }}" name="contact-form" method="post" enctype="multipart/form-data" id="registrationForm" onsubmit="return validateForm()">
          @csrf
      @if(Session::has('error'))
          <div class="alert text-danger">
              {{ Session::get('error') }}
          </div>
      @endif


  @if(Session::has('success'))
          <div class="alert text-success">
              {{ Session::get('success') }}
          </div>
      @endif



            <div class="com-div-md">
              <h5 class="text-center mb-3" style="font-size: 18px;"> Become A Member </h5>
              <button type="button" class="close" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
              <div class="login-modal-pn">

              <div class="cm-select-login mt-0">
                <div class="country-dp">

                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full Name" required/>

                  <span id="nameError" class="text-danger error"></span>

                </div>

                <div class="phone-div">
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" required/>
@if ($errors->has('email'))
    <span class="error">{{ $errors->first('email') }}</span>
@endif

                  <span id="emailError" class="text-danger error"></span>

              </div>

                <div class="phone-div">
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Enter Phone Number" required/>
                    <span id="phoneError" class="text-danger error"></span>
@if ($errors->has('phone'))
    <span class="error">{{ $errors->first('phone') }}</span>
@endif
                </div>

                <div class="phone-div">
                  <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Create Password" required/>
                  <span id="passwordError" class="text-danger error"></span>

                </div>

                <div class="phone-div">
                  <input type="password" name="cpassword" value="{{ old('cpassword') }}" class="form-control" placeholder="Confirm Password" required/>

                  <span id="cpasswordError" class="text-danger error"></span>

                </div>

                <div class="phone-div">
                  <label>Upload User Profile</label>
                  <input type="file" name="profile_image" class="form-control" placeholder="Image">

                  <span id="profileImageError" class="text-danger error"></span>

                </div>

                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}></div>

                  <span id="recaptchaError" class="text-danger error"></span>


              </div>

              <button type="submit" onclick="submitForm();" name="submit" class="btn continue-bn"> Register </button>
            </div>

              <p class="text-center mt-3"> Do not have an account?
                <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#loginModal" data-bs-dismiss="modal" href="{{route('/login')}}"> Login </a>
              </p>
            </div>
        </form>
      </div>
    </div>
  </div>
</div> -->





    <div class="offcanvas offcanvas-end" id="offcanvasRightmobile">
        <div class="offcanvas-header py-0">
            <button type="button" class="close-menu mt-4" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="head-contact d-none d-lg-block">
                <a href="index.html" class="logo-side">
                    <img src="/assets2/images/logo.png" alt="logo">
                </a>
                <p class="mt-4"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="quick-link my-4">
                    <ul>
                        <li> <i class="fas fa-map-marker-alt"></i> <span> 89 Mounthoolie Lane, Sutton Bassett, UK
                            </span> </li>
                        <li> <i class="fab fa-whatsapp"></i> <span> 180-205-2560 </span> </li>
                        <li> <i class="fas fa-envelope"></i> <span> example@gmail.com </span> </li>
                    </ul>
                </div>
                <ul class="side-media">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                </ul>
            </div>

            <div class="head-contact d-block d-lg-none">
                <a href="index.html" class="logo-side">
                    <img src="/assets2/images/logo.png" alt="logo">
                </a>

                <div class="mobile-menu-sec mt-3">
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About Club</a>
                        </li>
                        <li class="nav-item">
                            @auth
                            <a class="nav-link" href="{{url('/profile-page')}}">My Profile</a>
                            @endauth
                        </li>
                        <li class="nav-item">
                            @auth
                            <a class="nav-link" href="{{url('/matches')}}">Create Matches</a>
                            @endauth
                        </li>
                        @auth
                        <a class="nav-link" href="{{url('/all-matches')}}">All Matches</a>
                        @endauth
                        </li>
                        <!-- Check if the user is authenticated -->
                        @if (Auth::check())
                        <!-- User is authenticated (logged in) -->
                        <!-- Do not show the Register link -->
                        @else
                        <!-- User is not authenticated (not logged in) -->
                        <!-- Show the Register link -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/register') }}">Register</a>
                        </li>
                        @endif

                        <!-- <li class="nav-item">
             <a class="nav-link" href="shop.html">Shop</a>
           </li> -->

                        <!-- <li class="nav-item">
             <a class="nav-link" href="players.html">Players</a>
           </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        <!-- <li class="active-m">
              <a href="index.html"> Home </a>
            </li>
            <li>
              <a href="about.html"> About Club </a>
            </li>

            <li>
              <a href="matches.html">  Matches  </a>
            </li>
            <li>
              <a href="shop.html">  Shop  </a>
            </li>
            <li>
              <a href="blog.html">  Blog </a>
            </li>
            <li>
              <a href="players.html">  Players  </a>
            </li>
            <li>
              <a href="contact.html"> Contact </a>
            </li> -->
                    </ul>
                </div>
                <div class="quick-link">
                    <ul>
                        <li> <i class="fab fa-whatsapp"></i> <span> 180-250-9625 </span> </li>
                        <li> <i class="fas fa-envelope"></i> <span> example@gmail.com</span> </li>
                    </ul>
                </div>
                <ul class="side-media">
                    <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
                    <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="modal fade login-div-modal" id="lostpsModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="com-div-md">
                            <h5 class="text-center mb-3"> Forget Your Password? </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <div class="login-modal-pn">
                                <p> We'll email you a link to reset your password</p>
                                <div class="cm-select-login mt-3">

                                    <div class="phone-div">

                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Your Email" required />
                                    </div>


                                </div>



                                <button type="submit" class="btn continue-bn"> Send Me a password reset Link </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="modal fade login-div-modal" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <form action="{{route('/login')}}" method="post">
                        @csrf
                        <div id="login-td-div" class="com-div-md">

                            <h5 class="text-center mb-3"> Login </h5>
                            <button type="button" class="close" data-bs-dismiss="modal">
                                <span>×</span>
                            </button>
                            <div class="login-modal-pn">

                                <div class="cm-select-login mt-3">
                                    <div class="country-dp">

                                        <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                            required />
                                        <span id="emailError" class="text-danger error"></span>
                                    </div>

                                    <div class="phone-div">

                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" required />
                                        <span id="passwordError" class="text-danger error"></span>

                                    </div>
                                </div>

                                <!-- Google Recaptcha -->
                                <div class="g-recaptcha mt-4 mb-4" data-sitekey={{config('services.recaptcha.key')}}>
                                </div>
                                <span id="recaptchaError" class="text-danger error"></span>
                                @if ($errors->any())
                                <div class="alert text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <button type="submit" name="submit" class="btn continue-bn"> <i class="fas fa-lock"></i>
                                    SIGN IN </button>
                            </div>

                            <p class="text-center  mt-3">
                                <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#lostpsModal"
                                    data-bs-dismiss="modal"> Lost Password ? </a>
                            </p>


                            <p class="text-center  mt-3"> Do not have an account?
                                <a data-bs-toggle="modal" class="regster-bn" data-bs-target="#memberModal"
                                    data-bs-dismiss="modal" href="{{route('/register')}}"> Register </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include SweetAlert library -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

    <!-- <script>
 document.addEventListener("DOMContentLoaded", function() {
    const registrationForm = document.getElementById("registrationForm");

    registrationForm.addEventListener("submit", function(event) {
        event.preventDefault();

        fetch(registrationForm.action, {
            method: "POST",
            body: new FormData(registrationForm),
            headers: {
                "X-CSRF-Token": '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (response.ok) {
                return response.json(); // Parse response body as JSON
            } else {
                throw new Error("Registration failed.");
            }
        })
        .then(data => {
            // Check if there are any errors in the response
            if (data && data.errors && data.errors.length > 0) {
                // Display errors using SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Registration Failed',
                    text: data.errors.join('\n') // Display all errors
                });
            } else {
                // Display success message using SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful',
                    text: data.message, // Message from the server response
                    showConfirmButton: false,
                    timer: 2000 // Close alert after 2 seconds
                });
            }
        })
        // .catch(error => {
        //     // Display SweetAlert error message
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Registration Failed',
        //         text: 'An error occurred. Please try again later.'
        //     });
        // });
    });
});

</script> -->

    <script>
    // function submitForm() {
    //     var registrationForm = document.getElementById("registrationForm");

    //     // Validate the form inputs
    //     if (!validateForm()) {
    //         return; // Exit if validation fails
    //     }

    //     // Submit the form
    //     // registrationForm.submit();

    //     // Reset the form after a short delay
    //     setTimeout(function() {
    //         registrationForm.reset();
    //     }, 500); // Adjust the delay as needed
    // }


    // function validateForm() {
    //         var name = document.forms["registrationForm"]["name"].value;
    //         var email = document.forms["registrationForm"]["email"].value;
    //         var password = document.forms["registrationForm"]["password"].value;
    //         var cpassword = document.forms["registrationForm"]["cpassword"].value;
    //         var phone = document.forms["registrationForm"]["phone"].value;
    //         var profileImage = document.forms["registrationForm"]["profile_image"].files[0];
    //         var recaptchaResponse = document.forms["registrationForm"]["g-recaptcha-response"].value;

    //         var errorElements = document.getElementsByClassName("error");
    //         for (var i = 0; i < errorElements.length; i++) {
    //             errorElements[i].innerHTML = "";

    //         }

    //         var nameRegex = /^[a-zA-Z\s]+$/;
    //         if (name.trim() == "" || !nameRegex.test(name) || name.length > 255) {
    //             document.getElementById("nameError").innerHTML = "Please enter a valid name (only letters and spaces, maximum 255 characters)";
    //             return false;
    //         }

    //         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //         if (email.trim() == "" || !emailRegex.test(email) || email.length > 255) {
    //             document.getElementById("emailError").innerHTML = "Please enter a valid email address (maximum 255 characters)";
    //             return false;
    //         }

    //         fetch('/check-email', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             },
    //             body: JSON.stringify({ email: email })
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             if (data.error) {
    //                 document.getElementById("emailError").innerHTML = data.error;
    //                 return false;
    //             }
    //         });



    //         if (password.trim() == "" || password.length < 4) {
    //             document.getElementById("passwordError").innerHTML = "Password must be at least 4 characters long";
    //             return false;
    //         }


    //         if (cpassword.trim() == "" || cpassword !== password) {
    //             document.getElementById("cpasswordError").innerHTML = "Passwords do not match";
    //             return false;
    //         }


    //         var phoneRegex = /^\+91\d{10}$/;
    //         if (phone.trim() == "" || !phoneRegex.test(phone)) {
    //             document.getElementById("phoneError").innerHTML = "Please enter a valid phone number in the format +91xxxxxxxxxx";
    //             return false;
    //         }


    //         fetch('/check-phone', {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             },
    //             body: JSON.stringify({ phone: phone })
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             if (data.error) {
    //                 document.getElementById("phoneError").innerHTML = data.error;
    //                 return false;
    //             }
    //         });

    //         if (profileImage) {
    //             var allowedExtensions = ["jpeg", "jpg", "png", "gif"];
    //             var extension = profileImage.name.split('.').pop().toLowerCase();
    //             var isValidExtension = allowedExtensions.includes(extension);
    //             var maxSize = 2048; // 2MB in kilobytes
    //             if (!isValidExtension || profileImage.size > maxSize * 1024) {
    //                 document.getElementById("profileImageError").innerHTML = "Please upload a valid image file (jpeg, jpg, png, gif) with maximum size 2MB";
    //                 return false;
    //             }
    //         }

    //         if (recaptchaResponse.trim() == "") {
    //             document.getElementById("recaptchaError").innerHTML = "Please complete the reCAPTCHA verification";
    //             return false;
    //         }

    //         return true;

    //       }

    //     function submitForm() {
    //     var registrationForm = document.getElementById("registrationForm");


    //     setTimeout(function() {
    //         registrationForm.reset();
    //     }, 500);
    // }
    </script>


    <!-- <script>

<!-- <script>
    function validateForm() {
        var name = document.forms["registrationForm"]["name"].value;
        var email = document.forms["registrationForm"]["email"].value;
        var password = document.forms["registrationForm"]["password"].value;
        var cpassword = document.forms["registrationForm"]["cpassword"].value;
        var phone = document.forms["registrationForm"]["phone"].value;
        var profileImage = document.forms["registrationForm"]["profile_image"].files[0];
        var recaptchaResponse = document.forms["registrationForm"]["g-recaptcha-response"].value;

        // Name validation: required, only letters and spaces, maximum length 255
        var nameRegex = /^[a-zA-Z\s]+$/;
        if (name.trim() == "" || !nameRegex.test(name) || name.length > 255) {
            alert("Please enter a valid name (only letters and spaces, maximum 255 characters)");
            return false;
        }

        // Email validation: required, valid email format, maximum length 255
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.trim() == "" || !emailRegex.test(email) || email.length > 255) {
            alert("Please enter a valid email address (maximum 255 characters)");
            return false;
        }

        // Password validation: required, minimum length 4
        if (password.trim() == "" || password.length < 4) {
            alert("Password must be at least 4 characters long");
            return false;
        }

        // Confirm password validation: required, must match password
        if (cpassword.trim() == "" || cpassword !== password) {
            alert("Passwords do not match");
            return false;
        }

        // Phone validation: required, must be in format +91xxxxxxxxxx
        var phoneRegex = /^\+91\d{10}$/;
        if (phone.trim() == "" || !phoneRegex.test(phone)) {
            alert("Please enter a valid phone number in the format +91xxxxxxxxxx");
            return false;
        }

        // Profile image validation: optional, must be an image file with allowed extensions and maximum size 2MB
        if (profileImage) {
            var allowedExtensions = ["jpeg", "jpg", "png", "gif"];
            var extension = profileImage.name.split('.').pop().toLowerCase();
            var isValidExtension = allowedExtensions.includes(extension);
            var maxSize = 2048; // 2MB in kilobytes
            if (!isValidExtension || profileImage.size > maxSize * 1024) {
                alert("Please upload a valid image file (jpeg, jpg, png, gif) with maximum size 2MB");
                return false;
            }
        }

        // Recaptcha validation: required
        if (recaptchaResponse.trim() == "") {
            alert("Please complete the reCAPTCHA verification");
            return false;
        }

        return true; // If all validations pass
    }
</script> -->




    <!-- <script>
// Function to handle form submission
function submitForm() {
    // Validate form inputs
    if (!validateForm()) {
        return false;
    }

    // Get form data
    var formData = new FormData(document.getElementById("registrationForm"));

    // Send AJAX request
    $.ajax({
        url: "/register",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Handle success response
            if (response.success) {
                // Update UI for success
                // For example, close the modal
                $('#memberModal').modal('hide');
                // Optionally, you can display a success message
            } else {
                // Handle validation errors or other failures
                // Display error messages to the user
                // Update UI accordingly
            }
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error(xhr.responseText);
        }
    });

    // Prevent default form submission
    return false;
}

    function validateForm() {
        var name = document.forms["registrationForm"]["name"].value;
        var email = document.forms["registrationForm"]["email"].value;
        var password = document.forms["registrationForm"]["password"].value;
        var cpassword = document.forms["registrationForm"]["cpassword"].value;
        var phone = document.forms["registrationForm"]["phone"].value;
        var profileImage = document.forms["registrationForm"]["profile_image"].files[0];
        var recaptchaResponse = document.forms["registrationForm"]["g-recaptcha-response"].value;

        // Clear previous error messages
        var errorElements = document.getElementsByClassName("error");
        for (var i = 0; i < errorElements.length; i++) {
            errorElements[i].innerHTML = "";

        }

        // Name validation: required, only letters and spaces, maximum length 255
        var nameRegex = /^[a-zA-Z\s]+$/;
        if (name.trim() == "" || !nameRegex.test(name) || name.length > 255) {
            document.getElementById("nameError").innerHTML = "Please enter a valid name (only letters and spaces, maximum 255 characters)";
            return false;
        }

                // Email validation: required, valid email format, maximum length 255
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.trim() == "" || !emailRegex.test(email) || email.length > 255) {
            document.getElementById("emailError").innerHTML = "Please enter a valid email address (maximum 255 characters)";
            return false;
        }

        // Check if email already exists
        fetch('/check-email', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ email: email })
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                document.getElementById("emailError").innerHTML = data.error;
                return false;
            }
        });


        // Password validation: required, minimum length 4
        if (password.trim() == "" || password.length < 4) {
            document.getElementById("passwordError").innerHTML = "Password must be at least 4 characters long";
            return false;
        }

        // Confirm password validation: required, must match password
        if (cpassword.trim() == "" || cpassword !== password) {
            document.getElementById("cpasswordError").innerHTML = "Passwords do not match";
            return false;
        }

              // Phone validation: required, must be in format +91xxxxxxxxxx
        var phoneRegex = /^\+91\d{10}$/;
        if (phone.trim() == "" || !phoneRegex.test(phone)) {
            document.getElementById("phoneError").innerHTML = "Please enter a valid phone number in the format +91xxxxxxxxxx";
            return false;
        }

        // Check if phone number already exists
        fetch('/check-phone', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ phone: phone })
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                document.getElementById("phoneError").innerHTML = data.error;
                return false;
            }
        });

        // Profile image validation: optional, must be an image file with allowed extensions and maximum size 2MB
        if (profileImage) {
            var allowedExtensions = ["jpeg", "jpg", "png", "gif"];
            var extension = profileImage.name.split('.').pop().toLowerCase();
            var isValidExtension = allowedExtensions.includes(extension);
            var maxSize = 2048; // 2MB in kilobytes
            if (!isValidExtension || profileImage.size > maxSize * 1024) {
                document.getElementById("profileImageError").innerHTML = "Please upload a valid image file (jpeg, jpg, png, gif) with maximum size 2MB";
                return false;
            }
        }

        // Recaptcha validation: required
        if (recaptchaResponse.trim() == "") {
            document.getElementById("recaptchaError").innerHTML = "Please complete the reCAPTCHA verification";
            return false;
        }

        return true; // If all validations pass
    }

    </script> -->



    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="/assets2/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="/assets2/js/jquery.min.js"></script> -->
    <script src="/assets2/js/owl.carousel.min.js"></script>
    <script src="/assets2/js/jquery.fancybox.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="text/javascript">
    jQuery(function() {
        jQuery('.select2').select2();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.upcomin-matches').owlCarousel({
            loop: true,
            margin: 50,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                667: {
                    items: 1
                },
                1000: {
                    items: 2
                },
                1180: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        })
        $('.slider-sertu').owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            nav: true,
            mouseDrag: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

        $('.shop-slider').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                667: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })

        $('.team-membern').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                667: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })

        $('.result-sliden').owlCarousel({
            loop: true,
            margin: 0,
            dots: true,
            nav: false,
            mouseDrag: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })


        $('.sponj-slide').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                375: {
                    items: 2
                },
                600: {
                    items: 2
                },
                667: {
                    items: 2
                },
                1000: {
                    items: 6
                }
            }
        })


    });
    </script>

    <!-- <script>
  $(document).ready(function() {
var myCarousel = document.querySelector('#carouselExampleFade')
var carousel = new bootstrap.Carousel(carouselExampleFade, {
  interval: 3000,
})
});
</script> -->

</body>

</html>