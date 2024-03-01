@extends('FrontUser')
@extends('layoutt')
@section('admin')

<style>


    select {
    word-wrap: normal;
    border: none;
}

.custom-select.form-control.m-2 {
    font-size: 14px;
}

.custom-dropdown.form-control.m-2 {
    font-size: 14x;
}

label {
    display: inline-block;
    margin-left: 12px;
    font-weight: 700;
    margin-top: 22px;
    font-size: 14px;
}

input.form-control.m-2 {
    font-size: 14px;
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
              <h2>Matches</h2>
            </div>
            <div class="card-body">
                <form action="/post" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                        <label>Date:</label>
                    <input type="date" name="date" value="{{ old('date') }}"  class="form-control m-2" placeholder="Date">
                    @error('date')
                        <div class="alert text-danger error">{{ $message }}</div>
                    @enderror
                        </div>

                        <div class="col-md-3">
                        <label>MyTeam:</label>
                    <input type="text" name="myTeam" value="{{ old('myTeam') }}"  class="form-control m-2" placeholder="My Team">
                        </div>

                        <div class="col-md-3">
                        <label>Opposition Team:</label>
                    <input type="text" name="opppsitionTeam" value="{{ old('opppsitionTeam') }}"  class="form-control m-2" placeholder="Opposion Team">
                        </div>

                    <div class="col-md-3">
                    <label>Number of Run Saved in Fielding:</label>
                    <input type="number" name="norsif" class="form-control m-2" value="{{ old('norsif') }}"   placeholder="Number of Run Saved in Fielding.....">
                    </div>

                        <div class="col-md-3">
                        <label>Vanue:</label>
                    <input type="text" name="venue" class="form-control m-2" value="{{ old('venue') }}"  placeholder="Venue">
                        </div>

                        <div class="col-md-3">
                        <label>Match Type:</label>
                    <div class="custom-dropdown form-control m-2">
                    <select id="dropdown-input" name="match_type" class="dropdown-input" style="border: none;">
                        <option value="">You can Type As well...</option>
                        <option value="Test-5 Days">Test-5 Days</option>
                        <option value="Test-3 Days">Test-3 Days</option>
                        <option value="Test-2 Days">Test-2 Days</option>
                        <option value="One Day-50 Over">One Day-50 Over</option>
                        <option value="One Day-40 Over">One Day-40 Over</option>
                        <option value="One Day-30 Over">One Day-30 Over</option>
                        <option value="One Day-25 Over">One Day-25 Over</option>
                        <option value="T20">T20</option>
                        <option value="T10">T10</option>
                    </select>
                    <input type="text" id="custom-match-type" name="custom_match_type" class="dropdown-input" placeholder="Type Custom Match Type..." style="display: none;">
                </div>
              </div>

              <div class="col-md-3">
              <label>Select Role:</label>
                <div class="custom-select form-control m-2">
                <select id="select_role" name="select_role">
                    <option value="">Select Role</option>
                    <option value="Captain">Captain</option>
                    <option value="Vice-Captain">Vice-Captain</option>
                    <option value="Player">Player</option>
                </select>
                </div>
              </div>

              <div class="col-md-3">
              <label>Select Result:</label>
                <div class="custom-select form-control m-2">
                <select name="match_result">
                    <option value="">Match Result</option>
                    <option value="Won">Won</option>
                    <option value="Lost">Lost</option>
                    <option value="Drow">Drow</option>
                    <option value="Abondoned">Abondoned</option>
                </select>
                </div>
              </div>

              <div class="col-md-3">
              <label>Batting Position:</label>
                <div class="custom-select form-control m-2">
                <select name="batting_pos">
                    <option value="">Batting Position</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option> 
                    <option value="DNB">DNB</option>
                </select>
                </div>
              </div>

              <div class="col-md-3">
              <label>Runs:</label>
                <input type="number" name="runs" value="{{ old('runs') }}"   class="form-control m-2" placeholder="Runs.....">
                @error('runs')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


              </div>

              <div class="col-md-3">
              <label>Total Ball Faced:</label>
                <input type="number" name="tbs" class="form-control m-2" placeholder="Total Ball Faced.....">
              </div>

              <div class="col-md-3">
              <label>Number Of 4s:</label>
                <input type="number" name="no4s" value="{{ old('no4s') }}" class="form-control m-2" placeholder="Number of 4s.....">
              </div>

              <div class="col-md-3">
              <label>Number Of 6s:</label>
                <input type="number" name="no6s"  value="{{ old('no6s') }}" class="form-control m-2" placeholder="Number of 6s.....">
              </div>

              <div class="col-md-3">
              <label>Overs Bowled:</label>
                <div class="custom-select form-control m-2">
                <select name="overs_bowled">
                    <option value="">Overs Bowled</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option> 
                    <option value="DNB">DNB</option>
                </select>
                </div>
              </div>

            <div class="col-md-3">
            <label>Runs Given(Excluding Extra):</label>
            <input type="number" name="runGiven" class="form-control m-2" placeholder="Runs Given(Excluding Extra).....">
            </div>

            <div class="col-md-3">
            <label>Extras:</label>
            <input type="number" name="extras" class="form-control m-2" placeholder="Extras.....">
            </div>

            <div class="col-md-3">
            <label>Number Of Maidan Overs:</label>
            <input type="number" name="nomo" class="form-control m-2" placeholder="Number Of Maidan Overs.....">
            </div>

            <div class="col-md-3">
            <label>Wickets Taken</label>
            <input type="number" name="wicket_taken" class="form-control m-2" placeholder="Wickets Taken.....">
            </div>

            <div class="col-md-3">
            <label>Number of Run Saved in Fielding:</label>
            <input type="number" name="norsif" class="form-control m-2" placeholder="Number of Run Saved in Fielding.....">
            </div>
            

            <div class="col-md-3">
            <label>Number Of Catches:</label>
            <input type="number" name="noc" class="form-control m-2" placeholder="Number Of Catches.....">
            </div>

            <div class="col-md-3">
            <label>Number Of Runs Outs:</label>
            <input type="number" name="norouts" class="form-control m-2" placeholder="Number Of Runs Outs.....">
            </div>

            <div class="col-md-3">
            <label>Number Of stumpings:</label>
            <input type="number" name="nostump" class="form-control m-2" placeholder="Number Of stumpings.....">
            </div>
            
            <div class="col-md-3">
            <label>Runs Given by misfiled:</label>
            <input type="number" name="rgbmis" class="form-control m-2" placeholder="Runs Given by misfiled....">
            </div>

            <div class="col-md-3">
            <label>Catches Missed:</label>
            <input type="number" name="cmissed" class="form-control m-2" placeholder="Catches Missed.....">
            </div>

            <div class="col-md-3">
            <label>Stumpings Missed:</label>
            <input type="number" name="stump_missed" class="form-control m-2" placeholder="Stumpings Missed.....">
            </div>

            <div class="col-md-3">
            <label>Run-Out Missed:</label>
            <input type="number" name="runouts" class="form-control m-2" placeholder="Run-Out Missed.....">
            </div>

            <div class="col-md-3">
            <label>Award:</label>
            <div class="custom-select form-control m-2">
            <select name="award">
            <option value="">Award</option>
            <option value="Man of The Match">Man of The Match</option>
            <option value="Best Bowler">Best Bowler</option>
            <option value="Best Batsman">Best Batsman</option>
            <option value="Best Fielder">Best Fielder</option>
            <option value="Best All-Rounder">Best All-Rounder</option>
            <option value="None">None</option>
            </select>
            </div>
            </div>

            <div class="col-md-3">
            <label>Fielding Position:</label>
            <div class="custom-select form-control m-2">
            <select name="fielding_pos">
            <option value="">Fielding Position</option>
            <option value="Wicket Keeper">Wicket Keeper</option>
            <option value="Slip">Slip</option>
            <option value="Long On">Long On</option>
            <option value="Long Off">Long Off</option>
            <option value="Mid On">Mid On</option>
            <option value="Mid Off">Mid Off</option>
            <option value="Cover">Cover</option>
            <option value="Point">Point</option>
            <option value="Silly Point">Silly Point</option>
            <option value="Third Man">Third Man</option>
            <option value="Theep Third Man">Theep Third Man</option>
            <option value="Gully">Gully</option>
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
            <option value="Bowled">Bowled</option>
            <option value="Catch out">Catch out</option>
            <option value="Caught & Bowled">Caught & Bowled</option>
            <option value="Caught Behind">Caught Behind</option>
            <option value="LBW">LBW</option>
            <option value="Hit Wicket">Hit Wicket</option>
            <option value="Retired Hurt">Retired Hurt</option>
            <option value="DNB">DNB</option>
            </select>
            </div>
            </div>

            <div class="col-md-3 mt-3">
            <label></label>
            <div class="col-xs-6">
            <select class="form-control custom-select form-control m-2" name="select2" id="select2">
            <option value="">If Catch Out, Where</option>
            <option value="Slip">Slip</option>
            <option value="Long On">Long On</option>
            <option value="Long Off">Long Off</option>
            <option value="Mid On">Mid On</option>
            <option value="Mid Off">Mid Off</option>
            <option value="Cover">Cover</option>
            <option value="Point">Point</option>
            <option value="Silly Point">Silly Point</option>
            <option value="Third Man">Third Man</option>
            <option value="Theep Third Man">Theep Third Man</option>
            <option value="Gully">Gully</option>
            </select>
            </div>
            </div>

       

            </div>

               


                
                    

                <!-- <div class="custom-select form-control m-2">
                <select name="wicket_in_which_fashion">
                    <option value="">Wicket In Which Fashion</option>
                    <option value="Bowled">Bowled</option>
                    <option value="Catch out">Catch out</option>
                    <option value="Caught & Bowled">Caught & Bowled</option>
                    <option value="Caught Behind">Caught Behind</option>
                    <option value="LBW">LBW</option>
                    <option value="Hit Wicket">Hit Wicket</option>
                    <option value="Retired Hurt">Retired Hurt</option>
                    <option value="DNB">DNB</option>

                </select>
                </div> -->


                <!-- <div class="custom-select form-control m-2">
                <select name="if_catch_out">
                    <option value="">If Catch Out, Where</option>
                    <option value="Slip">Slip</option>
                    <option value="Long On">Long On</option>
                    <option value="Long Off">Long Off</option>
                    <option value="Mid On">Mid On</option>
                    <option value="Mid Off">Mid Off</option>
                    <option value="Cover">Cover</option>
                    <option value="Point">Point</option>
                    <option value="Silly Point">Silly Point</option>
                    <option value="Third Man">Third Man</option>
                    <option value="Theep Third Man">Theep Third Man</option>
                    <option value="Gully">Gully</option>
                </select>
                </div> -->

              


                    <!-- <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea> -->
                    <!-- <label class="m-2">Cover Image</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover"> -->
                  

                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                    <!-- <a href="{{ url('/user/dashboard/index') }}" class="btn btn-warning" style="float: start;">Back</a> -->
                </form>
            </div>
        </div>
    </div>
</div>
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


<script>
        const inputField = document.getElementById('dropdown-input');
        const dropdownList = document.getElementById('dropdown-list');
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        inputField.addEventListener('focus', function () {
            dropdownList.classList.add('active');
        });

        inputField.addEventListener('blur', function () {
            setTimeout(() => {
                dropdownList.classList.remove('active');
            }, 200); // Delay closing the dropdown to handle click on dropdown items
        });

        inputField.addEventListener('input', function () {
            const inputValue = this.value.toLowerCase();
            dropdownItems.forEach(function (item) {
                const itemText = item.textContent.toLowerCase();
                if (itemText.includes(inputValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        dropdownItems.forEach(function (item) {
            item.addEventListener('click', function () {
                inputField.value = this.textContent;
                dropdownList.classList.remove('active');
            });
        });
    </script>

<script>
var $select1 = $('#select1'),
    $select2 = $('#select2'),
    $options = $select2.find('option');
    
$select1.on('change', function() {
    var selectedValue = this.value;
    if (selectedValue === 'Catch out') {
        $select2.html($options.clone()); // Show all options in select2
    } else {
        $select2.html('<option value="">If Catch Out, Where</option>'); // Show the default option
    }
}).trigger('change');
</script>

<script>
var $select1 = $('#select1'),
    $select2 = $('#select2');
    
$select1.on('change', function() {
    var selectedValue = this.value;
    if (selectedValue === 'Catch out') {
        $select2.parent().show(); // Show the container of select2
        $select2.prop('disabled', false); // Enable select2
    } else {
        $select2.val(''); // Reset select2 value
        $select2.prop('disabled', true); // Disable select2
        $select2.parent().hide(); // Hide the container of select2
    }
}).trigger('change');
</script>



@endsection
