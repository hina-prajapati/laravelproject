@extends('layout2')
 @section('content')

 <style>
   
/* styles.css */
.custom-success {
    color: #4CAF50 !important; /* You can use any desired color here */
    color: #fff; /* Text color for better visibility */
    padding: 10px; /* Adjust padding as needed */
    border-radius: 5px; /* Add rounded corners if desired */
}

.custom-error{
   color: red;
}

.contact-use-div .comon-btn {
    background: #34a853;
    font-weight: 600;
    font-family: "Kanit", sans-serif;
    text-transform: uppercase;
    font-style: normal;
    height: 45px;
    line-height: 34px;
    color: #fff;
    border-radius: 0;
    width: 100%;
    box-shadow: #a1a1a1 12px 12px 48px;
}

@media (max-width: 900px){
.banner-part {
    height: 0px !important;
}
.mt-4.btn-justify.d-flex {
    font-size: 10px;
}
}
.mt-4.btn-justify.d-flex {
    display: flex;
    justify-content: space-between;
}
.bg-img {
    background: linear-gradient(rgb(0 0 0 / 70%), rgba(0, 0, 0, 0.55)), url(assets2/images/crickt.jpg) no-repeat;
    width: 100% !important;
    height: auto;
    background-size: cover;
    background-position: center;
}

 .contact-use-div h2 {
    font-weight: 600;
    font-family: "Kanit", sans-serif;
    text-transform: uppercase;
    font-style: normal;
    color: #fff;
}

label{
    color: #fff;
    font-weight: 600;
}

.auth-user {
    color: #fff;
}
.contact-use-div.position-relative {
    justify-content: center;
    align-items: center;
    display: grid;
}
@media (min-width: 992px){
.col-lg-6 {
    flex: 0 0 auto;
    width: 100%;
}
}

.right-fgo li a {
    color: #fff !important;
    font-size: 15px;
    font-family: "Roboto", sans-serif;
}
 </style>
 <section class="banner-part sub-main-banner float-start w-100">
     
     <div class="baner-imghi">
        <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
     </div>

       <div class="sub-banner">
           <div class="container">
               <h1 class="text-center"> Login</h1>
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Login</li>
                   </ol>
               </nav>
          </div>
       </div>


</section>

<section class="float-start w-100 body-part pt-0 bg-img">

<div class="contact-page d-inline-block w-100">
   <div class="container">

       <div class="row row-cols-1  g-5 ">
            
            <div class="col">
               <div class="contact-use-div position-relative">
                   <!-- <h2> Contact Details </h2> -->
                  
                   <h2 class="mt-2 mb-4"> Login </h2>
                   <form action="" method="post" enctype="multipart/form-data">
                     @csrf

                     @if(Session::has('success'))
                     <div class="alert text-success">
                        {{ Session::get('success') }}
                     </div>
                  @endif
                  @if(Session::has('error'))
                     <div class="alert alert-error custom-error">
                        {{ Session::get('error') }}
                     </div>
                  @endif
                  

                         <div class="col-lg-6 mt-2">
                             <div class="from-group">
                             <label>Player Email:</label>
                                 <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                                 @error('email')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>
                   
                         <div class="col-lg-6 mt-2">
                             <div class="from-group">
                             <label>Player Password: </label>
                                 <input type="password" name="password" value="{{ old('password') }}"  placeholder="Enter password" class="form-control">
                                 @error('password')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>
                      
                         <!-- <div class="col-lg-12">
                             <div class="from-group">
                             <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div> 
                             @error('g-recaptcha-response')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                         </div> -->
                         
                         <div class="col-lg-12 mt-4">
                             <input type="submit" name="submit" class="btn comon-btn" value="Sign In"/>
                         
                            <div class="mt-4 btn-justify d-flex">
                               <div class="auth-user">
                               Don't have an Account ? <a href="{{ route('/register') }}" class="btn text-primary">Sign Up</a>
                               </div>
                              <a href="{{ route('forget.password.get') }}" class="btn text-primary">Forget Password</a>
                            </div>
                         </div>
                  
                   </form>
               </div>
            </div>
       </div>


   </div>

   
</div>


</section>

 @endsection