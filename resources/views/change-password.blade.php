
@extends('layout2')
 @section('content')
 
 <style>
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
    width: 170px;
    margin-left: 30px;
    box-shadow: #a1a1a1 12px 12px 48px;
    height: auto;
}
.contact-use-div.position-relative {
    display: flex;
    align-items: center;
    justify-content: center;
}

.bg-img {
    background: linear-gradient(rgb(0 0 0 / 70%), rgba(0, 0, 0, 0.55)), url(assets2/images/crickt.jpg) no-repeat;
    width: 100% !important;
    height: auto;
    background-size: cover;
    background-position: center;
}
.col-md-6 {
    flex: 0 0 auto;
    width: 400px;
    padding: 7px 28px;
}
.login-form {
    background: #80808082;
    padding: 50px;
    color: #fff;
}
 </style>
 <!-- <section class="banner-part sub-main-banner float-start w-100">

          <div class="baner-imghi">
             <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> Update Password</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Password</li>
                        </ol>
                    </nav>
               </div>
            </div>
</section> -->
<section class="float-start w-100 body-part pt-0 bg-img ">

<div class="contact-page d-inline-block w-100">
   <div class="container">

       <div class="row row-cols-lg-1 g-5">
            
            <div class="col">
               <div class="contact-use-div position-relative">
                    <!-- <div class="">{{ __('Change Password') }}</div> -->
                    <div class="login-form">
                    <h2 class="mt-2 mb-4 text-center text-white"> Change Password </h2>
                    <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                      
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                <label>New Password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>
                            </div>

                            <div class="d-flex mt-4">
                            <button type="submit" class="btn comon-btn btn-success">Update Password</button>
                            <a class="btn comon-btn btn-primary ms-3" style="background-color: #0d6efd" href="{{ route('main/profile-page') }}">
                                    <span style="color: #fff; background-color: #0d6efd">Back</span>
                                </a>
                            </div>
                    </form>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection
