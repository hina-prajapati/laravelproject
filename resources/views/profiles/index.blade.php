        @extends('FrontUser')
        @extends('profiles.layout')
        @section('admin')

        <style>
            label {
            display: inline-block;
        
        
        }

        .form-group h4 {
            width: 136px;
            margin-left: 30px;
        }
        .open>.dropdown-menu {
            display: block;
            width: 180px;
            text-align: center;
            height: 140px;
            font-size: 12px;
            padding: 18px;
        }
        .caret {
            display: none;
        }
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            padding: 28px;
            font-size: 12px;
        }

        .states-justify h4 {
            margin-right: 205px;
            margin-bottom: 0px;
        }
        label h4 {
            font-size: 12px;
            margin-top: 11px;
            color: black;
            font-weight: 800;
        }
        .hdfgjfgj {
            width: 100%;
            /* font-size: 12px; */
        }

        </style>

        <style>
            .custom-radio-group {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .custom-radio-group input[type="radio"] {
                margin-right: 5px;
            }
        </style>


        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-container">

        <form action="{{ route('/user/dashboard/profiles/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>register now</h3>

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <?php

        use App\Models\Profile;
        use Illuminate\Support\Facades\Auth;
        $user = Auth::user();
        ?>

        <div class="col-md-6">
        <label>Name:</label>
        <input type="text" name="name" value="{{$user->name ??  null }}"  placeholder="enter your name" class="box">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

         <div class="col-md-6">
        <label>Date Of Birth:</label>
        <input type="date" name="datebirth" id="DateOfBirth" value="{{ old('datebirth') }}"   placeholder="enter datebirth" class="box" >
        @error('datebirth')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
         </div>

        <div class="col-md-6">
        <label>Age:</label>
        <input type="number" name="age" id="Age" value="{{ old('age') }}"  placeholder="Your Age...." class="box" >
        @error('age')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        </div>
        <br>

          <div class="col-md-6">
        <label>Select Role:</label>
        <div class="dropdown mb-4" style="width: 100%;" class="form-select">
        <button style="color: #000; float: inline-start; padding: 12px 14px; background-color: #eee; " name="role" value="{{ old('role', $user['role'] ?? '') }}" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
        <span class="caret">  {{ old('role', $user['role'] ?? 'Role') }}</span>
        Role</button>
        <ul class="dropdown-menu">
        <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Batsman <span class="caret"></span></a>
            <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#" onclick="setDropdownValue('Batsman')" >Batsman</a></li>
                        <li><a tabindex="-1" href="#" onclick="setDropdownValue('Opener')">Opener</a></li>
                        <li><a tabindex="-1" href="#" onclick="setDropdownValue('Middle Order')">Middle Order</a></li>
                        <li><a tabindex="-1" href="#" onclick="setDropdownValue('Tail')">Tail</a></li>
                    </ul>
        </li>
        <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Bowler <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Bowler')">Bowler</a></li>
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Fast')">Fast</a></li>
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Middle Fast')">Middle Fast</a></li>
            <!-- <li><a tabindex="-1" href="#" onclick="setDropdownValue('slow')">slow</a></li> -->
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Off Spin')">Off Spin</a></li>
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Left-Arm Orthodox Spin')">Left-Arm Orthodox Spin</a></li>
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Leg Spin')">Leg Spin</a></li>
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Left-Arm UnOrthodox Spin')">Left-Arm UnOrthodox Spin</a></li>
            <!-- <li><a tabindex="-1" href="#" onclick="setDropdownValue('Finger Spin')">Finger Spin</a></li> -->
            <!-- <li><a tabindex="-1" href="#" onclick="setDropdownValue('Wrist Spin')">Wrist Spin</a></li> -->

            </ul>         
        </li>
        <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">All Rounder <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('All Rounder')">All Rounder</a></li>

            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Batting All Rounder')">Batting All Rounder</a></li>
            <li><a tabindex="-1" href="#" onclick="setDropdownValue('Bowling All Rounder')">Bowling All Rounder</a></li>

            </ul>
        </li>
        <li class="dropdown-submenu">
        <li><a tabindex="-1" href="#" onclick="setDropdownValue('Wicket Keeper')">Wicket Keeper</a></li>
        </li>
        </ul>
   
        </div>
          </div>
        <br>

         
        <div class="col-md-6">
        <div class="hdfgjfgj">
        <label><h4>Select Country:</h4></label>
        <select id="country" name="country" class="form-select box" style="">
        <option value="">Select country</option>
        <option value="India">India</option>
        <option value="Asia">Asia</option>
        <option value="Nepal">Nepal</option>
        </select>
        </div>
         
        @error('country')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

        
        <div class="col-md-6">
        <!--- India states -->
        <div class="states-justify" style="width: 100%;">
        <label><h4>Select State:</h4></label>
        <select id="country-state" name="state" class="form-select box">
        <option value="">Select state</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Ladakh">Ladakh</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        </select>
        </div><br>
        <br>
        @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>


        <div class="col-md-6 mt-3">
         <label>Select City:</label>
        <select id="city" name="city" class="form-select box">
        <option value="">Select City</option>
        <option value="Achalpur">Achalpur</option>
        <option value="Ahiri">Ahiri</option>
        <option value="Ahmadnagar">Ahmadnagar</option>
        <option value="Ahmadpur">Ahmadpur</option>
        <option value="Airoli">Airoli</option>
                                </select>

        <br>
        @error('city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>


        <div class="col-md-6">
        <label>Email:</label>
        <input type="email" name="email" value="{{$user->email ??  null }}"  placeholder="enter email" class="box" readonly>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

                                <!-- <label>Password:</label>
        <input type="password" name="password" value="{{$user->password ??  null }}"  placeholder="enter password" class="box" >
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                                <label>Repeat Password:</label>
        <input type="password" name="cpassword" value="{{$user->cpassword ??  null }}"  placeholder="confirm password" class="box" >
        @error('cpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->


                                <!-- <label>Select Image:</label>
        <input type="file" name="image[]" multiple  class="box" accept="image/jpg, image/jpeg, image/png"> -->

        <!-- <label class="m-2">Cover Image</label> -->
                            <!-- <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover"> -->
        

        <div class="col-md-6">                    
        <label class="m-2">Images</label>
        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="photos[]" multiple>
        @error('photos')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>


        <div class="col-md-6">
            <label>Select Pdf File:</label>
            <input type="file" name="file" class="box" accept=".pdf, .docx">
            @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
            </div>

        <div class="">
        <div class="row d-flex">
        <div class="col-md-6">
            <div class="raddddio123" name="raddddio123">
                <div class="form-group">
                    <h4>Bowling Orientation</h4>
                    <div class="custom-radio-group">
                        <input type="radio" id="bowling_left" name="bowling_orientation" value="Left Hand">
                        <label for="bowling_left">Left Hand</label><br>
                        <input type="radio" id="bowling_right" name="bowling_orientation" value="Right Hand">
                        <label for="bowling_right">Right Hand</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <div class="raddddio" name="raddddio">
        <h4 style="width: 170px;">Batting Orientation</h4>
        <div class="custom-radio-group">
        <input type="radio" id="batting_left" name="batting_orientation" value="Left Hand">
        <label for="batting_left">Left Hand</label><br>
        <input type="radio" id="batting_right" name="batting_orientation" value="Right Hand">
        <label for="batting_right">Right Hand</label><br>
        </div>
        </div>
        </div>
     </div>
            @error('batting_oriantaion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <br>
        </div>
          


        <input type="submit" name="submit" value="register now" class="btn" style="background-color: dodgerblue;">
        <p>already have an account? <a href="{{route('/login')}}">login now</a></p>
        </form>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="~/Scripts/jquery-3.0.0.min.js"></script>

        <script>
        function setDropdownValue(value, buttonText) {
    document.getElementById('role').value = value;
    document.getElementById('dropdown-button').innerHTML = buttonText + ' <span class="caret"></span>';
}
</script>
        <script>
        $(document).ready(function () {
        $('#DateOfBirth').change(function () {
                var now = new Date();   //Current Date
                var past = new Date($('#DateOfBirth').val());  //Date of Birth
                if (past > now) {
                    alert('Entered Date is Greater than Current Date');
                    return false;
                }
                var nowYear = now.getFullYear();  //Get current year
                var pastYear = past.getFullYear();//Get Date of Birth year

                var age = nowYear - pastYear;  //calculate the difference
                $('#Age').val(age);
            })
        })
        </script>


        <script>
        $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
        });
        });
        </script>
      <script>
    function setDropdownValue(value) {
        document.querySelector('.btn.dropdown-toggle').textContent = value;
        document.querySelector('.btn.dropdown-toggle').value = value; // Optionally set the value attribute
    }
</script>
        </div>
        </section>



        @endsection
