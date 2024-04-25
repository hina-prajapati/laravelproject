@extends('layout2')
@section('content')

<style>
label {
    font-weight: bold;
}

.error {
    color: red;
}

label#award-error {
    margin-top: 16px;
}

label#type_ball-error {
    margin-top: 16px;
}

label#select_opt_match_type-error {
    margin-top: 16px;
}

label#select_opt-error {
    margin-top: 16px;

}

label#select_role-error {
    margin-top: 16px;
}

label#match_result-error {
    margin-top: 16px;
}

label#batting_pos-error {
    margin-top: 16px;
}

label#fielding_pos-error {
    margin-top: 16px;
}

select {
    word-wrap: normal;
    width: 100%;
    border: none;
    background: #eeeeee14;
    margin-top: 6px;
}

.right-fgo li a {
    color: #fff !important;
    font-size: 15px;
    font-family: "Roboto", sans-serif;
}

#error-message {
    color: red;
}
</style>
<style>
#custom-match-type {
    width: 250px;
    position: relative;

}
</style>
<section class="banner-part sub-main-banner float-start w-100">

    <div class="baner-imghi">
        <img src="/assets2/images/sub-banner01.jpg" alt="sub-banner" />
    </div>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    <div class="sub-banner">
        <div class="container">
            <h1 class="text-center"> Create Match</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Match</li>
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
                    <h2> Create Match </h2>
                    <!-- <h2 class="mt-5"> Get In Touch </h2> -->



                    <form id="myForm" action="/post" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4">

                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label>Date:</label>
                                    <input type="date" id="date" name="date" value="{{ old('date') }}"
                                        class="form-control m-2" placeholder="Date" data-scroll="true">
                                </div>

                                @error('date')
                                <div class="alert text-danger" id="name-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label>MyTeam:</label>
                                    <input type="text" name="myTeam" id="myTeam" value="{{ old('myTeam') }}"
                                        class="form-control m-2" placeholder="My Team">
                                </div>
                                <div id="myTeamErrorMsg" style="color: red;"></div>
                                @error('myTeam')
                                <div class="alert text-danger" id="errorMsg" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Opposition Team:</label>
                                    <input type="text" name="opppsitionTeam" id="opppsitionTeam"
                                        value="{{ old('opppsitionTeam') }}" class="form-control m-2"
                                        placeholder="Opposion Team" data-scroll="true">
                                </div>
                                <div id="oppositionTeamErrorMsg" style="color: red;"></div>
                                @error('opppsitionTeam')
                                <div class="alert text-danger error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Tournament:</label>
                                    <input type="text" name="tournament" id="tournament" value="{{ old('tournament') }}"
                                        class="form-control m-2" placeholder="tournament">
                                </div>
                                <div id="tournamentError" style="color: red;"></div>
                                @error('tournament')
                                <div class="alert text-danger error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Vanue:</label>

                                    <input type="text" name="venue" id="venue" value="{{ old('venue') }}"
                                        class="form-control m-2" placeholder="Venue">
                                </div>
                                <div id="venueErrorMsg" style="color: red;"></div>
                                @error('venue')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Type:</label>
                                    <div class="custom-select form-control m-2">
                                        <select id="type_ball" name="type_ball">
                                            <option value="">Select Type</option>
                                            <?php
