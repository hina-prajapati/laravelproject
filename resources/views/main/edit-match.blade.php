@extends('layout2')
@section('content')

 <style>

   label{
    font-weight: bold;
   }
   select {
    word-wrap: normal;
    width: 100%;
    border: none !important;
    border-radius: none !important;
    background: #eeeeee14;
    margin-top: 6px;
    border-color: #eee !important;
}

   .image-img {
    display: flex;
    margin-top: 40px;
}
.image-img img {
    width: 200px;
    height: 150px;
}

img.img-responsive.gallery-img.fancybox {
    display: block !important;
}
select {
    word-wrap: normal;
    width: 100%;
    border: none;
    background: #eeeeee14;
    margin-top: 6px;
}
.fancybox-container * img {
    box-sizing: border-box;
    width: 1000px;
}
img.img-responsive {
    display: block !important;

}

@media (max-width: 768px){

img.image-img {
    display: flex;
    margin-top: 40px;
    /* margin: 0 auto !important; */
}
.image-img {
    flex-direction: column;
    height: auto !important;
}
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
    width: 150px;
    box-shadow: #a1a1a1 12px 12px 48px;
    height: auto;
}
.right-fgo li a {
    color: #fff !important;
    font-size: 15px;
    font-family: "Roboto", sans-serif;
}

 </style>
 <section class="banner-part sub-main-banner float-start w-100">
     
     <div class="baner-imghi">
        <img src="/assets2/images/sub-banner01.jpg" alt="sub-banner"/>
     </div>

       <div class="sub-banner">
           <div class="container">
               <h1 class="text-center"> Edit Match</h1>
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Edit Match</li>
                   </ol>
               </nav>
          </div>
       </div>
