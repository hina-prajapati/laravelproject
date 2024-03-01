@extends('FrontUser')
@extends('profile.layout')

@section('admin')

<style>
    /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.profile-container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

/* .profile-image-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    border-radius: 50%;
    margin-bottom: 20px;
} */


.profile-image {
    /* max-width: 100%;
    height: 100%;
    object-fit: contain;
    position: relative; */
    border-radius: 100%;
}

.profile-form-container {
    width: 100%;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

.profile-image-label {
    cursor: pointer;
    color: #3490dc;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.btn-primary {
    background-color: #3490dc;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #258cd1;
}

.alert {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border-radius: 5px;
    margin-bottom: 20px;
}

.text-danger {
    color: #f00;
}

/* .raddddio {
    float: inline-start;
    margin-left: 115px;
} */

.raddddio123 {
    float: inline-start;
    width: 60px;
}


.form-container form .box{
   width: 100%;
   border-radius: 5px;
   padding:12px 14px;
   font-size: 12px;
   color:var(--black);
   margin:10px 0;
   background-color: var(--light-bg);
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

/* .caret {
    display: none;
} */

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
    padding: 28px;
    font-size: 12px;
}
.dropdown-menu {
    border-radius: 4px;
    padding: 22px 45px;
    animation-name: dropdown-animate;
    animation-duration: 0.2s;
    animation-fill-mode: both;
    border: 0;
    box-shadow: 0 5px 30px 0 rgba(82, 63, 105, 0.2);
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
.btn-warning {
    /* background-color: #3490dc; */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-warning:hover{
    color: #fff;
}



</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>


    <div class="profile-container">
   

        <div class="profile-form-container">
            <h2>Edit Profile</h2>
            
          
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <?php
              use Illuminate\Support\Facades\Auth;
              use App\Models\Profile;
              $userId = Auth::id();
              $profile = Profile::where('user_id', $userId)->first();
              ?>

            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                <div class="profile-image-container">
            @if($user->profile_image)
                <img src="{{ asset('uploads/' . $user->profile_image) }}" alt="Profile Image" class="profile-image">
            @else
                <img src="{{ asset('images/profile.png') }}" alt="Default Profile Image" class="profile-image">
            @endif
               </div>

               
            <div class="form-group">
                <label>Change Profile Image</label><br><br>
                <input type="file" class="form-control" class="form-control" id="profile_image" name="profile_image">
                @error('profile_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
                
              <div class="col-md-6">
              <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" >
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
                
               <div class="col-md-6">
               <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" readonly id="email" name="email" value="{{ old('email', $user->email) }}" >
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-md-6">
               <div class="form-group">
                <label>About:</label>
             <textarea name="about" class="form-control"  placeholder="Tell us about yourself" class="box">{{$profile['about']}}</textarea>
             @error('about')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

                <!-- <div class="form-group">
                    <label for="password">Change Your Password (Type here new Password )</label>
                    <input type="password" class="form-control"  id="password"  name="password">
                </div>

                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                </div> -->

                <div class="col-md-6">
                <label for="phone">Phone</label>
                    <input type="text" class="form-control box" id="phone" name="phone" value="{{ old( 'phone', $user->phone ) }}" >
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

                
                <div class="col-md-6">
                <label>Date of Birth:</label>
                <input type="date" name="datebirth" class="form-control" id="DateOfBirth" value="{{ $profile ? $profile->datebirth : '' }}" placeholder="enter datebirth" class="box" >
                @error('datebirth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                  @enderror
                </div>

                 <div class="col-md-6">
                 <label>User Age:</label>
                <input type="number" name="age" id="Age" class="form-control" value="{{ $profile ? $profile->age : '' }}" placeholder="calculate extact age" class="box" ><br><br>
                @error('age')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
                 </div>


            <div class="col-md-6 mb-4">
                <label>Role (Any one)</label>
                <select class="form-control form-select" name="select1" id="select1">
                <option value="Batsman" {{ $profile->select1 === 'Batsman' ? 'selected' : '' }}>Batsman</option>
                <option value="Bowler" {{ $profile->select1 === 'Bowler' ? 'selected' : '' }}>Bowler</option>
                <option value="All-Rounder" {{ $profile->select1 === 'All-Rounder' ? 'selected' : '' }}>All-Rounder</option>
                <option value="Wicket Keeper" {{ $profile->select1 === 'Wicket Keeper' ? 'selected' : '' }}>Wicket Keeper</option>
           </select>

            </div>
            <div class="col-md-6 mb-4">
                <label>Specialist (Based on Role selection)</label>
            <select class="form-control form-select" name="select2" id="select2">
                <option value="Opener" {{ $profile->select2 === 'Opener' ? 'selected' : '' }}>Opener</option>
                <option value="Middle Order" {{ $profile->select2 === 'Middle Order' ? 'selected' : '' }}>Middle Order</option>
                <option value="Tail" {{ $profile->select2 === 'Tail' ? 'selected' : '' }}>Tail</option>
                <option value="Fast" {{ $profile->select2 === 'Fast' ? 'selected' : '' }}>Fast</option>
                <option value="Medium Fast" {{ $profile->select2 === 'Medium Fast' ? 'selected' : '' }}>Medium Fast</option>
                <option value="Slow" {{ $profile->select2 === 'Slow' ? 'selected' : '' }}>Slow</option>
                <option value="Off Spin" {{ $profile->select2 === 'Off Spin' ? 'selected' : '' }}>Off Spin</option>
                <option value="Left-arm Orthodox Spin" {{ $profile->select2 === 'Left-arm Orthodox Spin' ? 'selected' : '' }}>Left-arm Orthodox Spin</option>
                <option value="Leg Spin" {{ $profile->select2 === 'Leg Spin' ? 'selected' : '' }}>Leg Spin</option>
                <option value="Left-arm Unorthodox Spin" {{ $profile->select2 === 'Left-arm Unorthodox Spin' ? 'selected' : '' }}>Left-arm Unorthodox Spin</option>
                <option value="Finger Spin" {{ $profile->select2 === 'Finger Spin' ? 'selected' : '' }}>Finger Spin</option>
                <option value="Wrist Spin" {{ $profile->select2 === 'Wrist Spin' ? 'selected' : '' }}>Wrist Spin</option>
                <option value="Batting All-rounder" {{ $profile->select2 === 'Batting All-rounder' ? 'selected' : '' }}>Batting All-rounder</option>
                <option value="Bowling All-rounder" {{ $profile->select2 === 'Bowling All-rounder' ? 'selected' : '' }}>Bowling All-rounder</option>
            </select>
            </div>
        <br>

        <div class="col-md-6 mb-4">
        <label>Select Country:</label>
        <select id="country" name="country" class="form-select form-control">
        <option value="">Select country</option>
        <option value="India" {{ ($profile && $profile->country == 'India') ? 'selected' : '' }}>India</option>
        <!-- <option value="Asia" {{ ($profile && $profile->country == 'Asia') ? 'selected' : '' }}>Asia</option>
        <option value="Nepal" {{ ($profile && $profile->country == 'Nepal') ? 'selected' : '' }}>Nepal</option> -->
        </select>
        </div>

       
     
        <div class="form-group col-md-6 mb-4">
        <label for="inputState">State</label>
        <select class="form-select form-control" name="state" id="inputState">
        <option value="">Select State</option>
        <option value="Andhra Pradesh" {{ ($profile && $profile->state == 'Andhra Pradesh') ? 'selected' : '' }}>Andra Pradesh</option>
        <option value="Arunachal Pradesh" {{ ($profile && $profile->state == 'Arunachal Pradesh') ? 'selected' : '' }}>Arunachal Pradesh</option>
        <option value="Assam" {{ ($profile && $profile->state == 'Assam') ? 'selected' : '' }}>Assam</option>
        <option value="Bihar" {{ ($profile && $profile->state == 'Bihar') ? 'selected' : '' }}>Bihar</option>
        <option value="Chhattisgarh" {{ ($profile && $profile->state == 'Chhattisgarh') ? 'selected' : '' }}>Chhattisgarh</option>
        <option value="Goa" {{ ($profile && $profile->state == 'Goa') ? 'selected' : '' }}>Goa</option>
        <option value="Gujarat" {{ ($profile && $profile->state == 'Gujarat') ? 'selected' : '' }}>Gujarat</option>
        <option value="Haryana" {{ ($profile && $profile->state == 'Haryana') ? 'selected' : '' }}>Haryana</option>
        <option value="Himachal Pradesh" {{ ($profile && $profile->state == 'Himachal Pradesh') ? 'selected' : '' }}>Himachal Pradesh</option>
        <option value="Jammu and Kashmir" {{ ($profile && $profile->state == 'Jammu and Kashmir') ? 'selected' : '' }}>Jammu and Kashmir</option>
        <option value="Jharkhand" {{ ($profile && $profile->state == 'Jharkhand') ? 'selected' : '' }}>Jharkhand</option>
        <option value="Karnataka" {{ ($profile && $profile->state == 'Karnataka') ? 'selected' : '' }}>Karnataka</option>
        <option value="Kerala" {{ ($profile && $profile->state == 'Kerala') ? 'selected' : '' }}>Kerala</option>
        <option value="Madya Pradesh" {{ ($profile && $profile->state == 'Madya Pradesh') ? 'selected' : '' }}>Madya Pradesh</option>
        <option value="Maharashtra"{{ ($profile && $profile->state == 'Maharashtra') ? 'selected' : '' }}>Maharashtra</option>
        <option value="Manipur"{{ ($profile && $profile->state == 'Manipur') ? 'selected' : '' }}>Manipur</option>
        <option value="Meghalaya"{{ ($profile && $profile->state == 'Meghalaya') ? 'selected' : '' }}>Meghalaya</option>
        <option value="Mizoram"{{ ($profile && $profile->state == 'Mizoram') ? 'selected' : '' }}>Mizoram</option>
        <option value="Nagaland"{{ ($profile && $profile->state == 'Nagaland') ? 'selected' : '' }}>Nagaland</option>
        <option value="Orissa"{{ ($profile && $profile->state == 'Orissa') ? 'selected' : '' }}>Orissa</option>
        <option value="Punjab"{{ ($profile && $profile->state == 'Punjab') ? 'selected' : '' }}>Punjab</option>
        <option value="Rajasthan"{{ ($profile && $profile->state == 'Rajasthan') ? 'selected' : '' }}>Rajasthan</option>
        <option value="Sikkim" {{ ($profile && $profile->state == 'Sikkim') ? 'selected' : '' }}>Sikkim</option>
        <option value="Tamil Nadu" {{ ($profile && $profile->state == 'Tamil Nadu') ? 'selected' : '' }}>Tamil Nadu</option>
        <option value="Telangana"{{ ($profile && $profile->state == 'Andaman and Nicobar Islands') ? 'selected' : '' }}>Telangana</option>
        <option value="Tripura"{{ ($profile && $profile->state == 'Telangana') ? 'selected' : '' }}>Tripura</option>
        <option value="Uttaranchal"{{ ($profile && $profile->state == 'Uttaranchal') ? 'selected' : '' }}>Uttaranchal</option>
        <option value="Uttar Pradesh" {{ ($profile && $profile->state == 'Uttar Pradesh') ? 'selected' : '' }}>Uttar Pradesh</option>
        <option value="West Bengal"{{ ($profile && $profile->state == 'West Bengal') ? 'selected' : '' }}>West Bengal</option>
        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
        <option value="Andaman and Nicobar Islands" {{ ($profile && $profile->state == 'Andaman and Nicobar Islands') ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
        <option value="Chandigarh" {{ ($profile && $profile->state == 'Andaman and Nicobar Islands') ? 'selected' : '' }}>Chandigarh</option>
        <option value="Dadar and Nagar Haveli" {{ ($profile && $profile->state == 'Dadar and Nagar Haveli') ? 'selected' : '' }}>Dadar and Nagar Haveli</option>
        <option value="Daman and Diu" {{ ($profile && $profile->state == 'Daman and Diu') ? 'selected' : '' }}>Daman and Diu</option>
        <option value="Delhi" {{ ($profile && $profile->state == 'Delhi') ? 'selected' : '' }}>Delhi</option>
        <option value="Lakshadeep" {{ ($profile && $profile->state == 'Lakshadeep') ? 'selected' : '' }}>Lakshadeep</option>
        <option value="Pondicherry" {{ ($profile && $profile->state == 'Pondicherry') ? 'selected' : '' }}>Pondicherry</option>
        </select>
        </div>

        <div class="form-group col-md-6">
            <label for="inputDistrict">District</label>
            <select class="form-control" name="city" id="inputDistrict">
                <option value="">-- select one -- </option>
            </select>
        </div>


            <div class="col-md-6">
            <label>Upload Your Multiple Images </label>
            <div class="form-group">
            <input type="file" id="input-file-now-custom-3" class="form-control " name="photos[]" multiple>
            </div>
            </div>

            <div class="col-md-6 mt-4">
            <div class="raddddio" name="raddddio123">
            <h4>Bowling Orientation</h4>
            <input type="radio" id="bowling_left" name="bowling_orientation" value="Left Hand" {{ ($profile && $profile->bowling_orientation == 'Left Hand') ? 'checked' : '' }}>
            <label for="bowling_left">Left Hand</label>
            <input type="radio" id="bowling_right" name="bowling_orientation" value="Right Hand" {{ ($profile && $profile->bowling_orientation == 'Right Hand') ? 'checked' : '' }}>
            <label for="bowling_right">Right Hand</label><br>
            </div>
            </div>

            <div class="col-md-6 mt-4">
            <div class="raddddio" name="raddddio">
            <h4>Batting Orientation</h4>
            <input type="radio" id="batting_left" name="batting_orientation" value="Left Hand" {{ ($profile && $profile->batting_orientation == 'Left Hand') ? 'checked' : '' }}>
            <label for="batting_left">Left Hand</label>
            <input type="radio" id="batting_right" name="batting_orientation" value="Right Hand" {{ ($profile && $profile->batting_orientation == 'Right Hand') ? 'checked' : '' }}>
            <label for="batting_right">Right Hand</label><br><br><br>
            </div>
            </div>


           <div class="col-md-6 mt-2">
           <div class="form-group">
           <label class="m-2">Upload Scored(PDF or DOCX)</label>
           <input type="file" class="form-control" name="file" class="box" accept=".pdf, .docx">
            @if($profile && $profile->file)
                <p style="margin-top: 20px;">Current File: {{ $profile->file }}</p>
                <a href="{{ url('pdf/' . $profile->file) }}" target="_blank" style="
                  background: blue;
                  width: 150px;
                  height: 50px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 2px;
                  color: #fff;
                  margin-top: 20px;
              ">Download File</a>
            @else
            @endif
            </div>
           </div>
       </div>
    <br><br>  

      <div class="display-flex mb-4">
    <button type="submit" class="btn btn-primary">Update Profile</button>

    <a href="{{ url('/user/dashboard/profile/index') }}" class="btn btn-warning" style="float: start;">Back</a>
    </div>
</form>

<div class="image-container">
    <label class="m-2">Photos</label>
    @if ($profile && count($profile->photos) > 0)
        @foreach ($profile->photos as $photo)
            <form action="/deleteimage/{{ $photo->id }}" method="post">
                <button class="btn justifybtn text-danger">X</button>
                @csrf
                @method('delete')
            </form>
            <div class="image-box">
                <img src="/images/{{ $photo->photo }}" class="img-responsive" style="max-height: 100px; max-width: 128px;" alt="" srcset="">
            </div>
        @endforeach
    @endif
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="~/Scripts/jquery-3.0.0.min.js"></script> -->

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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script>
var $select1 = $('#select1'),
    $select2 = $('#select2'),
    $options = $select2.find('option');

$select1.on('change', function() {
    var selectedValue = this.value;
    var filteredOptions = $options.filter('[data-role="' + selectedValue + '"]');
    // $select2.html( $options.filter( '[value="' + this.value + '"]' ) );

    // $select2.empty().append(filteredOptions.clone());
}).trigger('change');
</script> -->


<script>
var select1 = document.getElementById('select1');
var select2 = document.getElementById('select2');

// Define the options for the Specialist dropdown
var specialistOptions = {
    Batsman: ['Opener', 'Middle Order', 'Tail'],
    Bowler: ['Fast', 'Medium Fast', 'Slow', 'Off Spin', 'Left-Arm Orthodox Spin', 'Leg Spin', 'Left-Arm UnOrthodox Spin', 'Finger Spin', 'Wrist Spin'],
    'All-Rounder': ['Batting All Rounder', 'Bowling All Rounder'],
    'Wicket Keeper': ['Wicket Keeper']
};

// Function to update the Specialist dropdown
function updateSpecialistDropdown() {
    var selectedRole = select1.value;
    var specialistOptionsForRole = specialistOptions[selectedRole] || [];

    // Clear the current options
    select2.innerHTML = '';

    // Add new options based on the selected role
    specialistOptionsForRole.forEach(function(optionText) {
        var option = document.createElement('option');
        option.value = optionText;
        option.textContent = optionText;
        select2.appendChild(option);
    });
}

// Initial update based on the default selection
updateSpecialistDropdown();

// Event listener to update the Specialist dropdown on Role change
select1.addEventListener('change', updateSpecialistDropdown);
</script>


<script>
    function setDropdownValue(value) {
        document.getElementById("selectedRole").textContent = value;
        document.getElementById("role").value = value;
    }

var AndraPradesh = ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
var ArunachalPradesh = ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang","Itanagar"];
var Assam = ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup Metropolitan","Kamrup (Rural)","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Dima Hasao","Sivasagar","Sonitpur","South Salmara Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];
var Bihar = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
var Chhattisgarh = ["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
var Goa = ["North Goa","South Goa"];
var Gujarat = ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
var Haryana = ["Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
var HimachalPradesh = ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
var JammuKashmir = ["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
var Jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
"Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
var Maharashtra = ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
var Manipur = ["Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
var Meghalaya = ["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
var Mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
var Nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
var Odisha = ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
var Punjab = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
var Rajasthan = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
var Sikkim = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
var TamilNadu = ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
var Telangana = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar","Jogulamba","Kamareddy","Karimnagar","Khammam","Komaram Bheem","Mahabubabad","Mahbubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];
var Tripura = ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
var UttarPradesh = ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
var Uttarakhand  = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
var WestBengal = ["Alipurduar","Bankura","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","Paschim Bardhaman","Paschim Medinipur","Purba Bardhaman","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
var AndamanNicobar = ["Nicobar","North Middle Andaman","South Andaman"];
var Chandigarh = ["Chandigarh"];
var DadraHaveli = ["Dadra Nagar Haveli"];
var DamanDiu = ["Daman","Diu"];
var Delhi = ["Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"];
var Lakshadweep = ["Lakshadweep"];
var Puducherry = ["Karaikal","Mahe","Puducherry","Yanam"];


$("#inputState").change(function(){
  var StateSelected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (StateSelected) {
    case "Andra Pradesh":
        optionsList = AndraPradesh;
        break;
    case "Arunachal Pradesh":
        optionsList = ArunachalPradesh;
        break;
    case "Assam":
        optionsList = Assam;
        break;
    case "Bihar":
        optionsList = Bihar;
        break;
    case "Chhattisgarh":
        optionsList = Chhattisgarh;
        break;
    case "Goa":
        optionsList = Goa;
        break;
    case  "Gujarat":
        optionsList = Gujarat;
        break;
    case "Haryana":
        optionsList = Haryana;
        break;
    case "Himachal Pradesh":
        optionsList = HimachalPradesh;
        break;
    case "Jammu and Kashmir":
        optionsList = JammuKashmir;
        break;
    case "Jharkhand":
        optionsList = Jharkhand;
        break;
    case  "Karnataka":
        optionsList = Karnataka;
        break;
    case "Kerala":
        optionsList = Kerala;
        break;
    case  "Madya Pradesh":
        optionsList = MadhyaPradesh;
        break;
    case "Maharashtra":
        optionsList = Maharashtra;
        break;
    case  "Manipur":
        optionsList = Manipur;
        break;
    case "Meghalaya":
        optionsList = Meghalaya ;
        break;
    case  "Mizoram":
        optionsList = Mizoram;
        break;
    case "Nagaland":
        optionsList = Nagaland;
        break;
    case  "Orissa":
        optionsList = Orissa;
        break;
    case "Punjab":
        optionsList = Punjab;
        break;
    case  "Rajasthan":
        optionsList = Rajasthan;
        break;
    case "Sikkim":
        optionsList = Sikkim;
        break;
    case  "Tamil Nadu":
        optionsList = TamilNadu;
        break;
    case  "Telangana":
        optionsList = Telangana;
        break;
    case "Tripura":
        optionsList = Tripura ;
        break;
    case  "Uttaranchal":
        optionsList = Uttaranchal;
        break;
    case  "Uttar Pradesh":
        optionsList = UttarPradesh;
        break;
    case "West Bengal":
        optionsList = WestBengal;
        break;
    case  "Andaman and Nicobar Islands":
        optionsList = AndamanNicobar;
        break;
    case "Chandigarh":
        optionsList = Chandigarh;
        break;
    case  "Dadar and Nagar Haveli":
        optionsList = DadraHaveli;
        break;
    case "Daman and Diu":
        optionsList = DamanDiu;
        break;
    case  "Delhi":
        optionsList = Delhi;
        break;
    case "Lakshadeep":
        optionsList = Lakshadeep ;
        break;
    case  "Pondicherry":
        optionsList = Pondicherry;
        break;
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#inputDistrict").html(htmlString);

});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>


@endsection