$ballTypes = ['Leather Ball', 'Tennis Ball', 'Rubber Ball'];
foreach ($ballTypes as $ballType) {
    $selected = (old('type_ball') == $ballType) ? 'selected' : '';
    echo '<option value="' . $ballType . '" ' . $selected . '>' . $ballType . '</option>';
}
?>
                                        </select>

                                    </div>
                                </div>
                                @error('type_ball')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Match Type:</label>
                <div class="custom-dropdown form-control m-2">
                <select id="dropdown-input" name="match_type" class="dropdown-input">
                <option value="">Select Match</option>
                <option value="Test-5 Days" {{ old('match_type') == 'Test-5 Days' ? 'selected' : '' }}>Test-5 Days</option>
                <option value="Test-3 Days" {{ old('match_type') == 'Test-3 Days' ? 'selected' : '' }}>Test-3 Days</option>
                <option value="Test-2 Days" {{ old('match_type') == 'Test-2 Days ' ? 'selected' : '' }}>Test-2 Days</option>
                <option value="One Day-50 Over" {{ old('match_type') == 'One Day-50 Over ' ? 'selected' : '' }}>One Day-50 Over</option>
                <option value="One Day-40 Over" {{ old('match_type') == 'One Day-40 Over ' ? 'selected' : '' }}>One Day-40 Over</option>
                <option value="One Day-30 Over" {{ old('match_type') == 'One Day-30 Over ' ? 'selected' : '' }}>One Day-30 Over</option>
                <option value="One Day-25 Over" {{ old('match_type') == 'One Day-25 Over ' ? 'selected' : '' }}>One Day-25 Over</option>
                <option value="T20" {{ old('match_type') == 'T20 ' ? 'selected' : '' }}>T20</option>
                <option value="T10" {{ old('match_type') == 'T10 ' ? 'selected' : '' }}>T10</option>
                <option value="other" {{ old('match_type') == 'other ' ? 'selected' : '' }}>Other</option>
                </select><br><br>
                <div class="col-md-3 mt-3">
                <input type="text" id="custom-match-type" name="custom_match_type"  class="dropdown-input" placeholder="Type Custom Match Type..." style="display: none !important; width: 250px;     display: inline-block; top: -24px;  left: -6px !important;     position: relative;" value="{{ old('custom_match_type') }}">
                </div>
                </div>
                </div>
                <div class="alert text-danger" id="error-message">
                    @error('match_type') {{ $message }}
                     @enderror</div>

                </div> -->
                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Match Type:</label>
                                    <div class="custom-select form-control m-2">
                                        <select name="match_type" id="select_opt_match_type"
                                            onchange="showfield(this.options[this.selectedIndex].value)">
                                            <option value="">Select Match Type</option>
                                            <?php
$matchTypes = [
    'Test-5 Days',
    'Test-3 Days',
    'Test-2 Days',
    'One Day-50 Over',
    'One Day-40 Over',
    'One Day-30 Over',
    'One Day-25 Over',
    'T20',
    'T10',
    'Other',
];
foreach ($matchTypes as $matchType) {
    $selected = (old('match_type') == $matchType) ? 'selected' : '';
    echo '<option value="' . $matchType . '" ' . $selected . '>' . $matchType . '</option>';
}
?>
                                        </select>

                                    </div>
                                    <!-- <input style="border: none;" name="custom_match_type" value="{{ old('custom_match_type') }}"   onchange="showfield(this.options[this.selectedIndex].value)"> -->

                                    <div id="div1"></div>
                                </div>
                                <div class="alert text-danger" id="error-message">
                                    @error('match_type') {{ $message }}
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Select Role:</label>
                                    <div class="custom-select form-control m-2">
                                        <select id="select_role" name="select_role">
                                            <option value="">Select Role</option>
                                            <?php
$roles = [
    'Captain',
    'Vice-Captain',
    'Player',
];
foreach ($roles as $role) {
    $selected = (old('select_role') == $role) ? 'selected' : '';
    echo '<option value="' . $role . '" ' . $selected . '>' . $role . '</option>';
}
?>
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
                                            <?php
$results = [
    'Won',
    'Lost',
    'Draw/Tie',
    'Abandoned',
];
foreach ($results as $result) {
    $selected = (old('match_result') == $result) ? 'selected' : '';
    echo '<option value="' . $result . '" ' . $selected . '>' . $result . '</option>';
}
?>
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
                                    <div class="custom-select form-control m-2">
                                        <select name="batting_pos" id="batting_pos">
                                            <option value="">Batting Position</option>
                                            <?php
