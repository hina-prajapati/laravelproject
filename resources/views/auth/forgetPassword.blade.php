@extends('layout2')
  

@section('content')

<style>
    .bg-img {
    background: linear-gradient(rgb(0 0 0 / 70%), rgba(0, 0, 0, 0.55)), url(assets2/images/crickt.jpg) no-repeat;
    width: 100% !important;
    height: auto;
    background-size: cover;
    background-position: center;
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
    width: 312px;
    margin-bottom: 30px;
}
.login-form {
    background: #80808082;
    padding: 50px;
    color: #fff;
}

.contact-use-div .comon-btn {
    background: #34a853;
    font-weight: 600;
    font-family: "Kanit", sans-serif;
    text-transform: uppercase;
    font-style: normal;
    height: 50px;
    line-height: 40px;
    color: #fff;
    border-radius: 0;
    width: 100%;
    box-shadow: #a1a1a1 12px 12px 48px;
}
</style>
<section class="float-start w-100 body-part pt-0 bg-img ">

<div class="contact-page d-inline-block w-100">
   <div class="container">

       <div class="row row-cols-lg-1 g-5">
            
            <div class="col">
               <div class="contact-use-div position-relative">
                    <!-- <div class="">{{ __('Change Password') }}</div> -->
                    <div class="login-form">
                    <h2 class="mb-4 text-center text-white"> Reset Password</h2>
                 
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf

                          
                          <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label for="email" class="form-label">E-Mail Address</label>
                                <input type="email" id="email_address" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" required autofocus>
                                    @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                            </div>
                            </div>


                          <!-- <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6 mb-4">
                                  <input type="email" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div> -->

                          <div class="mt-4">
                            <button type="submit" class="btn comon-btn btn-success"> Send Password Reset Link</button>
                            <!-- <a class="btn comon-btn btn-primary ms-3" style="background-color: #0d6efd" href="{{ url('/login') }}">
                                    <span style="color: #fff; background-color: #0d6efd">Back</span>
                                </a> -->
                            </div>
                          <!-- <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Send Password Reset Link
                              </button>
                          </div> -->
                      </form>
                    
                    </div></div></div></div></div></div></section>

@endsection