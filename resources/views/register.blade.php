@extends('layout2')
 @section('content')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
 <style>
   
/* styles.css */
.custom-success {
    color: #4CAF50 !important; /* You can use any desired color here */
    color: #fff; /* Text color for better visibility */
    padding: 10px; /* Adjust padding as needed */
    border-radius: 5px; /* Add rounded corners if desired */
}
label{
    color: #fff;
    font-weight: 600;
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

.auth-user {
    color: #fff;
}
.error{
    color: red;
}
.row.row-cols-lg-2.g-5 {
    align-items: center;
    display: flex;
    justify-content: center;
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
               <h1 class="text-center"> Register</h1>
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Register</li>
                   </ol>
               </nav>
          </div>
       </div>

</section>

                    @if(Session::has('success'))
                        <div class="alert text-success custom-success">
                            {{ Session::get('success') }}
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

        <section class="float-start w-100 body-part pt-0 bg-img">

        <div class="contact-page d-inline-block w-100">
        <div class="container">
        <div class="row row-cols-lg-2 g-5">
                 <div class="col">

               <div class="contact-use-div position-relative">
                   <!-- <h2> Contact Details </h2> -->
                  
                   <h2 class="mt-2" style="color: #fff, position-relative;"> Sign Up </h2>
                   <form action="" method="post" enctype="multipart/form-data" name="Frm_sign" id="Frm_sign">
                     @csrf

                     <div class="row mt-4">
                         <div class="col-lg-6 mt-3">
                             <div class="from-group">
                              <label>Player Name: </label>
                              <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control"  placeholder="Enter Your Name" >
                              @error('name')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>
                         <div class="col-lg-6 mt-3">
                             <div class="from-group">
                             <label>Player Phone Number:</label>
                              <input type="text" value="{{ old('phone') }}" name="phone" id="phone" class="form-control"  placeholder="+919987309813" >
                              @error('phone')
                              <span class="text-danger error">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>

                    
                         <div class="col-lg-6 mt-3">
                             <div class="from-group">
                             <label>Player Email (UserId):</label>
                                 <input type="text" name="email" id=""email value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                                 @error('email')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>
                         <div class="col-lg-6 mt-3">
                             <div class="from-group">
                             <label>Player Password: </label>
                                 <input type="password" name="password" id=""password value="{{ old('password') }}"  placeholder="Enter password" class="form-control">
                                 @error('password')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>

                         <div class="col-lg-6 mt-4">
                             <div class="from-group">
                             <label>Confirm Password: </label>
                                 <input type="password" name="cpassword" value="{{ old('cpassword') }}"  placeholder="Repeat Password" class="form-control">
                                 @error('cpassword')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                             </div>
                         </div>

                         <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label>User Photo:</label>
                            <input type="file" name="profile_image" class="form-control" placeholder="image">
                            @error('profile_image') <!-- Changed 'image' to 'profile_image' -->
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                         <div class="col-lg-12">
                             <div class="from-group" style="width: 100%;">
                             <div class="g-recaptcha mt-4" style="width: 100% !important; text-align: center;  justify-content: center;
" data-sitekey={{config('services.recaptcha.key')}}></div> 
                             @error('g-recaptcha-response')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                         </div>
                         <div class="col-lg-12 mt-4">
                             <input type="submit" name="submit" class="btn comon-btn" value="Sign Up"/><br><br>
                             <!-- <a class="nav-link collapsed btn comon-btn btn-primary ms-3" style="background-color: #0d6efd" href="{{ route('/login') }}">
                <span style="color: #fff; background-color: #0d6efd">Login</span>
              </a> -->
                            <div class="mt-4 auth-user">
                        Already have an Account ? <a href="{{ route('/login') }}" class="btn text-primary">Sign In</a>
                            </div>
                         </div>
                     </div>
                     </div></div>
                   </form>
              
       </div>


   </div>

   
</div>


</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- form validation -->
<script type="text/javascript">
    $(document).ready(function () {
        if ($('#Frm_sign').length > 0) {
            $('#Frm_sign').validate({
                rules: {
                    username: {
                        required: true
                    },
                    email: {
                        required: true,
                        remote: {
                            url: "{{ url('verifyemail') }}",
                            type: "GET",
                            data: {
                                action: function () {
                                    return "1";
                                }
                            }
                        }
                    },
                    phone: {
                        required: true,
                        maxlength: 10,
                        minlength: 10,
                        remote: {
                            url: "{{ url('verifycontact') }}",
                            type: "GET",
                            data: {
                                action: function () {
                                    return "2";
                                }
                            }
                        }
                    },
                    password: {
                        required: true,
                        equalTo: "#repass"
                    }
                },
                messages: {
                    username: {
                        required: "Username is required"
                    },
                    email: {
                        required: "Email is required",
                        remote: "Email is already registered"
                    },
                    phone: {
                        required: "Phone number is required",
                        remote: "Phone number is already registered",
                        maxlength: "Please enter a valid 10-digit phone number",
                        minlength: "Please enter a valid 10-digit phone number"
                    },
                    password: {
                        required: "Password is required",
                        equalTo: "Password is not equal"
                    },
                },
                errorPlacement: function (error, element) {
                    error.appendTo(element.parent());
                }
            });

            // Validate form on keyup and keydown events for username, email, and phone fields
            $('#username, #email, #phone').on('keyup keydown', function () {
                $('#Frm_sign').validate().element($(this));
            });

            // Immediate validation for empty fields
            $('#Frm_sign input').blur(function () {
                $(this).valid();
            });

            // Submit form
            $('#Frm_sign').submit(function (e) {
                e.preventDefault();
                if ($(this).valid()) {
                    // Form is valid, proceed with submission
                    this.submit();
                } else {
                    // Form is invalid, display error messages
                    return false;
                }
            });
        }
    });
</script>



 @endsection
 