for ($i = 1; $i <= 10; $i++) {
    $selected = (old('batting_pos') == strval($i)) ? 'selected' : '';
    echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
}
$selected = (old('batting_pos') == 'DNB') ? 'selected' : '';
echo '<option value="DNB" ' . $selected . '>DNB</option>';
?>
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
                                    <input type="number" id="runs" name="runs" value="{{ old('runs') }}"
                                        class="form-control m-2" placeholder="Runs.....">
                                </div>
                                @error('runs')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Total Ball Faced:</label>
                                    <input type="number" id="tbs" name="tbs" value="{{ old('tbs') }}"
                                        class="form-control m-2" placeholder="Total Ball Faced.....">
                                </div>
                                @error('tbs')
                                <div class="alert text-danger error">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Number Of 4s:</label>
                                    <input type="number" id="max4s" name="no4s" value="{{ old('no4s') }}"
                                        class="form-control m-2" placeholder="Number of 4s.....">
                                </div>
                                @error('no4s')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Number Of 6s:</label>
                                    <input type="number" id="max6s" name="no6s" value="{{ old('no6s') }}"
                                        class="form-control m-2" placeholder="Number of 6s.....">
                                </div>
                                @error('no6s')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3 mb-4">
                                <div class="from-group">
                                    <label>Out In Which Fashion:</label>
                                    <div class="col-xs-6">
                                        <select class="form-control custom-select form-control m-2" name="select1"
                                            id="select1">
                                            <option value="">Out In Which Fashion</option>
                                            <?php
$fashions = [
    'Bowled',
    'Catch out',
    'Caught & Bowled',
    'Caught Behind',
    'LBW',
    'Hit Wicket',
    'Retired Hurt',
    'Not Out',
];
foreach ($fashions as $fashion) {
    $selected = (old('select1') == $fashion) ? 'selected' : '';
    echo '<option value="' . $fashion . '" ' . $selected . '>' . $fashion . '</option>';
}
?>
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
                                        <select class="form-control custom-select form-control m-2" name="select2"
                                            id="select2">
                                            <option value="">Fielding Position</option>
                                            <?php
$positions = [
    'Slip',
    'Long On',
    'Long Off',
    'Mid On',
    'Mid Off',
    'Cover',
    'Point',
    'Silly Point',
    'Third Man',
    'Deep Third Man',
    'Gully',
];
foreach ($positions as $position) {
    $selected = (old('select2') == $position) ? 'selected' : '';
    echo '<option value="' . $position . '" ' . $selected . '>' . $position . '</option>';
}
?>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <h5>Bowlling</h5>
                            <hr class="">

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Overs Bowled:</label>
                                    <input type="text" name="overs_bowled" id="overs_bowled"
                                        value="{{ old('overs_bowled') }}" class="form-control m-2"
                                        placeholder="Runs Given(Excluding Extra).....">
                                </div>
                                <div id="error_message" style="color: red;"></div>

                                @error('overs_bowled')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Runs Given(Excluding Extra):</label>
                                    <input type="number" name="runGiven" id="runGiven" value="{{ old('runGiven') }}"
                                        class="form-control m-2" placeholder="Runs Given(Excluding Extra).....">
                                </div>
                                @error('runGiven')
                                <div class="alert text-danger error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Extras:</label>
                                    <input type="number" name="extras" id="extras" value="{{ old('extras') }}"
                                        class="form-control m-2" placeholder="Extras.....">
                                </div>
                                @error('extras')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Number Of Maidan Overs:</label>
                                    <input type="number" id="nomo" name="nomo" value="{{ old('nomo') }}"
                                        class="form-control m-2" placeholder="Number Of Maidan Overs.....">
                                </div>
                                @error('nomo')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3 mb-4">
                                <div class="from-group">
                                    <label>Wickets Taken</label>
                                    <input type="number" name="wicket_taken" id="wicket_taken"
                                        value="{{ old('wicket_taken') }}" class="form-control m-2"
                                        placeholder="Wickets Taken.....">
                                </div>
                                @error('wicket_taken')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <h5>Fielding</h5>
                            <hr class="">


                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Fielding Position:</label>
                                    <div class="custom-select form-control m-2">
                                        <select name="fielding_pos" id="fielding_pos">
                                            <option value="">Fielding Position</option>
                                            <?php