</section>


        <section class="float-start w-100 body-part pt-0">
        
            <div class="contact-page d-inline-block w-100">
                <div class="container">
                
                 <div class="col">
                    <div class="contact-use-div">
                        <h2> Edit Match </h2>
                        <!-- <h2 class="mt-5"> Get In Touch </h2> -->
                      
                        <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->

                <form  action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                <div class="row mt-4">

                <div class="col-md-3 mt-3">
                <div class="form-group">
                <label>Date:</label>
                <input type="date" id="date" name="date" value="{{ $posts->date }}" class="form-control m-2" placeholder="Date"  max="{{ date('d-m-Y') }}">
                </div>
                @error('date')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="form-group">
                <label>MyTeam:</label>
                <input type="text" name="myTeam" id="myTeam" value="{{ $posts['myTeam'] }}" class="form-control m-2" placeholder="My Team">
                </div>
                <div id="myTeamErrorMsg" style="color: red;"></div>
                @error('myTeam')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Opposition Team:</label>
                <input type="text" name="opppsitionTeam" id="opppsitionTeam" value="{{ $posts->opppsitionTeam }}"  class="form-control m-2" placeholder="Opposion Team">
                </div>
                <div id="oppositionTeamErrorMsg" style="color: red;"></div>
                @error('opppsitionTeam')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Tournament:</label>
                <input type="text" name="tournament" id="tournament" value="{{ $posts->tournament }}"  class="form-control m-2" placeholder="tournament">
                </div>
                <div id="tournamentError" style="color: red;"></div>
                @error('tournament')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Vanue:</label>
                <input type="text" name="venue" id="venue" value="{{ $posts->venue }}" class="form-control m-2" placeholder="Venue">
                </div>
                <div id="venueErrorMsg" style="color: red;"></div>
                @error('venue')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Match Type:</label>
                    <div class="custom-dropdown form-control m-2">
                    <select id="dropdown-input" name="match_type" class="dropdown-input" style="border: none;" onchange="toggleCustomInput()">
                    <option value=""> Match Type...</option>
                    <option value="Test-5 Days" {{ $posts->match_type == 'Test-5 Days' ? 'selected' : '' }}>Test-5 Days</option>
                    <option value="Test-3 Days" {{ $posts->match_type == 'Test-3 Days' ? 'selected' : '' }}>Test-3 Days</option>
                    <option value="Test-2 Days" {{ $posts->match_type == 'Test-2 Days' ? 'selected' : '' }}>Test-2 Days</option>
                    <option value="One Day-50 Over" {{ $posts->match_type == 'One Day-50 Over' ? 'selected' : '' }}>One Day-50 Over</option>
                    <option value="One Day-40 Over" {{ $posts->match_type == 'One Day-40 Over' ? 'selected' : '' }}>One Day-40 Over</option>
                    <option value="One Day-30 Over" {{ $posts->match_type == 'One Day-30 Over' ? 'selected' : '' }}>One Day-30 Over</option>
                    <option value="One Day-25 Over" {{ $posts->match_type == 'One Day-25 Over' ? 'selected' : '' }}>One Day-25 Over</option>
                    <option value="T20" {{ $posts->match_type == 'T20' ? 'selected' : '' }}>T20</option>
                    <option value="T10" {{ $posts->match_type == 'T10' ? 'selected' : '' }}>T10</option>
                    <option value="Other" {{ $posts->match_type == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <input type="text" id="custom-match-type"  name="custom_match_type" class="dropdown-input" placeholder="Type Custom Match Type..." value="{{ $posts->custom_match_type }}" style="display: none !important; width: 250px;     display: inline-block;    top: 13px !important;   left: -6px !important;     position: relative;">
                    </div>
                </div>
                @error('match_type')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Type:</label>
                <div class="custom-select form-control m-2">
                <select id="type_ball" name="type_ball">
                <option value="">Select Type</option>
                @foreach($ballTypes as $ballType)
                    <option value="{{ $ballType }}" {{ $posts->type_ball == $ballType ? 'selected' : '' }}>{{ $ballType }}</option>
                @endforeach
            </select>

                </div>
                </div>
                @error('type_ball')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                
                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Select Role:</label>
                <div class="custom-select form-control m-2">
                <select id="select_role" name="select_role">
                <option value="">Select Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role }}" {{ $posts->select_role === $role ? 'selected' : '' }}>{{ $role }}</option>
                @endforeach
            </select>

                </div>
                </div>
                @error('select_role')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3 mb-4">
                <div class="from-group">
                <label>Select Result:</label>
                <div class="custom-select form-control m-2">
                <select name="match_result" id="match_result">
                <option value="">Match Result</option>
                <option value="Won" {{ $posts->match_result === 'Won' ? 'selected' : '' }}>Won</option>
                <option value="Lost" {{ $posts->match_result === 'Lost' ? 'selected' : '' }}>Lost</option>
                <option value="Draw/Tie" {{ $posts->match_result === 'Draw/Tie' ? 'selected' : '' }}>Draw/Tie</option>
                <option value="Abandoned" {{ $posts->match_result === 'Abandoned' ? 'selected' : '' }}>Abandoned</option>
                </select>
                </div>
                </div>
                @error('match_result')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <h5>Batting</h5>
                <hr>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Batting Position:</label>
                <div class="custom-select m-2">
                <select id="batting_pos" name="batting_pos" class="form-control">
                <option value="">Batting Position</option>
                @foreach($battingPositions as $position)
                    <option value="{{ $position }}" {{ $posts->batting_pos == $position ? 'selected' : '' }}>{{ $position }}</option>
                @endforeach
            </select>

            </div>

                </div>
                @error('batting_pos')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>
                
                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Runs:</label>
                <input type="number" name="runs" id="runs" value="{{ $posts->runs }}" class="form-control m-2" placeholder="Runs.....">
                </div>
                @error('runs')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>
                
                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Total Ball Faced:</label>
                <input type="number" name="tbs" id="tbs" value="{{ $posts->tbs }}" class="form-control m-2" placeholder="Total Ball Faced.....">
                </div>
                @error('tbs')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of 4s:</label>
                <input type="number" name="no4s" id="max4s" value="{{ $posts->no4s }}" class="form-control m-2" placeholder="Number of 4s.....">
                </div>
                @error('no4s')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of 6s:</label>
                <input type="number" name="no6s" id="max6s" value="{{ $posts->no6s }}" class="form-control m-2" placeholder="Number of 6s.....">
                </div>
                @error('no6s')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Out In Which Fashion:</label>
                <div class="col-xs-6">
                <select class="form-control custom-select form-control m-2" name="select1" id="select1">
                <option value="">Wicket In Which Fashion</option>
                <option value="Bowled" {{ $posts->select1 === 'Bowled' ? 'selected' : '' }}>Bowled</option>
                <option value="Catch out" {{ $posts->select1 === 'Catch out' ? 'selected' : '' }}>Catch out</option>
                <option value="Caught & Bowled" {{ $posts->select1 === 'Caught & Bowled' ? 'selected' : '' }}>Caught & Bowled</option>
                <option value="Caught Behind" {{ $posts->select1 === 'Caught Behind' ? 'selected' : '' }}>Caught Behind</option>
                <option value="LBW" {{ $posts->select1 === 'LBW' ? 'selected' : '' }}>LBW</option>
                <option value="Hit Wicket" {{ $posts->select1 === 'Hit Wicket' ? 'selected' : '' }}>Hit Wicket</option>
                <option value="Retired Hurt" {{ $posts->select1 === 'Retired Hurt' ? 'selected' : '' }}>Retired Hurt</option>
                <option value="Not Out" {{ $posts->select1 === 'Not Out' ? 'selected' : '' }}>Not Out</option>
                </select>
                </div>
                </div>
                @error('select1')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label></label>
                <div class="col-xs-6">
                <select class="form-control custom-select form-control m-2" name="select2" id="select2">
                <option value="">If Catch Out, Where</option>
                <option value="Slip" {{ $posts->select2 === 'Slip' ? 'selected' : '' }}>Slip</option>
                <option value="Long On" {{ $posts->select2 === 'Long On' ? 'selected' : '' }}>Long On</option>
                <option value="Long Off" {{ $posts->select2 === 'Long Off' ? 'selected' : '' }}>Long Off</option>
                <option value="Mid On" {{ $posts->select2 === 'Mid On' ? 'selected' : '' }}>Mid On</option>
                <option value="Mid Off" {{ $posts->select2 === 'Mid Off' ? 'selected' : '' }}>Mid Off</option>
                <option value="Cover" {{ $posts->select2 === 'Cover' ? 'selected' : '' }}>Cover</option>
                <option value="Point" {{ $posts->select2 === 'Point' ? 'selected' : '' }}>Point</option>
                <option value="Silly Point" {{ $posts->select2 === 'Silly Point' ? 'selected' : '' }}>Silly Point</option>
                <option value="Third Man" {{ $posts->select2 === 'Third Man' ? 'selected' : '' }}>Third Man</option>
                <option value="Theep Third Man" {{ $posts->select2 === 'Theep Third Man' ? 'selected' : '' }}>Theep Third Man</option>
                <option value="Gully" {{ $posts->select2 === 'Gully' ? 'selected' : '' }}>Gully</option>
                </select>
                </div>
                </div>
                @error('select2')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <h5>Bowlling</h5>
                <hr>

       

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Overs Bowled:</label>
                <input type="text" name="overs_bowled" id="overs_bowled"  value="{{ $posts->overs_bowled }}" class="form-control m-2" placeholder="Runs Given(Excluding Extra).....">
                </div>
                @error('overs_bowled')
                <div class="alert text-danger">{{ $message }}</div>
              @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Runs Given(Excluding Extra):</label>
                <input type="number" name="runGiven" id="runGiven" value="{{ $posts->runGiven }}" class="form-control m-2" placeholder="Runs Given(Excluding Extra).....">
                </div>
                @error('runGiven')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Extras:</label>
                <input type="number" name="extras" id="extras" value="{{ $posts->extras }}" class="form-control m-2" placeholder="Extras.....">
                </div>
                @error('extras')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of Maidan Overs:</label>
                <input type="number" name="nomo" id="nomo" value="{{ $posts->nomo }}" class="form-control m-2" placeholder="Number Of Maidan Overs.....">
                </div>
                @error('nomo')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3 mb-4">
                <div class="from-group">
                <label>Wickets Taken</label>
                <input type="number" name="wicket_taken" id="wicket_taken" value="{{ $posts->wicket_taken }}" class="form-control m-2" placeholder="Wickets Taken.....">
                </div>
                @error('wicket_taken')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <h5>Fielding</h5>
                <hr>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Fielding Position:</label>
                <div class="custom-select form-control m-2">
                <select name="fielding_pos" id="fielding_pos">
                <option value="">Fielding Position</option>
                @foreach($fieldingPositions as $position)
                    <option value="{{ $position }}" {{ $posts->fielding_pos === $position ? 'selected' : '' }}>{{ $position }}</option>
                @endforeach
            </select>

                </div>
                </div>
                @error('fielding_pos')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number of Run Saved in Fielding:</label>
                <input type="number" name="norsif" id="norsif" value="{{ $posts->norsif }}" class="form-control m-2"  placeholder="Number of Run Saved in Fielding.....">
                </div>
                @error('norsif')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of Catches:</label>
                <input type="number" name="noc" id="noc" value="{{ $posts->noc }}" class="form-control m-2" placeholder="Number Of Catches.....">
                </div>
                @error('noc')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of Runs Outs:</label>
                <input type="number" name="norouts" id="norouts" value="{{ $posts->norouts }}" class="form-control m-2" placeholder="Number Of Runs Outs.....">
                </div>
                @error('norouts')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of stumpings:</label>
                <input type="number" name="nostump" id="nostump" value="{{ $posts->nostump }}" class="form-control m-2" placeholder="Number Of stumpings.....">
                </div>
                @error('nostump')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Runs Given by misfiled:</label>
                <input type="number" name="rgbmis" id="rgbmis" value="{{ $posts->rgbmis }}" class="form-control m-2" placeholder="Runs Given by misfiled....">
                </div>
                @error('rgbmis')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Catches Missed:</label>
                <input type="number" name="cmissed" id="cmissed" value="{{ $posts->cmissed }}" class="form-control m-2" placeholder="Catches Missed.....">
                </div>
                @error('cmissed')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Stumpings Missed:</label>
                <input type="number" name="stump_missed" id="stump_missed" value="{{ $posts->stump_missed }}" class="form-control m-2" placeholder="Stumpings Missed.....">
                </div>
                @error('stump_missed')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Run-Out Missed:</label>
                <input type="number" name="runouts" id="runouts" value="{{ $posts->runouts }}" class="form-control m-2" placeholder="Run-Out Missed.....">
                </div>
                @error('runouts')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label for="award">Award:</label>
                <div class="custom-select form-control m-2">
                <select name="award" id="award">
                <option value="">Select an Award</option>
                <option value="Man of The Match" {{ $posts->award === 'Man of The Match' ? 'selected' : '' }}>Man of The Match</option>
                <option value="Best Bowler" {{ $posts->award === 'Best Bowler' ? 'selected' : '' }}>Best Bowler</option>
                <option value="Best Batsman" {{ $posts->award === 'Best Batsman' ? 'selected' : '' }}>Best Batsman</option>
                <option value="Best Fielder" {{ $posts->award === 'Best Fielder' ? 'selected' : '' }}>Best Fielder</option>
                <option value="Best All-Rounder" {{ $posts->award === 'Best All-Rounder' ? 'selected' : '' }}>Best All-Rounder</option>
                <option value="None" {{ $posts->award === 'None' ? 'selected' : '' }}>None</option>
                </select>
                </div>
                </div>
                @error('award')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <!-- <div class="col-md-3 mt-3">
                <div class="from-group">
                <label class="m-2">Images</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                </div>
                </div> -->

                </div>
          <div class="d-flex">
          <button type="submit" class="btn comon-btn btn-success mt-3 ">Update</button>
                <a class="btn comon-btn btn-primary ms-3 mt-3" style="background-color: #0d6efd" href="{{ route('/all-matches') }}">
                                    <span style="color: #fff; background-color: #0d6efd">Back</span>
                                </a>
          </div>
                    <!-- <a href="{{ url('/user/dashboard/index') }}" class="btn btn-warning" style="float: start;">Back</a> -->
            </form>
  
             <!-- <div class="profile-container">
              <label class="m-2 mt-5">Images</label>
                    <div class="image-img">
                    @if (count($posts->images)>0)
                    @foreach ($posts->images as $img)
                    <form action="/deleteimage/{{ $img->id }}">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                    </form>
                    <img src="/images/{{ $img->image }}" data-fancybox="gallery-img fancybox" class="img-responsive" alt="" srcset="">
                    @endforeach
                    @endif
                    </div>
             </div> -->
          </div>
         </div>
      </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // JavaScript to toggle the custom input field based on the selected option
    const dropdownInput = document.getElementById('dropdown-input');
    const customMatchTypeInput = document.getElementById('custom-match-type');

    dropdownInput.addEventListener('change', function () {
        if (dropdownInput.value === 'Other') {
            customMatchTypeInput.style.display = 'block';
        } else {
            customMatchTypeInput.style.display = 'none';
        }
    });
