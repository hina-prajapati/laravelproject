@extends('FrontUser')
@extends('profiles.layout')
@section('admin')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />


<style>
label {
    display: inline-block;
}

.justifybtn {
    width: 30px;
    float: inline-start;
    margin-bottom: 20px;
}

/* Style for the image container */
.image-container {
    display: flex;
    /* flex-wrap: wrap;  */
    /* Wrap images to the next row if there's not enough space */
}

/* Style for each image box */
.image-box {
    width: 100px;
    /* Adjust the width as per your preference */
    height: 100px;
    /* Adjust the height as per your preference */
    margin: 10px;
    /* Add spacing between image boxes */
    border: 1px solid #ccc;
    /* Add a border around each image box */
    box-sizing: border-box;
    /* Include the border in the width and height */
    overflow: hidden;
    /* Hide overflowing content (images) */
}

/* Style for the images within the image boxes */
.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Maintain aspect ratio and cover the entire box */
}

.btn {
    background-color: var(--blue);
}

label {
    display: inline-block;
    float: inline-start;
}

.raddddio {
    float: inline-start;
    margin-left: 115px;
}

.raddddio123 {
    float: inline-start;
    width: 60px;
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

            <form action="{{ route('profiles.edit', ['id' => $profile['id']]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <h3>Update Your Profile</h3>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <label>User Name:</label>
                <input type="text" name="name" value="<?=$profile['name']?>" placeholder="enter your name" class="box"
                    required>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <label>User DateBirth:</label>
                <input type="date" name="datebirth" id="DateOfBirth" value="<?=$profile['datebirth']?>"
                    placeholder="enter datebirth" class="box" required>

                @error('datebirth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <label>User Age:</label>
                <input type="text" name="age" id="Age" value="<?=$profile['age']?>" placeholder="calculate extact age"
                    class="box" required>
                @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label>Select Role:</label>
                <div class="dropdown mb-4" style="width: 100%;" class="form-select">
                    <button style="color: #000; float: inline-start; height: 35px; background-color: #eee; "
                        id="selectedRole" name="role" id="role" value="{{ old('role', $profile['role'] ?? '') }}"
                        class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Role
                        <?=$profile['role'] ?? 'Role'?>
                        <span class="caret">{{ old('role', $profile['role'] ?? 'Role') }}</span></button>
                    <input type="" name="role" id="role" value="{{ old('role', $profile['role'] ?? '') }}">

                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Batsman <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#" value="Batsman"
                                        <?=($profile['role'] == 'Batsman') ? 'selected' : ''?>>Batsman</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Opener', '<?=$profile['role']?>')">Opener</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Middle Order', '<?=$profile['role']?>')">Middle
                                        Order</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Tail', '<?=$profile['role']?>')">Tail</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Bowler <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Bowler', '<?=$profile['role']?>')">Bowler</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Fast', '<?=$profile['role']?>')">Fast</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Middle Fast', '<?=$profile['role']?>')">Middle
                                        Fast</a></li>
                                <!-- <li><a tabindex="-1" href="#" onclick="setDropdownValue('slow', '<?=$profile['role']?>')">slow</a></li> -->
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Off Spin', '<?=$profile['role']?>')">Off Spin</a>
                                </li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Left-Arm Orthodox Spin', '<?=$profile['role']?>')">Left-Arm
                                        Orthodox Spin</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Leg Spin', '<?=$profile['role']?>')">Leg Spin</a>
                                </li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Left-Arm UnOrthodox Spin', '<?=$profile['role']?>')">Left-Arm
                                        UnOrthodox Spin</a></li>
                                <!-- <li><a tabindex="-1" href="#" onclick="setDropdownValue('Finger Spin', '<?=$profile['role']?>')">Finger Spin</a></li> -->
                                <!-- <li><a tabindex="-1" href="#" onclick="setDropdownValue('Wrist Spin', '<?=$profile['role']?>')">Wrist Spin</a></li> -->

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">All Rounder <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('All Rounder', '<?=$profile['role']?>')">All
                                        Rounder</a></li>

                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Batting All Rounder', '<?=$profile['role']?>')">Batting
                                        All Rounder</a></li>
                                <li><a tabindex="-1" href="#"
                                        onclick="setDropdownValue('Bowling All Rounder', '<?=$profile['role']?>')">Bowling
                                        All Rounder</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                        <li><a tabindex="-1" href="#" value="Wicket Keeper"
                                <?=($profile['role'] == 'Wicket Keeper') ? 'selected' : ''?>>Wicket Keeper</a></li>

                        </li>
                    </ul>

                </div>
                <br>


                <label>Select Country:</label>
                <select id="country" name="country" class="js-example-basic-single form-select">
                    <option value="">Select country</option>
                    <option value="India" <?=($profile['country'] == 'India') ? 'selected' : ''?>>India</option>
                    <option value="Asia" <?=($profile['country'] == 'Asia') ? 'selected' : ''?>>Asia</option>
                    <option value="Nepal" <?=($profile['country'] == 'Nepal') ? 'selected' : ''?>>Nepal</option>
                </select>


                <!--- India states -->

                <label>Select State:</label>
                <select id="country-state" name="state" class="js-example-basic-single form-select">
                    <option value="">Select state</option>
                    <option value="Andaman and Nicobar Islands"
                        <?=($profile['state'] == 'Andaman and Nicobar Islands') ? 'selected' : ''?>>Andaman and Nicobar
                        Islands</option>
                    <option value="Andhra Pradesh" <?=($profile['state'] == 'Andhra Pradesh') ? 'selected' : ''?>>Andhra
                        Pradesh</option>
                    <option value="Arunachal Pradesh" <?=($profile['state'] == 'Arunachal Pradesh') ? 'selected' : ''?>>
                        Arunachal Pradesh</option>
                    <option value="Assam" <?=($profile['state'] == 'Assam') ? 'selected' : ''?>>Assam</option>
                    <option value="Bihar" <?=($profile['state'] == 'Bihar') ? 'selected' : ''?>>Bihar</option>
                    <option value="Chandigarh" <?=($profile['state'] == 'Chandigarh') ? 'selected' : ''?>>Chandigarh
                    </option>
                    <option value="Chhattisgarh" <?=($profile['state'] == 'Chhattisgarh') ? 'selected' : ''?>>
                        Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli"
                        <?=($profile['state'] == 'Jammu and Kashmir') ? 'selected' : ''?>>Dadra and Nagar Haveli
                    </option>
                    <option value="Daman and Diu" <?=($profile['state'] == 'Jammu and Kashmir') ? 'selected' : ''?>>
                        Daman and Diu</option>
                    <option value="Delhi" <?=($profile['state'] == 'Delhi') ? 'selected' : ''?>>Delhi</option>
                    <option value="Goa" <?=($profile['state'] == 'Goa') ? 'selected' : ''?>>Goa</option>
                    <option value="Gujarat" <?=($profile['state'] == 'Gujarat') ? 'selected' : ''?>>Gujarat</option>
                    <option value="Haryana" <?=($profile['state'] == 'Haryana') ? 'selected' : ''?>>Haryana</option>
                    <option value="Himachal Pradesh" <?=($profile['state'] == 'Himachal Pradesh') ? 'selected' : ''?>>
                        Himachal Pradesh</option>
                    <option value="Jammu and Kashmir" <?=($profile['state'] == 'Jammu and Kashmir') ? 'selected' : ''?>>
                        Jammu and Kashmir</option>
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



                <label>Select City:</label>
                <select id="city" name="city" class="js-example-basic-single form-select">
                    <option value="">Select City</option>
                    <option value="Achalpur" <?=($profile['city'] == 'Achalpur') ? 'selected' : ''?>>Achalpur</option>
                    <option value="Ahiri" <?=($profile['city'] == 'Ahiri') ? 'selected' : ''?>>Ahiri</option>
                    <option value="Ahmadnagar" <?=($profile['city'] == 'Ahmadnagar') ? 'selected' : ''?>>Ahmadnagar
                    </option>
                    <option value="Ahmadpur" <?=($profile['city'] == 'Ahmadpur') ? 'selected' : ''?>>Ahmadpur</option>
                    <option value="Airoli" <?=($profile['city'] == 'Airoli') ? 'selected' : ''?>>Airoli</option>
                </select>



                <label>User Email:</label>
                <input type="email" name="email" value="<?=$profile['email']?>" placeholder="enter email" class="box"
                    required readonly>




                <div class="raddddio123" name="raddddio123">
                    <h4>Bowling Orientation</h4>
                    <input type="radio" id="bowling_left" name="bowling_orientation" value="Left Hand"
                        <?=($profile['bowling_orientation'] == 'Left Hand') ? 'checked' : ''?>>
                    <label for="bowling_left">Left Hand</label>
                    <input type="radio" id="bowling_right" name="bowling_orientation" value="Right Hand"
                        <?=($profile['bowling_orientation'] == 'Right Hand') ? 'checked' : ''?>>
                    <label for="bowling_right">Right Hand</label><br>
                </div>

                <div class="raddddio" name="raddddio">
                    <h4>Batting Orientation</h4>
                    <input type="radio" id="batting_left" name="batting_orientation" value="Left Hand"
                        <?=($profile['batting_orientation'] == 'Left Hand') ? 'checked' : ''?>>
                    <label for="batting_left">Left Hand</label>
                    <input type="radio" id="batting_right" name="batting_orientation" value="Right Hand"
                        <?=($profile['batting_orientation'] == 'Right Hand') ? 'checked' : ''?>>
                    <label for="batting_right">Right Hand</label><br>
                </div>

                <label class="m-2">Cover Image</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                <label class="m-2">Images</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="photos[]" multiple>

                <input type="file" name="file" class="box" accept=".pdf, .docx">
                @if($profile['file'])
                <p>Current File: {{ $profile['file'] }}</p>
                <a href="{{ url('pdf/' . $profile['file']) }}" target="_blank">Download File</a>
                @else
                <p>No File Uploaded</p>
                @endif
                <input type="submit" name="submit" value="Update Now" class="btn"
                    style="background-color: blue; color:#fff">
            </form>


        </div>
        <div class="image-container">
            <!-- <label class="m-2">Cover Image</label>
                    <form action="/deletecover/{{ $profile->id }}" method="post">
                    <button class="btn justifybtn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                    <div class="image-box">
                    <img src="/covers/{{ $profile->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    </div>
                    <br>
                      -->

            <label class="m-2">Photos</label>
            @if (count($profile->photos)>0)
            @foreach ($profile->photos as $photo)
            <form action="/deleteimage/{{ $photo->id }}" method="post">
                <button class="btn justifybtn text-danger">X</button>
                @csrf
                @method('delete')
            </form>
            <div class="image-box">
                <img src="/images/{{ $photo->photo }}" class="img-responsive"
                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
            </div>
            @endforeach
            @endif
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="~/Scripts/jquery-3.0.0.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#DateOfBirth').change(function() {
                var now = new Date(); //Current Date
                var past = new Date($('#DateOfBirth').val()); //Date of Birth
                if (past > now) {
                    alert('Entered Date is Greater than Current Date');
                    return false;
                }
                var nowYear = now.getFullYear(); //Get current year
                var pastYear = past.getFullYear(); //Get Date of Birth year

                var age = nowYear - pastYear; //calculate the difference
                $('#Age').val(age);
            })
        })
        </script>

        <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
        </script>


        <script>
        function setDropdownValue(role, value) {
            // Set the selected role in the hidden input field
            document.getElementById('selectedRole').value = role;

            // Set the value in another hidden input field (optional)
            document.getElementById('selectedRoleValue').value = value;
        }
        </script>

        <script>
        function setDropdownValue(value) {
            document.getElementById("role").value = value;
        }
        </script>

        <script>
        function setDropdownValue(value) {
            document.querySelector('.btn.dropdown-toggle').textContent = value;
            document.querySelector('.btn.dropdown-toggle').value = value; // Optionally set the value attribute
        }
        </script>

        <script>
        // Set the initial value of the dropdown
        document.querySelector('#selectedRole').textContent = '<?=($profile['role'] ?? 'Role')?>';

        function setDropdownValue(value) {
            document.querySelector('#selectedRole').textContent = value;
            document.querySelector('#role').value = value;
        }
        </script>


        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.js"></script>
        <script>
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
            $(".js-example-basic-multiple").select2();
            $(".js-example-basic-hide-search").select2({
                minimumResultsForSearch: Infinity
            });
        });
        </script>
        @endsection