$positions = [
    'Wicket Keeper',
    'Slip',
    'Long On',
    'Long Off',
    'Mid On',
    'Mid Off',
    'Cover',
    'Point',
    'Silly Point',
    'Third Man',
    'Deep Third Man',
    'Gully',
];
foreach ($positions as $position) {
    $selected = (old('fielding_pos') == $position) ? 'selected' : '';
    echo '<option value="' . $position . '" ' . $selected . '>' . $position . '</option>';
}
?>
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
                                    <input type="number" id="norsif" name="norsif" value="{{ old('norsif') }}"
                                        class="form-control m-2" placeholder="Number of Run Saved in Fielding.....">
                                </div>
                                @error('norsif')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Number Of Catches:</label>
                                    <input type="number" id="noc" name="noc" max="10" value="{{ old('noc') }}"
                                        class="form-control m-2" placeholder="Number Of Catches.....">
                                </div>
                                @error('noc')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Number Of Runs Outs:</label>
                                    <input type="number" name="norouts" id="norouts" max="10"
                                        value="{{ old('norouts') }}" class="form-control m-2"
                                        placeholder="Number Of Runs Outs.....">
                                </div>
                                @error('norouts')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Number Of stumpings:</label>
                                    <input type="number" id="nostump" name="nostump" max="10"
                                        value="{{ old('nostump') }}" class="form-control m-2"
                                        placeholder="Number Of stumpings.....">
                                </div>
                                @error('nostump')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Runs Given by misfiled:</label>
                                    <input type="number" id="rgbmis" name="rgbmis" value="{{ old('rgbmis') }}"
                                        class="form-control m-2" placeholder="Runs Given by misfiled....">
                                </div>
                                @error('rgbmis')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Catches Missed:</label>
                                    <input type="number" id="cmissed" name="cmissed" value="{{ old('cmissed') }}"
                                        class="form-control m-2" placeholder="Catches Missed.....">
                                </div>
                                @error('cmissed')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Stumpings Missed:</label>
                                    <input type="number" id="stump_missed" name="stump_missed"
                                        value="{{ old('stump_missed') }}" class="form-control m-2" data-scroll="true"
                                        placeholder="Stumpings Missed.....">
                                </div>
                                @error('stump_missed')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Run-Out Missed:</label>
                                    <input type="number" id="runouts" name="runouts" value="{{ old('runouts') }}"
                                        class="form-control m-2" placeholder="Run-Out Missed.....">
                                </div>
                                @error('runouts')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-md-3 mt-3">
                                <div class="from-group">
                                    <label>Award:</label>
                                    <div class="custom-select form-control m-2">
                                        <select name="award" id="award">
                                            <option value="">Award</option>
                                            <?php
$awards = [
    'Man of The Match',
    'Best Bowler',
    'Best Batsman',
    'Best Fielder',
    'Best All-Rounder',
    'None',
];
foreach ($awards as $award) {
    $selected = (old('award') == $award) ? 'selected' : '';
    echo '<option value="' . $award . '" ' . $selected . '>' . $award . '</option>';
}
?>
                                        </select>

                                    </div>
                                </div>

                            </div>

                            @error('award')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror

                            <!-- <div class="col-md-3">
                <div class="from-group">
                <label class="m-2">Images</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                </div>
                </div> -->
                        </div>
                        <button type="submit" class="btn comon-btn btn-success mt-3 ">Submit</button>
                        <!-- <a href="{{ url('/user/dashboard/index') }}" class="btn btn-warning" style="float: start;">Back</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

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