</script>

<script>
    var select1 = document.getElementById('select1');
    var select2 = document.getElementById('select2');

    // Add an event listener to select1
    select1.addEventListener('change', function () {
        // If "Catch out" is selected in select1, show select2, otherwise hide it
        select2.style.display = this.value === 'Catch out' ? 'block' : 'none';
    });

    // Initial check on page load
    if (select1.value !== 'Catch out') {
        select2.style.display = 'none';
    }
</script>


<script>
    // Attach an event listener to the form submission
    document.getElementById('myForm').addEventListener('submit', function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Get the selected values from the select elements
        const select1Value = document.getElementById('select1').value;
        const select2Value = document.getElementById('select2').value;

        // Do something with the selected values, for example, log them
        console.log('Selected Value of Select1:', select1Value);
        console.log('Selected Value of Select2:', select2Value);

        // Now, you can submit the form data to your server using AJAX or other methods.
    });
</script>

<script>
    function toggleCustomInput() {
        var dropdown = document.getElementById("dropdown-input");
        var customInput = document.getElementById("custom-match-type");

        if (dropdown.value === "Other") {
            customInput.style.display = "inline-block";
        } else {
            customInput.style.display = "none";
        }
    }
</script>

<!-- <script>
$(document).ready(function() {
    // When the select element changes
    $('#dropdown-input').on('change', function() {
        if ($(this).val() === '') {
            // If the selected value is empty, show the text input
            $('#custom-match-type').show();
        } else {
            // If a value is selected, hide the text input
            $('#custom-match-type').hide();
        }
    });

    // When the text input changes
    $('#custom-match-type').on('input', function() {
        // Update the select element's value with the typed value
        $('#dropdown-input').val($(this).val());
    });
});
</script> -->


