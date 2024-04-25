@extends('layout2')
  
@section('content')

<style>
    .contact-page {
    padding: 0 !important;
    text-align: center;
}
.contact-use-div .comon-btn {
    background: #34a853;
    font-weight: 600;
    font-family: "Kanit", sans-serif;
    text-transform: uppercase;
    font-style: normal;
    height: 45px;
    line-height: 20px;
    color: #fff;
    border-radius: 0;
    width: 100%;
    box-shadow: #a1a1a1 12px 12px 48px;
}
.bg-img {
    background: linear-gradient(rgb(0 0 0 / 70%), rgba(0, 0, 0, 0.55)), url(/assets2/images/crickt.jpg) no-repeat;
    width: 100% !important;
    height: auto;
    background-size: cover;
    background-position: center;
}

.login-form {
    background: #80808082;
    padding: 50px;
    color: #fff;
    text-align: justify;
}

.contact-use-div.position-relative {
    justify-content: center;
    align-items: center;
    display: grid;
}
.contact-use-div .form-control {
    background-color: #f7f7f7;
    border: none !important;
    height: 45px;
    font-size: 14px;
    width: 300px;
}
.row.row-cols-lg-2.g-5 {
    align-items: center;
    display: flex;
    justify-content: center;
}
</style>
 
<!-- <section class="banner-part sub-main-banner float-start w-100 ">

          <div class="baner-imghi">
             <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> Change Password</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                        </ol>
                    </nav>
               </div>
            </div>
</section> -->


<section class="float-start w-100 body-part pt-0 bg-img ">

<div class="contact-page d-inline-block w-100">
   <div class="container">

       <div class="row  row-cols-lg-2 g-5">
            
            <div class="col-md-10">
               <div class="contact-use-div position-relative">
                   <!-- <h2> Contact Details </h2> -->
                   <div class="login-form mt-5 mb-5">
                    
                   <h2 class="text-white" style="color: #fff, position-relative;"> Change Password </h2>
                   @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                          
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
  
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                        
                    <input type="hidden" name="token" value="{{ $token }}">

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

                         <div class="col-lg-6 mt-2">
                             <div class="from-group">
                             <label>Player Password: </label>
                                 <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  placeholder="Confirm Password" class="form-control">
                                 @error('password_confirmation')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>
  
                        
                          <div class="mt-4">
                            <button type="submit" class="btn comon-btn btn-success">Reset Password</button>
                            
                            </div>
  
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div></section>
@endsection