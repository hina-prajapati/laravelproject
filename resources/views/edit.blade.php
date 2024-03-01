<!-- @extends('FrontUser') -->
@extends('layout2')
<!-- @section('content') -->


<style>

.image-img {
    display: flex;
}
   
select {
    word-wrap: normal;
    border: none;
    width: 100%;
}

.custom-select.form-control.m-2 {
    font-size: 12px;
}

.custom-dropdown.form-control.m-2 {
    font-size: 12px;
}



label {
    display: inline-block;
    margin-left: 12px;
    font-weight: 700;
    margin-top: 18px;
    font-size: 14px;
}

input.form-control.m-2 {
    font-size: 12px;
}

.card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 22px;
}

h2.jdksghk {
    font-size: 28px;
    font-weight: 900;
    color: black;
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


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h2 class="jdksghk">Edit Match</h2>
              <a href="{{ url('/user/dashboard/index') }}" class="btn btn-warning" style="float: start;">Back</a>
            </div>
            <div class="card-body">
                <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")

                    <div class="row">
                     <div class="col-md-3">
                     <label>Date:</label>
                    <input type="date" name="date" class="form-control m-2" placeholder="Date...." value="{{ $posts->date }}">
                     </div>

                     <div class="col-md-3">
                     <label>MyTeam:</label>
                    <input type="text" name="myTeam" class="form-control m-2" placeholder="myTeam...." value="{{ $posts->myTeam }}">
                     </div>

                     <div class="col-md-3">
                     <label>OppositionTeam</label>
                    <input type="text" name="opppsitionTeam" class="form-control m-2" placeholder="Opposion Team....." value="{{ $posts->opppsitionTeam }}">
                     </div>

                     <div class="col-md-3">
                     <label>Venue:</label>
                    <input type="text" name="venue" class="form-control m-2" placeholder="Venue" value="{{ $posts->venue }}">
                     </div>

                     <div class="col-md-3">
                     <label>Select or Type Match Type:</label>
                    <div class="custom-dropdown form-control m-2">
                    <select id="dropdown-input" name="match_type" class="dropdown-input">
                    <option value="">Select or Type Match Type...</option>
                    <option value="Test-5 Days" {{ $posts->match_type == 'Test-5 Days' ? 'selected' : '' }}>Test-5 Days</option>
                    <option value="Test-3 Days" {{ $posts->match_type == 'Test-3 Days' ? 'selected' : '' }}>Test-3 Days</option>
                    <option value="Test-2 Days" {{ $posts->match_type == 'Test-2 Days' ? 'selected' : '' }}>Test-2 Days</option>

                    <option value="One Day-50 Over" {{ $posts->match_type == 'One Day-50 Over' ? 'selected' : '' }}>One Day-50 Over</option>
                    <option value="One Day-40 Over" {{ $posts->match_type == 'One Day-40 Over' ? 'selected' : '' }}>One Day-40 Over</option>
                    <option value="One Day-30 Over" {{ $posts->match_type == 'One Day-30 Over' ? 'selected' : '' }}>One Day-30 Over</option>
                    <option value="One Day-25 Over" {{ $posts->match_type == 'One Day-25 Over' ? 'selected' : '' }}>One Day-25 Over</option>
                    <option value="T20" {{ $posts->match_type == 'T20' ? 'selected' : '' }}>T20</option>
                    <option value="T10" {{ $posts->match_type == 'T10' ? 'selected' : '' }}>T10</option>
                        <!-- Add other options with similar logic... -->
                    <option value="Other" {{ $posts->match_type == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <input type="text" id="custom-match-type" name="custom_match_type" class="dropdown-input" placeholder="You can type here..." value="{{ $posts->custom_match_type }}">
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label>Select Role:</label>
                    <div class="custom-select form-control m-2">
                    <select id="select_role" name="select_role">
                    <option value="">Select Role</option>
                    <option value="Captain" {{ $posts->select_role === 'Captain' ? 'selected' : '' }}>Captain</option>
                    <option value="Vice-Captain" {{ $posts->select_role === 'Vice-Captain' ? 'selected' : '' }}>Vice-Captain</option>
                    <option value="Player" {{ $posts->select_role === 'Player' ? 'selected' : '' }}>Player</option>
                    </select>
                    </div>
                     </div>

                     <div class="col-md-3">
                    <label>Select Result:</label>
                    <div class="custom-select form-control m-2">
                    <select name="match_result">
                    <option value="">Match Result</option>
                    <option value="Won" {{ $posts->match_result === 'Won' ? 'selected' : '' }}>Won</option>
                    <option value="Lost" {{ $posts->match_result === 'Lost' ? 'selected' : '' }}>Lost</option>
                    <option value="Drow" {{ $posts->match_result === 'Drow' ? 'selected' : '' }}>Drow</option>
                    <option value="Abandoned" {{ $posts->match_result === 'Abandoned' ? 'selected' : '' }}>Abandoned</option>
                    </select>
                    </div>
                     </div>

                     <div class="col-md-3">
                    <label>Batting Position:</label>
                    <div class="custom-select form-control m-2">
                    <select name="batting_pos form-control">
                    <option value="">Batting Position</option>
                    <option value="1" {{ $posts->batting_pos === '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $posts->batting_pos === '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $posts->batting_pos === '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ $posts->batting_pos === '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ $posts->batting_pos === '5' ? 'selected' : '' }}>5</option>
                    <option value="6" {{ $posts->batting_pos === '6' ? 'selected' : '' }}>6</option>
                    <option value="7" {{ $posts->batting_pos === '7' ? 'selected' : '' }}>7</option>
                    <option value="8" {{ $posts->batting_pos === '8' ? 'selected' : '' }}>8</option>
                    <option value="9" {{ $posts->batting_pos === '9' ? 'selected' : '' }}>9</option>
                    <option value="10" {{ $posts->batting_pos === '10' ? 'selected' : '' }}>10</option>
                    <option value="DNB" {{ $posts->batting_pos === 'DNB' ? 'selected' : '' }}>DNB</option>
                    </select>
                    </div>
                     </div>
                 
                <div class="col-md-3">
                <label>Runs:</label>
                <input type="number" name="runs" class="form-control m-2" placeholder="Runs....." value="{{ $posts->runs }}">
                </div>

                <div class="col-md-3">
                <label>Total Ball Faced:</label>
                <input type="number" name="tbs" class="form-control m-2" placeholder="Total Ball Faced....." value="{{ $posts->tbs }}">
                </div>

                <div class="col-md-3">
                <label>Number Of 4s:</label>
                <input type="number" name="no4s" class="form-control m-2" placeholder="Number of 4s....." value="{{ $posts->no4s }}">
                </div>

                <div class="col-md-3">
                <label>Number Of 6s:</label>
                <input type="number" name="no6s" class="form-control m-2" placeholder="Number of 6s....." value="{{ $posts->no6s }}">
                </div>

                <div class="col-md-3">
                <label>Overs Bowled:</label>
                <div class="custom-select form-control m-2">
                <select name="overs_bowled">
                <option value="">Overs Bowled</option>
                <option value="1" {{ $posts->overs_bowled === '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ $posts->overs_bowled === '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ $posts->overs_bowled === '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ $posts->overs_bowled === '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ $posts->overs_bowled === '5' ? 'selected' : '' }}>5</option>
                <option value="6" {{ $posts->overs_bowled === '6' ? 'selected' : '' }}>6</option>
                <option value="7" {{ $posts->overs_bowled === '7' ? 'selected' : '' }}>7</option>
                <option value="8" {{ $posts->overs_bowled === '8' ? 'selected' : '' }}>8</option>
                <option value="9" {{ $posts->overs_bowled === '9' ? 'selected' : '' }}>9</option>
                <option value="10" {{ $posts->overs_bowled === '10' ? 'selected' : '' }}>10</option>
                <option value="DNB" {{ $posts->overs_bowled === 'DNB' ? 'selected' : '' }}>DNB</option>
                </select>
                </div>
                </div>

                <div class="col-md-3">
                <label>Runs Given(Excluding Extra):</label>
                <input type="number" name="runGiven"  class="form-control m-2"  placeholder="Runs Given(Excluding Extra)....." value="{{ $posts->runGiven }}">
                </div>

                <div class="col-md-3">
                <label>Extras:</label>
                <input type="number" name="extras" class="form-control m-2" value="{{ $posts->extras }}" placeholder="Extras.....">
                </div>

                <div class="col-md-3">
                <label>Number Of Maidan Overs:</label>
                <input type="number" name="nomo" class="form-control m-2" value="{{ $posts->nomo }}" placeholder="Number Of Maidan Overs.....">
                </div>

                <div class="col-md-3">
                <label>Wickets Taken</label>
                <input type="number" name="wicket_taken" class="form-control m-2" value="{{ $posts->wicket_taken }}" placeholder="Wickets Taken.....">
                </div>

                <div class="col-md-3">
                <label>Number of Run Saved in Fielding:</label>
                <input type="number" name="norsif" class="form-control m-2" value="{{ $posts->norsif }}" placeholder="Number of Run Saved in Fielding.....">
                </div>

                <div class="col-md-3">
                <label>Number Of Catches:</label>
                <input type="number" name="noc" class="form-control m-2" value="{{ $posts->noc }}" placeholder="Number Of Catches.....">
                </div>

                <div class="col-md-3">
                <label>Number Of Runs Outs:</label>
                <input type="number" name="norouts" class="form-control m-2" value="{{ $posts->norouts }}" placeholder="Number Of Runs Outs.....">
                </div>

                <div class="col-md-3">
                <label>Number Of stumpings:</label>
                <input type="number" name="nostump" class="form-control m-2" value="{{ $posts->nostump }}" placeholder="Number Of stumpings.....">
                </div>

                <div class="col-md-3">
                <label>Runs Given by misfiled:</label>
                <input type="number" name="rgbmis" class="form-control m-2" value="{{ $posts->rgbmis }}" placeholder="Runs Given by misfiled....">
                </div>

                <div class="col-md-3">
                <label>Catches Missed:</label>
                <input type="number" name="cmissed" class="form-control m-2" value="{{ $posts->cmissed }}" placeholder="Catches Missed.....">
                </div>

                <div class="col-md-3">
                <label>Stumpings Missed:</label>
                <input type="number" name="stump_missed" class="form-control m-2" value="{{ $posts->stump_missed }}" placeholder="Stumpings Missed.....">
                </div>

                <div class="col-md-3">
                <label>Run-Out Missed:</label>
                <input type="number" name="runouts" class="form-control m-2" value="{{ $posts->runouts }}" placeholder="Run-Out Missed.....">
                </div>

                <div class="col-md-3">
                <label>Fielding Position:</label>
                <div class="custom-select form-control m-2">
                <select name="fielding_pos">
                <option value="">Fielding Position</option>
                <option value="Wicket Keeper" {{ $posts->select2 === 'Wicket Keeper' ? 'selected' : '' }}>Wicket Keeper</option>
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
                </select>
                </div>
                </div>

                <div class="col-md-3">
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

                
                <div class="col-md-3">
                <label class="m-2">Images</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                </div>

                <div class="col-md-3">
                <label>Wicket In Which Fashion:</label>
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
                <!-- Add other options with similar logic... -->
                <option value="DNB" {{ $posts->select1 === 'DNB' ? 'selected' : '' }}>DNB</option>
                </select>
                </div>
                </div>
                
                <div class="col-md-3 mt-3">
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
                <!-- Add other options with similar logic... -->
                <option value="Gully" {{ $posts->select2 === 'Gully' ? 'selected' : '' }}>Gully</option>
                </select>
                </div>
                </div>
                </div>

                    <!-- <label class="m-2">Cover Image</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover"> -->

                  

                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                </form>

                    {{-- <label class="m-2">Cover Image</label>
                    <form action="/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                    <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br> --}}
                    <label class="m-2">Images</label>
                    <div class="image-img">
                    @if (count($posts->images)>0)
                    @foreach ($posts->images as $img)
                    <form action="/deleteimage/{{ $img->id }}">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                    </form>
                    <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                    @endif
                    </div>
            </div>
        </div>
    </div>
</div>

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
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
</script>

<!-- @endsection -->