<script>
$(document).ready(function() {
    $('#date').change(function() {
        var now = new Date(); // Current Date
        var selectedDate = new Date($('#date').val()); // Date selected by user

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
$(document).ready(function() {
    // Add event listener for keyup
    $('#overs_bowled').on('keyup', function(event) {
        var inputField = $(this);
        var inputValue = inputField.val();
        var decimalPart = inputValue.split('.')[1];

        // Check if the decimal part is greater than .5
        if (decimalPart && parseInt(decimalPart) > 5) {
            // Show an alert
            alert("Numbers with a decimal part greater than '.5' are not allowed");
            // Reset the input field value
            inputField.val(inputValue.split('.')['']); // Set the value to the integer part
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

    // Remove any non-numeric and non-decimal characters
    inputValue = inputValue.replace(/[^0-9.]/g, '');

    // Update the input value
    event.target.value = inputValue;
});
</script>

<script>
$(document).ready(function() {
    // Get jQuery references to the input elements
    var battingPositionInput = $('#batting_pos');
    var runsInput = $('#runs');
    var tbsInput = $('#tbs');
    var no4sInput = $('#max4s');
    var no6sInput = $('#max6s');
    var select1Input = $('#select1');
    var select2Input = $('#select2');

    // Function to handle changes in batting position
    function handleBattingPositionChange() {
        // Check if the batting position is "DNB"
        if (battingPositionInput.val() === 'DNB') {
            // Disable all input fields
            runsInput.prop('disabled', true).val(0);
            tbsInput.prop('disabled', true).val(0);
            no4sInput.prop('disabled', true).val(0);
            no6sInput.prop('disabled', true).val(0);
            select1Input.prop('disabled', true).val('').trigger('change');
            select2Input.prop('disabled', true).val('').trigger('change');
        } else {
            // Enable all input fields
            runsInput.prop('disabled', false);
            tbsInput.prop('disabled', false);
            no4sInput.prop('disabled', false);
            no6sInput.prop('disabled', false);
            select1Input.prop('disabled', false);
            select2Input.prop('disabled', false);
        }
    }

    // Attach event handler for change in batting position
    battingPositionInput.on('change', handleBattingPositionChange);

    // Call the function initially to handle the initial state
    handleBattingPositionChange();
});
</script>


<script>
$(document).ready(function() {
    var oversBowledInput = $('#overs_bowled');
    var runGivenInput = $('#runGiven');
    var extrasInput = $('#extras');
    var nomoInput = $('#nomo');
    var wicketsTakenInput = $('#wicket_taken');

    // Function to disable inputs
    function disableInputs() {
        runGivenInput.val(0).prop('disabled', true);
        extrasInput.val(0).prop('disabled', true);
        nomoInput.val(0).prop('disabled', true);
        wicketsTakenInput.val(0).prop('disabled', true);
    }

    // Function to enable inputs
    function enableInputs() {
        runGivenInput.prop('disabled', false);
        extrasInput.prop('disabled', false);
        nomoInput.prop('disabled', false);
        wicketsTakenInput.prop('disabled', false);
    }

    // Check the value of oversBowledInput initially
    if (oversBowledInput.val() === '0') {
        disableInputs();
    }

    // Add input event listener to oversBowledInput
    oversBowledInput.on('input', function(event) {
        var oversBowledValue = parseFloat($(this).val());

        if (oversBowledValue === 0) {
            disableInputs();
        } else {
            enableInputs();
        }
    });
});
</script>



<script>
var oversBowledInput = document.getElementById('overs_bowled');
var wicketsTakenInput = document.getElementById('wicket_taken');

oversBowledInput.addEventListener('input', updateMaxWickets);

function updateMaxWickets() {
    // Get the value of overs_bowled
    var oversBowledValue = parseFloat(oversBowledInput.value);

    // Set the maximum value of wickets taken based on overs_bowled
    if (oversBowledValue >= 1.4) {
        // alert('Value should be 10 or equal to 10');
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

oversBowledInput.addEventListener('input', function() {
    updateMaxWickets();
});

updateMaxWickets();
</script>


<script type="text/javascript">
var otherInputValue = '';
var customMatchTypeShown = false;

function showfield(name) {
    var inputField = document.createElement('input');
    inputField.type = 'text';
    inputField.setAttribute('name', 'custom_match_type');

    // If the custom match type input field has been shown at least once
    if (customMatchTypeShown && otherInputValue !== '') {
        inputField.value = otherInputValue;
    }

    if (name === 'Other') {
        // If "Other" is selected, add the input field with the stored value
        document.getElementById('div1').innerHTML = 'Other: ';
        document.getElementById('div1').appendChild(inputField);
        customMatchTypeShown = true; // Set the flag to true
        // Add event listener to update otherInputValue when input field changes
        inputField.addEventListener('input', function() {
            otherInputValue = inputField.value;
        });
    } else {
        // If any other option is selected, clear the input field and store its value
        otherInputValue = '';
        document.getElementById('div1').innerHTML = '';
    }
}
</script>

<script>
$(document).ready(function($) {
    $("#myForm").validate({

        rules: {
            date: {
                required: true,
            },
            myTeam: {
                required: true,

            },
            award: {
                required: true,

            },
            opppsitionTeam: {
                required: true,

            },
            tournament: {
                required: true,

            },
            venue: {
                required: true,
            },

            norouts: {
                required: true,
                max: 10
            },
            noc: {
                required: true,
                max: 10
            },
            norsif: {
                required: true,

            },
            fielding_pos: {
                required: true,
            },
            nostump: {
                required: true,
            },
            rgbmis: {
                required: true,
            },
            cmissed: {
                required: true,
            },
            stump_missed: {
                required: true,
            },
            runouts: {
                required: true,
            },
            overs_bowled: {
                required: true,
            },
            nostump: {
                required: true,
                max: 10
            },
            type_ball: {
                required: true,
            },
            match_type: {
                required: true,
            },
            select_role: {
                required: true,
            },
            match_result: {
                required: true,
            },
            select1: {
                required: true,
            },
            batting_pos: {
                required: true,
            },
            runs: {
                required: true,
            },
            tbs: {
                required: true,
            },
            no4s: {
                required: true,
            },
            no6s: {
                required: true,
            },
            runGiven: {
                required: true,
            },
            extras: {
                required: true,
            },
            nomo: {
                required: true,
            },
            wicket_taken: {
                required: true,
            },

        },
        messages: {
            date: {
                required: "Enter Date",
            },
            myTeam: {
                required: "Please enter Your Team",

            },
            award: {
                required: "Select field",
            },
            opppsitionTeam: {
                required: "Please enter your Opppsition Team",

            },
            tournament: {
                required: "Please enter your Tournament",

            },
            norouts: {
                required: "Enter your Number Of Runs Outs",
            },
            noc: {
                required: "Enter your Number Of Catches:",
                max: "Please enter a value less than or equal to 10.",
            },

            nostump: {
                required: "Enter your Number Of Catches:",
                max: "Please enter a value less than or equal to 10.",
            },
            batting_pos: {
                batting_pos: "Batting Position field is required",
            },
        },

    });
    // Prevent form submission if validation fails

});
</script>


<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        var runs = parseInt($('#runs').val());
        var tbs = parseInt($('#tbs').val());
        var runGiven = parseInt($('#runGiven').val());
        var extras = parseInt($('#extras').val());

        // Check if "tbs" is 0 and "runs" is more than 6
        if (tbs === 0 && runs > 6) {
            alert('If Total Balls is 0, Runs cannot be more than 6.');
            event.preventDefault(); // Prevent form submission
            scrollToError($('#runs'));
            return false;
        }

        // Check if extras exceed or equal runs
        if (extras > runGiven) {
            alert('Extras cannot exceed total Runs Given.');
            event.preventDefault(); // Prevent form submission
            scrollToError($('#extras'));
            return false;
        }
    });

    function scrollToError($element) {
        $('html, body').animate({
            scrollTop: $element.offset().top
        }, 500);
        $element.focus();
    }
});
</script>

<script>
$(document).ready(function() {
    $("input[name='myTeam']").keydown(function() {
        $("#myTeamErrorMsg").text("");
    });

    $("input[name='myTeam']").keyup(function() {
        var inputValue = $(this).val();
        if (!areOnlyCharacters(inputValue)) {
            $("#myTeamErrorMsg").text("Only characters are allowed.");
        } else {
            $("#myTeamErrorMsg").text("");
        }
    });


});

$(document).ready(function() {
    $("input[name='opppsitionTeam']").keydown(function() {
        $("#oppositionTeamErrorMsg").text("");
    });

    $("input[name='opppsitionTeam']").keyup(function() {
        var inputValue = $(this).val();
        if (!areOnlyCharacters(inputValue)) {
            $("#oppositionTeamErrorMsg").text("Only characters are allowed.");
        } else {
            $("#oppositionTeamErrorMsg").text("");
        }
    });
});

$(document).ready(function() {
    $("input[name='tournament']").keydown(function() {
        $("#tournamentError").text("");
    });

    $("input[name='tournament']").keyup(function() {
        var inputValue = $(this).val();
        if (!areOnlyCharacters(inputValue)) {
            $("#tournamentError").text("Only characters are allowed.");
        } else {
            $("#tournamentError").text("");
        }
    });
});

$(document).ready(function() {
    $("input[name='venue']").keydown(function() {
        $("#venueErrorMsg").text("");
    });

    $("input[name='venue']").keyup(function() {
        var inputValue = $(this).val();
        if (!areOnlyCharacters(inputValue)) {
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

<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        var nomo = parseInt($('#nomo').val());
        var overs_bowled = parseInt($('#overs_bowled').val());

        // Check if Number Of Maidan Overs is more than Overs Bowled
        if (nomo > overs_bowled) {
            alert('Number Of Maidan Overs cannot be more than Overs Bowled.');
            scrollToError($('#nomo'));
            event.preventDefault(); // Prevent form submission
            return false;
        }


    });

    function scrollToError($element) {
        $('html, body').animate({
            scrollTop: $element.offset().top
        }, 500);
        $element.focus();
    }
});
</script>


<script>
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        var no4s = parseInt($('#max4s').val());
        var no6s = parseInt($('#max6s').val());
        var runs = parseInt($('#runs').val());
        var calculatedRuns = (no4s * 4) + (no6s * 6);

        // Check if the calculated runs exceed the total runs
        if (calculatedRuns > runs) {
            alert('The total number of 4s and 6s cannot exceed total runs.');
            scrollToError($('#max4s')); // You can scroll to any relevant input field
            event.preventDefault(); // Prevent form submission
            return false;
        }
    });

    function scrollToError($element) {
        $('html, body').animate({
            scrollTop: $element.offset().top
        }, 500);
        $element.focus();
    }
});
</script>


<script>
$(document).ready(function() {
    // Attach event handler for form submission
    $('#myForm').submit(function(event) {
        // Get the values of Number Of Catches, Number Of Runs Outs, and Number Of Stumpings
        var noc = parseInt($('#noc').val()) || 0;
        var norouts = parseInt($('#norouts').val()) || 0;
        var nostump = parseInt($('#nostump').val()) || 0;

        // Calculate the total
        var total = noc + norouts + nostump;

        // Check if the total exceeds 10
        if (total > 10) {
            // Display error message after the input fields
            $('#noc').after(
                '<span class="error">The total for Number Of Catches, Number Of Runs Outs, and Number Of Stumpings cannot exceed 10.</span>'
            );
            // $('#norouts').after('<span class="error">The total for Number Of Catches, Number Of Runs Outs, and Number Of Stumpings cannot exceed 10.</span>');
            // $('#nostump').after('<span class="error">The total for Number Of Catches, Number Of Runs Outs, and Number Of Stumpings cannot exceed 10.</span>');
            // Prevent form submission
            event.preventDefault();
        }
    });
});
</script>

@endsection