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
    width: 160px;
    box-shadow: #a1a1a1 12px 12px 48px;
}

</style>
 
<section class="banner-part sub-main-banner float-start w-100 ">

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
</section>


<section class="float-start w-100 body-part pt-0 bg-img ">

<div class="contact-page d-inline-block w-100">
   <div class="container">

       <div class="row row-cols-1 row-cols-lg-2 g-5">
            
            <div class="col-md-10">
               <div class="contact-use-div position-relative">
                   <!-- <h2> Contact Details </h2> -->
                  
                   <h2 class="mt-5" style="color: #fff, position-relative;"> Change Password </h2>
                  <div class="card-body">
  
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" placeholder="Enter Email..." required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div><br>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" placeholder="Type Password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div><br>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              </div>
                          </div><br>
  
                          <div class="col-md-6 offset-md-2">
                              <button type="submit" class="btn comon-btn mt-4">
                                  Reset Password
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div></section>
@endsection