<script>
    $(document).ready(function() {
        $(".gallery-img").on('click', function() {
            $(this).width(1000).height('auto'); // Enlarge the clicked image
        });

        $(".fancybox").fancybox({
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
                $(".gallery-img").css({
                    width: '200', // Reset the width of all images
                    height: '150' // Reset the height of all images
                });
            }
        });
    });
</script>
<script>
$(document).ready(function () {
    $('#date').change(function () {
        var now = new Date();   // Current Date
        var selectedDate = new Date($('#date').val());  // Date selected by user

        if (selectedDate > now) {
            alert('Entered Date is Greater than Current Date');
            // Clear the input value or take any other action as needed
            $('#date').val('');
            return false;
        }
    });
});
</script>



<script>
    // Get the input element
    var oversBowledInput = document.getElementById('overs_bowled');

    // Add event listener for input
    oversBowledInput.addEventListener('input', function(event) {
        var inputValue = event.target.value;
        var decimalPart = inputValue.split('.')[1];

        // Check if the decimal part is greater than .5
        if (decimalPart && parseFloat(decimalPart) > 5) {
            // Display an error message
            alert("You cannot type numbers with a decimal part greater than '.5'");
            // Clear the input value
            event.target.value = '';
        }
        
    });
</script>

<script>
    // Get the input element
    var oversBowledInput = document.getElementById('overs_bowled');

    // Add event listener for input
    oversBowledInput.addEventListener('input', function(event) {
        var inputValue = event.target.value;
        
        // Remove any non-numeric and non-decimal characters
        inputValue = inputValue.replace(/[^0-9.]/g, '');

        // Update the input value
        event.target.value = inputValue;
    });
