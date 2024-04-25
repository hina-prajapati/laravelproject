@extends('ui_layout.app')

@section('htmlheader_title')
    Register | Online Job Portal | JOBJET Taxsutra
@endsection

@section('main-content')
<link href="{{ asset('/css/common/chosen.min.css') }}" rel="stylesheet" type="text/css" />

<style>
	.pageTitle {
        background: url(/images/ContactUs.jpg) no-repeat;
        background-size: 100% 100%;
    }
    @media only screen and (max-width: 540px) {
        
        .pageTitle {
            background: url(/images/Mobile_ContactUs_TS_JOBJET_BAN_B_400x220_002_LR.jpg) no-repeat;
        }
    }
	.userbtns .nav-tabs>li {
	    width: 100%;
	    margin-bottom: 0;
	}
</style>

<!-- Header end -->
<!-- Page Title start -->
<div class="pageTitle">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h1 class="page-heading">Registration</h1>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="breadCrumb"><a href="/">Home</a> / <span>Registration</span></div>
			</div>
		</div>
	</div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{ route('employer-register') }}" method="POST" enctype="multipart/form-data">
		            {{ csrf_field() }}
					<div class="userccount">
						
						
						<div class="userbtns">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#employer">Employer Registration</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="employer" class="formpanel tab-pane fade in active">
								<div class="formrow">
									<input type="text" name="firstname" value="{{old('firstname')}}" class="form-control" placeholder="First Name" required="required" >

									@if($errors->has('firstname'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('firstname') }}</strong>
							            </div>
							        @endif

								</div>
								<div class="formrow">
									<input type="text" name="lastname" value="{{old('lastname')}}" class="form-control" placeholder="Last Name" required="required" >
									@if($errors->has('lastname'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('lastname') }}</strong>
							            </div>
							        @endif
								</div>

								<div class="formrow">
									<input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Email ID (username)" required="required" >
									@if($errors->has('email'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('email') }}</strong>
							            </div>
							        @endif
							        <div class="alert alert-danger emailError" hidden>
						                <strong id="email_error"></strong>
						            </div>
								</div>

								<div class="formrow">
									<input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Mobile Number" id="mobile" required="required" >
									@if($errors->has('mobile'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('mobile') }}</strong>
							            </div>
							        @endif
							        <div class="alert alert-danger mobilenumber" hidden>
						                <strong id="mobile_error"></strong>
						            </div>
								</div>

								<div class="formrow">
									<input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password" required>
									@if($errors->has('password'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('password') }}</strong>
							            </div>
							        @endif
								</div>
								
								<div class="formrow">
									<input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="Confirm Password" required>
								</div>

								<div class="formrow">
									<select class="form-control" name="about_us">
										<option value="">How did you hear about us?</option>
										@foreach($hearaboutus AS $key => $value)
											<option value="{{$value->name}}">{{$value->name}} </option>
										@endforeach
									</select>
								</div>

								<div class="formrow">
			                        <input type="text" class="form-control" id="organisation_name" name="organisation_name" value="{{ old('organisation_name') }}" placeholder="Enter Organisation Name.." required="required" >
									@if($errors->has('organisation_name'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('organisation_name') }}</strong>
							            </div>
							        @endif
								</div>

								<div class="formrow">
			                        <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation') }}" placeholder="Enter Designation.." required="required" >
									@if($errors->has('designation'))
							            <div class="alert alert-danger" role="alert">
							                <strong>{{ $errors->first('designation') }}</strong>
							            </div>
							        @endif
								</div>


								<div class="formrow">
								  <select class="form-control chosen-select" name="city" id="city" required="required" >
								        <option value=""> Select City</option>
								        @foreach($cities as $as)
								            <option value="{{$as->city}}"> {{ $as->city}}</option>
								        @endforeach
								    </select>
								</div>
								
								<div class="formrow">
									<input type="checkbox" value="agree text" name="agree" required="required" />
									I Agree to the <a href="/website/Terms%20and%20Conditions.pdf" target="_blank">Terms of Use</a>
								</div>
								<input type="submit" class="btn" value="Register" id="register">
							</div>
						</div>
						<div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="/employer-login">Login Here</a></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection


@section('custom-scripts')
<script src="{{ asset('/js/common/function.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/common/chosen.jquery.min.js') }}" type="text/javascript"></script>
<script>
    chosenInit();
    $(document).on('change', '#mobile', function(event) {
        event.preventDefault();
        var phone = $('#mobile').val();
        var filter = /^\d*(?:\.\d{1,2})?$/;
        var pattern = /^[5-9]\d{9}$/;
        $('.mobilenumber').hide();
        $('#register').removeAttr('disabled');
        if(phone.length > 0){
        	if (phone.length != 10) {
        		$('#mobile_error').html('Enter 10 digit mobile number');
        		$('.mobilenumber').show();
        		$('#register').attr('disabled','disabled');
        	}else if (!pattern.test(phone)) {
        		$('#register').attr('disabled','disabled');
        		$('.mobilenumber').show();
        		$('#mobile_error').html('Invalid Number');
        	}
        }
    });
    
    $(document).on('change', '#email', function(event) {
        event.preventDefault();
        var email = $('#email').val();
        var pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        $('.emailError').hide();
        $('#register').removeAttr('disabled');
        if(email.length > 0){
        	if (!pattern.test(email)) {
        		$('#register').attr('disabled','disabled');
        		$('.emailError').show();
        		$('#email_error').html('Invalid Email Address');
        	}
        }
    });
</script>
@endsection