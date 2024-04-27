@extends('layout2')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<style>
    img.profile-image {
        width: 100px;
    }

    /* .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 42px;
    user-select: none;
    -webkit-user-select: none;
    background: #f7f7f7 !important;
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 2px solid #9d9595;
    border-radius: 4px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 36px;
} */

    img.profile-image {
        width: 200px;
        border-radius: 2px !important;
        border: 2px solid #9d9595;
    }

    .contact-use-div .form-control {
        background-color: #f7f7f7;
        border: none !important;
        height: 45px;
        font-size: 14px;
        border-radius: 2px;
        border: 2px solid #9d9595 !important;
    }

    label {
        font-weight: bold;
    }

    .image-box img {
        width: 200px;
        height: 150px;
    }

    .raddddio123 {
        float: inline-start;
        width: 60px;
    }

    img#profile-image {
        display: block !important;

    }

    img.img-responsive {
        display: block !important;

    }

    .fancybox-container * img {
        box-sizing: border-box;
        width: 1000px;
    }

    #responsive-image {
        width: 200px;
        height: 150px;
    }

    .profile-container {
        /* max-width: 1000px; */
        margin: 0 auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        display: flex;
        /* flex-direction: column; */
        align-items: center;
        padding: 20px;

    }

    .contact-use-div textarea.form-control {
        height: 46px !important;
        resize: none;
    }

    @media (max-width: 1000px) {
        .profile-container {
            flex-direction: column;
            height: auto !important;
        }


        img.profile-image {
            width: 100px;
            display: flex;
            margin: auto;
        }

    }

    .contact-use-div .comon-btn {
        /* background: #34a853; */
        font-weight: 600;
        font-family: "Kanit", sans-serif;
        text-transform: uppercase;
        font-style: normal;
        height: 52px;
        line-height: 38px;
        color: #fff;
        border-radius: 0;
        width: 150px;
        box-shadow: #a1a1a1 12px 12px 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact-use-div h2 {
        font-weight: 600;
        font-family: "Kanit", sans-serif;
        text-transform: uppercase;
        font-style: normal;
        color: #212529;
        text-decoration: underline;
        /* text-align: center; */
        color: green;
    }

    .raddddio h4 {
        font-size: 14px;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .right-fgo li a {
        color: #fff !important;
        font-size: 15px;
        font-family: "Roboto", sans-serif;
    }

    span.select2.select2-container.select2-container--default {
        width: 100% !important;
    }
</style>
<section class="banner-part sub-main-banner float-start w-100">

    <div class="baner-imghi">
        <img src="/assets2/images/sub-banner01.jpg" alt="sub-banner" />
    </div>

    <div class="sub-banner">
        <div class="container">
            <h1 class="text-center"> Edit Profile</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

<section class="float-start w-100 body-part pt-0">

    <div class="contact-page d-inline-block w-100">
        <div class="container">

            <div class="col">
                <div class="contact-use-div">
                    <h2> Edit Profile </h2>
                    <!-- <h2 class="mt-5"> Get In Touch </h2> -->


                    <?php

                    use App\Models\User;
                    use Illuminate\Support\Facades\Auth; // Make sure User model is imported correctly

                    $userId = Auth::id();
                    $user = User::find($userId); // Use find() method to retrieve user by primary key

                    if ($user && $user->profile_image) {
                        echo '<img src="' . asset('uploads/' . $user->profile_image) . '" alt="Profile Image" data-fancybox="profile-image" class="profile-image  mt-4" style="display: block !important;" id="profile-image">';
                    } else {
                        echo '<img src="' . asset('images/profile.png') . '" alt="Default Profile Image"  data-fancybox="profile-image" class="profile-image mt-4" id="profile-image">';
                    }
                    ?>

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mt-4">

                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label>Edit Photo</label><br>
                                    <input type="file" class="form-control" class="form-control" id="profile_image" name="profile_image">
                                    @error('profile_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                                </div>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" readonly id="email" name="email" value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <!-- <div class="col-lg-3 mt-4">
                <div class="from-group">
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                </div>
            </div> -->
                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>About:</label>
                                    <textarea name="about" class="form-control" placeholder="Tell us about yourself" class="box">{{$profile['about']}}</textarea>
                                </div>
                            </div>
                            @error('about')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control box" id="phone" name="phone" value="{{ old( 'phone', $user->phone ) }}">
                                </div>
                            </div>
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Date of Birth:</label>
                                    <input type="date" name="datebirth" class="form-control" id="DateOfBirth" value="{{ $profile ? $profile->datebirth : '' }}" placeholder="enter datebirth" class="box">
                                </div>
                            </div>
                            @error('datebirth')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>User Age:</label>
                                    <input type="number" name="age" id="Age" class="form-control" readonly value="{{ $profile ? $profile->age : '' }}" placeholder="calculate extact age" class="box"><br><br>
                                </div>
                            </div>
                            @error('age')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Role (Any one)</label>
                                    <select class="form-control form-select" name="select1" id="select1">
                                        <option value="">Select role</option>
                                        <option value="Batsman" {{ $profile->select1 === 'Batsman' ? 'selected' : '' }}>
                                            Batsman</option>
                                        <option value="Bowler" {{ $profile->select1 === 'Bowler' ? 'selected' : '' }}>
                                            Bowler</option>
                                        <option value="All-Rounder" {{ $profile->select1 === 'All-Rounder' ? 'selected' : '' }}>All-Rounder
                                        </option>
                                        <option value="Wicket Keeper" {{ $profile->select1 === 'Wicket Keeper' ? 'selected' : '' }}>Wicket Keeper
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="from-group">
                                    <label>Specialist (Based on Role selection)</label>
                                    <select class="form-control form-select" name="select2" id="select2">
                                        <option value="">Select Specialist</option>
                                        <option value="Opener" {{ $profile->select2 === 'Opener' ? 'selected' : '' }}>
                                            Opener</option>
                                        <option value="Middle Order" {{ $profile->select2 === 'Middle Order' ? 'selected' : '' }}>Middle Order
                                        </option>
                                        <option value="Tail" {{ $profile->select2 === 'Tail' ? 'selected' : '' }}>Tail
                                        </option>
                                        <option value="Fast" {{ $profile->select2 === 'Fast' ? 'selected' : '' }}>Fast
                                        </option>
                                        <option value="Medium Fast" {{ $profile->select2 === 'Medium Fast' ? 'selected' : '' }}>Medium Fast
                                        </option>
                                        <option value="Slow" {{ $profile->select2 === 'Slow' ? 'selected' : '' }}>Slow
                                        </option>
                                        <option value="Off Spin" {{ $profile->select2 === 'Off Spin' ? 'selected' : '' }}>Off Spin</option>
                                        <option value="Left-arm Orthodox Spin" {{ $profile->select2 === 'Left-arm Orthodox Spin' ? 'selected' : '' }}>
                                            Left-arm Orthodox Spin</option>
                                        <option value="Leg Spin" {{ $profile->select2 === 'Leg Spin' ? 'selected' : '' }}>Leg Spin</option>
                                        <option value="Left-arm Unorthodox Spin" {{ $profile->select2 === 'Left-arm Unorthodox Spin' ? 'selected' : '' }}>
                                            Left-arm Unorthodox Spin</option>
                                        <option value="Finger Spin" {{ $profile->select2 === 'Finger Spin' ? 'selected' : '' }}>Finger Spin
                                        </option>
                                        <option value="Wrist Spin" {{ $profile->select2 === 'Wrist Spin' ? 'selected' : '' }}>Wrist Spin
                                        </option>
                                        <option value="Batting All-rounder" {{ $profile->select2 === 'Batting All-rounder' ? 'selected' : '' }}>Batting
                                            All-rounder</option>
                                        <option value="Bowling All-rounder" {{ $profile->select2 === 'Bowling All-rounder' ? 'selected' : '' }}>Bowling
                                            All-rounder</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="col-md-3">
            <div class="from-group">
            <label>Select Country:</label>
            <input type="text" name="country" id="country" class="form-control" readonly value="{{ $profile ? $profile->country : 'India' }}" placeholder="Country" class="box" ><br><br>
            <input type="text" name="country" id="country" class="form-control" readonly value="{{ $profile ? $profile->country : '' }}" placeholder="Country" class="box" ><br><br>
            <select id="country" name="country" class="form-select form-control">
            <option value="">Select country</option>
            <option value="India" {{ ($profile && $profile->country == 'India') ? 'selected' : '' }}>India</option>
            </select>
            </div>
            </div> -->

                            <div class="col-md-3">
                                <div class="from-group">
                                    <label>Country</label>
                                    <div class="custom-select form-control">
                                        <select class="select2 form-control-lg form-control" name="country" id="country">
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                            <option {{ $profile->country == $country->id ? 'selected' : '' }} value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="from-group">
                                    <label>State</label>
                                    <div class="custom-select form-control">
                                        <select name="state" id="state" class="select2 form-control-lg form-control">
                                            <option value="">Select State</option>
                                            @foreach ($states as $state)
                                            <option {{ $profile->state == $state->id ? 'selected' : '' }} value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>City</label>
                                    <div class="custom-select form-control">
                                        <select name="city" id="city" class="select2 form-control-lg form-control">
                                            <option value="">Select City</option>
                                            @foreach ($cities as $city)
                                            <option {{ $profile->city == $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <!-- <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Upload Your Multiple Images </label>
                <input type="file" id="input-file-now-custom-3" class="form-control " name="photos[]" multiple>                </div>
            </div> -->

                            <div class="col-md-3">
                                <div class="from-group">
                                    <div class="raddddio" name="raddddio123">
                                        <label>Bowling Orientation</label><br><br>
                                        <input type="radio" id="bowling_left" name="bowling_orientation" value="Left Hand" {{ ($profile && $profile->bowling_orientation == 'Left Hand') ? 'checked' : '' }}>
                                        <label for="bowling_left">Left Hand</label>
                                        <input type="radio" id="bowling_right" name="bowling_orientation" value="Right Hand" {{ ($profile && $profile->bowling_orientation == 'Right Hand') ? 'checked' : '' }}>
                                        <label for="bowling_right">Right Hand</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="from-group">
                                    <div class="raddddio" name="raddddio">
                                        <label>Batting Orientation</label><br><br>
                                        <input type="radio" id="batting_left" name="batting_orientation" value="Left Hand" {{ ($profile && $profile->batting_orientation == 'Left Hand') ? 'checked' : '' }}>
                                        <label for="batting_left">Left Hand</label>
                                        <input type="radio" id="batting_right" name="batting_orientation" value="Right Hand" {{ ($profile && $profile->batting_orientation == 'Right Hand') ? 'checked' : '' }}>
                                        <label for="batting_right">Right Hand</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex mt-4">
                                <input type="submit" name="submit" class="btn comon-btn" value="Update" />
                                <a class="btn comon-btn ms-3" style="background-color: #0d6efd" href="{{ route('main/profile-page') }}">
                                    <span style="color: #fff; background-color: #0d6efd">Back</span>
                                </a>
                            </div>
                        </div>

                    </form>
                    <!-- <div class="profile-container d-flex mt-5">
    <label class="m-2">User's Multiple Images:</label>
    @if ($profile && count($profile->photos) > 0)
        @foreach ($profile->photos as $photo)
            <form action="/deleteimage/{{ $photo->id }}" method="post">
                <button class="btn justifybtn text-danger">X</button>
                @csrf
                @method('delete')
            </form>
            <div class="image-box">
                <img src="/images/{{ $photo->photo }}" data-fancybox="gallery-img fancybox" class="img-responsive" alt="" srcset="">
            </div>
        @endforeach
    @endif
</div> -->

                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        $(".gallery-img").on('click', function() {
            $(this).width(1000).height('auto'); // Enlarge the clicked image
        });

        $(".gallery-img").fancybox({
            animationEffect: 'fade',
            thumbs: {
                autoStart: true,
                axis: 'x'
            },
            buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
            overlayShow: false,
            scrolling: 'no', // Prevent scrolling to the top after closing
            hideOnContentClick: false, // Keep the content (image) visible after closing
            arrows: true, // Enable navigation arrows
            touch: false, // Disable touch events to prevent automatic hiding
            afterClose: function(instance, slide) {
                $(".gallery-img").css({
                    width: '200px', // Reset the width of all images
                    height: '150px' // Reset the height of all images
                });
            }
        });
    });
</script>



<script>
    $(function() {
        $('#profile-image').on('click', function() {
            $(this).width(400).height('auto'); // Enlarge the image when clicked
        });

        $("[data-fancybox='profile-image']").fancybox({
            animationEffect: 'fade',
            thumbs: {
                autoStart: true,
                axis: 'x'
            },
            overlayShow: false,
            scrolling: 'no', // Prevent scrolling to the top after closing
            hideOnContentClick: false, // Keep the content (image) visible after closing
            touch: false, // Disable touch events to prevent automatic hiding
            afterClose: function() {
                $('#profile-image').width('100px'); // Reset the image width to auto
            }
        });
    });
</script>

<script>
    var select1 = document.getElementById('select1');
    var select2 = document.getElementById('select2');

    // Define the options for the Specialist dropdown
    var specialistOptions = {
        Batsman: ['Opener', 'Middle Order', 'Tail'],
        Bowler: ['Fast', 'Medium Fast', 'Slow', 'Off Spin', 'Left-Arm Orthodox Spin', 'Leg Spin',
            'Left-Arm UnOrthodox Spin', 'Finger Spin', 'Wrist Spin'
        ],
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(document).ready(function() {
        // Country change event
        $("#country").change(function() {
            // Alert to verify if the event is triggered
            // alert("Country selection changed");

            // Get the selected country ID
            var country_id = $(this).val();

            // If country_id is empty, set it to 0
            if (country_id == "") {
                country_id = 0;
            }

            // AJAX request to fetch states based on the selected country
            $.ajax({
                url: '/fetch-states/' + country_id, // Adjust the URL as needed
                type: 'GET', // Use GET method for fetching data
                dataType: 'json',
                success: function(response) {
                    // Remove existing state options except the first one
                    $('#state').find('option:not(:first)').remove();

                    // Remove existing city options
                    $('#city').find('option:not(:first)').remove();

                    // Append new state options based on the response
                    if (response && response.states && response.states.length > 0) {
                        $.each(response.states, function(key, value) {
                            $("#state").append("<option value='" + value.id + "'>" +
                                value.name + "</option>");
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error(xhr.responseText);
                    // alert('An error occurred while fetching states. Please try again later.');
                }
            });
        });

        // State change event
        $("#state").change(function() {
            // Get the selected state ID
            var state_id = $(this).val();

            // If state_id is empty, set it to 0
            if (state_id == "") {
                state_id = 0;
            }

            // AJAX request to fetch cities based on the selected state
            $.ajax({
                url: '/fetch-cities/' + state_id, // Adjust the URL as needed
                type: 'GET', // Use GET method for fetching data
                dataType: 'json',
                success: function(response) {
                    // Remove existing city options except the first one
                    $('#city').find('option:not(:first)').remove();

                    // Append new city options based on the response
                    if (response && response.cities && response.cities.length > 0) {
                        $.each(response.cities, function(key, value) {
                            $("#city").append("<option value='" + value.id + "'>" +
                                value.name + "</option>");
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors if any
                    console.error(xhr.responseText);
                }
            });
        });
    });


    //    $("#frm").submit(function(event){
    //         event.preventDefault();
    //         $.ajax({
    //             url: '{{ url("/save") }}',
    //             type: 'post',
    //             data: $("#frm").serializeArray(),
    //             dataType: 'json',
    //             success: function(response) {
    //                 if(response['status'] == 1) {
    //                     window.location.href="{{ url('list') }}";
    //                 } else {
    //                     if (response['errors']['name']) {
    //                         $("#name").addClass('is-invalid');
    //                         $("#name-error").html(response['errors']['name']);
    //                     } else {
    //                         $("#name").removeClass('is-invalid');
    //                         $("#name-error").html("");
    //                     }

    //                     if (response['errors']['email']) {
    //                         $("#email").addClass('is-invalid');
    //                         $("#email-error").html(response['errors']['email']);
    //                     } else {
    //                         $("#email").removeClass('is-invalid');
    //                         $("#email-error").html("");
    //                     }
    //                 }
    //             }
    //         });
    //    })
</script>


<!-- Remove the initialization script for FancyBox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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


<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script type="text/javascript">
    jQuery(function() {
        jQuery('.select2').select2();
    });
</script>



@endsection