</script>


<script>
    // Get the batting position input element
    var battingPositionInput = document.getElementById('batting_pos');

    // Get other input elements
    var runsInput = document.getElementById('runs');
    var tbsInput = document.getElementById('tbs');
    var no4sInput = document.getElementById('max4s');
    var no6sInput = document.getElementById('max6s');
    var select1Input = document.getElementById('select1');
    var select2Input = document.getElementById('select2');

    // Function to disable select options
    function disableOptions(selectElement) {
        var options = selectElement.options;
        for (var i = 0; i < options.length; i++) {
            options[i].disabled = true;
        }
    }

    // Function to enable select options
    function enableOptions(selectElement) {
        var options = selectElement.options;
        for (var i = 0; i < options.length; i++) {
            options[i].disabled = false;
        }
    }

    // Function to handle changes in batting position
    function handleBattingPositionChange() {
        // Check if the batting position is "DNB"
        if (battingPositionInput.value === 'DNB') {
            // Disable other input fields
            runsInput.disabled = true;
            tbsInput.disabled = true;
            no4sInput.disabled = true;
            no6sInput.disabled = true;
            // Disable options in select dropdowns
            disableOptions(select1Input);
            disableOptions(select2Input);
        } else {
            // Enable other input fields
            runsInput.disabled = false;
            tbsInput.disabled = false;
            no4sInput.disabled = false;
            no6sInput.disabled = false;
            // Enable options in select dropdowns
            enableOptions(select1Input);
            enableOptions(select2Input);
        }
    }

    // Add event listener for change in batting position
    battingPositionInput.addEventListener('change', handleBattingPositionChange);

    // Call the function initially to handle the initial state
    handleBattingPositionChange();
</script>

<script>
    // Get the overs_bowled input element
    var oversBowledInput = document.getElementById('overs_bowled');

    // Get other input elements
    var runGivenInput = document.getElementById('runGiven');
    var extrasInput = document.getElementById('extras');
    var nomoInput = document.getElementById('nomo');
    var wicketsTakenInput = document.getElementById('wicket_taken');

    // Disable other input fields initially if overs_bowled is 0
    toggleInputs();

    // Add event listener for input
    oversBowledInput.addEventListener('input', toggleInputs);

    function toggleInputs() {
        // Get the value of overs_bowled
        var oversBowledValue = parseFloat(oversBowledInput.value);

        // Check if overs_bowled is 0
        if (oversBowledValue === 0) {
            disableInputs();
        } else {
            enableInputs();
        }
    }

    function disableInputs() {
        // Disable other input fields
        runGivenInput.disabled = true;
        extrasInput.disabled = true;
        nomoInput.disabled = true;
        wicketsTakenInput.disabled = true;
    }

    function enableInputs() {
        // Enable other input fields
        runGivenInput.disabled = false;
        extrasInput.disabled = false;
        nomoInput.disabled = false;
        wicketsTakenInput.disabled = false;
    }
</script>


<script>
    // Get the input elements
    var oversBowledInput = document.getElementById('overs_bowled');
    var wicketsTakenInput = document.getElementById('wicket_taken');

    // Add event listener for input
    oversBowledInput.addEventListener('input', updateMaxWickets);

    // Function to update the maximum value of wickets taken
   // Function to update the maximum value of wickets taken
// Function to update the maximum value of wickets taken
function updateMaxWickets() {
    // Get the value of overs_bowled
    var oversBowledValue = parseFloat(oversBowledInput.value);

    // Set the maximum value of wickets taken based on overs_bowled
    if (oversBowledValue >= 1.4) {
        wicketsTakenInput.max = 10;
    } else if (oversBowledValue >= 1.3) {
        wicketsTakenInput.max = 9;
    } else if (oversBowledValue >= 1.2) {
        wicketsTakenInput.max = 8;
    } else if (oversBowledValue >= 1.1) {
        wicketsTakenInput.max = 7;
    } else if (oversBowledValue >= 1) {
        wicketsTakenInput.max = 6;
    } else if (oversBowledValue >= 0.5) {
        wicketsTakenInput.max = 5;
    } else if (oversBowledValue >= 0.4) {
        wicketsTakenInput.max = 4;
    } else if (oversBowledValue >= 0.3) {
        wicketsTakenInput.max = 3;
    } else if (oversBowledValue >= 0.2) {
        wicketsTakenInput.max = 2;
    } else if (oversBowledValue >= 0.1) {
        wicketsTakenInput.max = 1;
    } else {
        // Default maximum value if overs_bowled is less than 0.1
        wicketsTakenInput.max = '';
    }
}

// Add event listener for input
oversBowledInput.addEventListener('input', function() {
    updateMaxWickets(); // Update the maximum value of wickets taken after each input change
});

// Call updateMaxWickets initially to set the maximum value based on the initial value of overs_bowled
updateMaxWickets();


</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script>
  $(document).ready(function(){
    $("input[name='myTeam']").keydown(function(){
      $("#myTeamErrorMsg").text("");
    });
  
    $("input[name='myTeam']").keyup(function(){
      var inputValue = $(this).val();
      if(!areOnlyCharacters(inputValue)){
        $("#myTeamErrorMsg").text("Only characters are allowed.");
      } else {
        $("#myTeamErrorMsg").text("");
      }
    });
    

  });

  $(document).ready(function(){
    $("input[name='opppsitionTeam']").keydown(function(){
      $("#oppositionTeamErrorMsg").text("");
    });
  
    $("input[name='opppsitionTeam']").keyup(function(){
      var inputValue = $(this).val();
      if(!areOnlyCharacters(inputValue)){
        $("#oppositionTeamErrorMsg").text("Only characters are allowed.");
      } else {
        $("#oppositionTeamErrorMsg").text("");
      }
    });
});
    
    $(document).ready(function(){
    $("input[name='tournament']").keydown(function(){
      $("#tournamentError").text("");
    });
  
    $("input[name='tournament']").keyup(function(){
      var inputValue = $(this).val();
      if(!areOnlyCharacters(inputValue)){
        $("#tournamentError").text("Only characters are allowed.");
      } else {
        $("#tournamentError").text("");
      }
    });
  });

  $(document).ready(function(){
    $("input[name='venue']").keydown(function(){
      $("#venueErrorMsg").text("");
    });
  
    $("input[name='venue']").keyup(function(){
      var inputValue = $(this).val();
      if(!areOnlyCharacters(inputValue)){
        $("#venueErrorMsg").text("Only characters are allowed.");
      } else {
        $("#venueErrorMsg").text("");
      }
    });
  });

  function areOnlyCharacters(inputValue) {
    var regex = /^[a-zA-Z]+$/;
    return regex.test(inputValue);
  }
</script>

@endsection
