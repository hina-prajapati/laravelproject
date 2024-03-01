@extends('layout2')
@section('content')

 <style>

   label{
    font-weight: bold;
   }
  .error{
    color: red;
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
#error-message{
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
        <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
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
                   <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                <input type="date" id="date" name="date" value="{{ old('date') }}" class="form-control m-2" placeholder="Date" max="{{ date('d-m-Y') }}" data-scroll="true" >
                </div>
                @error('date')
                        <div class="alert text-danger error">{{ $message }}</div>
                    @enderror
                </div>
             
                <div class="col-md-3 mt-3">
                <div class="form-group">
                <label>MyTeam:</label>
                <input type="text" name="myTeam" id="myTeam" value="{{ old('myTeam') }}" class="form-control m-2" placeholder="My Team">
                </div>
                @error('myTeam')
                        <div class="alert text-danger error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Opposition Team:</label>
                <input type="text" name="opppsitionTeam" value="{{ old('opppsitionTeam') }}" class="form-control m-2" placeholder="Opposion Team">
                </div>
                @error('opppsitionTeam')
                        <div class="alert text-danger error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Tournament:</label>
                <input type="text" name="tournament" value="{{ old('tournament') }}" class="form-control m-2" placeholder="tournament">
                </div>
                @error('tournament')
                        <div class="alert text-danger error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Vanue:</label>
                <input type="text" name="venue"  value="{{ old('venue') }}" class="form-control m-2" placeholder="Venue">
                </div>
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
                <option value="Leather Ball" {{ old('type_ball') == 'Leather Ball' ? 'selected' : '' }}>Leather Ball</option>
                <option value="Tennis Ball" {{ old('type_ball') == 'Tennis Ball' ? 'selected' : '' }}>Tennis Ball</option>
                <option value="Rubber Ball" {{ old('type_ball') == 'Rubber Ball' ? 'selected' : '' }}>Rubber Ball</option>
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

                <select name="match_type" id="select_opt" class="form-control" onchange="showfield(this.options[this.selectedIndex].value)"> 
                <option value="">Select Match Type</option>  
                <option value="Test-5 Days" {{ old('match_type') == 'Test-5 Days' ? 'selected' : '' }}>Test-5 Days</option>
                <option value="Test-3 Days" {{ old('match_type') == 'Test-3 Days' ? 'selected' : '' }}>Test-3 Days</option>
                <option value="Test-2 Days" {{ old('match_type') == 'Test-2 Days' ? 'selected' : '' }}>Test-2 Days</option>
                <option value="One Day-50 Over" {{ old('match_type') == 'One Day-50 Over' ? 'selected' : '' }}>One Day-50 Over</option>
                <option value="One Day-40 Over" {{ old('match_type') == 'One Day-40 Over' ? 'selected' : '' }}>One Day-40 Over</option>
                <option value="One Day-30 Over" {{ old('match_type') == 'One Day-30 Over' ? 'selected' : '' }}>One Day-30 Over</option>
                <option value="One Day-25 Over" {{ old('match_type') == 'One Day-25 Over' ? 'selected' : '' }}>One Day-25 Over</option>
                <option value="T20" {{ old('match_type') == 'T20' ? 'selected' : '' }}>T20</option>
                <option value="T10" {{ old('match_type') == 'T10' ? 'selected' : '' }}>T10</option>
                <option value="Other" {{ old('match_type') == 'Other' ? 'selected' : '' }}>Other</option>
                
            </select><br>
            <!-- <input style="border: none;" name="custom_match_type" value="{{ old('custom_match_type') }}"   onchange="showfield(this.options[this.selectedIndex].value)"> -->
          
            <div id="div1"></div>
                </div>
                <div class="alert text-danger" id="error-message">
                    @error('match_type') {{ $message }}
                     @enderror
                </div></div>
                
                
                
                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Select Role:</label>
                <div class="custom-select form-control m-2">
                <select id="select_role" name="select_role">
                <option value="">Select Role</option>
                <option value="Captain" {{ old('select_role') == 'Captain' ? 'selected' : '' }}>Captain</option>
                <option value="Vice-Captain" {{ old('select_role') == 'Vice-Captain' ? 'selected' : '' }}>Vice-Captain</option>
                <option value="Player" {{ old('select_role') == 'Player' ? 'selected' : '' }}>Player</option>
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
                <div class="custom-select form-control m-2" >
                <select name="match_result">
                <option value="">Match Result</option>
                <option value="Won"  {{ old('match_result') == 'Won' ? 'selected' : '' }}>Won</option>
                <option value="Lost"  {{ old('match_result') == 'Lost' ? 'selected' : '' }}>Lost</option>
                <option value="Draw/Tie"  {{ old('match_result') == 'Draw/Tie' ? 'selected' : '' }}>Draw/Tie</option>
                <option value="Abondoned"  {{ old('match_result') == 'Abondoned' ? 'selected' : '' }}>Abondoned</option>
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
                <option value="1" {{ old('batting_pos') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('batting_pos') == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('batting_pos') == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('batting_pos') == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('batting_pos') == '5' ? 'selected' : '' }}>5</option>
                <option value="6" {{ old('batting_pos') == '6' ? 'selected' : '' }}>6</option>
                <option value="7" {{ old('batting_pos') == '7' ? 'selected' : '' }}>7</option>
                <option value="8" {{ old('batting_pos') == '8' ? 'selected' : '' }}>8</option>
                <option value="9" {{ old('batting_pos') == '9' ? 'selected' : '' }}>9</option>
                <option value="10" {{ old('batting_pos') == '10' ? 'selected' : '' }}>10</option> 
                <option {{ old('batting_pos') == 'DNB' ? 'selected' : '' }}>DNB</option>
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
                <input type="number" id="runs" name="runs" value="{{ old('runs') }}" class="form-control m-2" placeholder="Runs.....">
                </div>
                @error('runs')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>
                
                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Total Ball Faced:</label>
                <input type="number" id="tbs" name="tbs"  value="{{ old('tbs') }}" class="form-control m-2" placeholder="Total Ball Faced.....">
                </div>
                @error('tbs')
                <div class="alert text-danger error">{{ $message }}</div>
            @enderror
                </div>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of 4s:</label>
                <input type="number" id="max4s" name="no4s" value="{{ old('no4s') }}" class="form-control m-2" onchange="validateInput('no4s', 4)" placeholder="Number of 4s.....">
                </div>
                @error('no4s')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

            
                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of 6s:</label>
                <input type="number" id="max6s" name="no6s"  value="{{ old('no6s') }}" class="form-control m-2" onchange="validateInput('no6s', 6)" placeholder="Number of 6s.....">
                </div>
                @error('no6s')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3 mb-4">
                <div class="from-group">
                <label>Out In Which Fashion:</label>
                <div class="col-xs-6">
                <select class="form-control custom-select form-control m-2" name="select1" id="select1" >
                <option value="">Out In Which Fashion</option>
                <option value="Bowled" {{ old('select1') == 'Bowled' ? 'selected' : '' }}>Bowled</option>
                <option value="Catch out" {{ old('select1') == 'Catch out' ? 'selected' : '' }}>Catch out</option>
                <option value="Caught & Bowled" {{ old('select1') == 'Caught & Bowled' ? 'selected' : '' }}>Caught & Bowled</option>
                <option value="Caught Behind" {{ old('select1') == 'Caught Behind' ? 'selected' : '' }}>Caught Behind</option>
                <option value="LBW" {{ old('select1') == 'LBW' ? 'selected' : '' }}>LBW</option>
                <option value="Hit Wicket" {{ old('select1') == 'Hit Wicket' ? 'selected' : '' }}>Hit Wicket</option>
                <option value="Retired Hurt" {{ old('select1') == 'Retired Hurt' ? 'selected' : '' }}>Retired Hurt</option>
                <option value="Not Out" {{ old('select1') == 'Not Out' ? 'selected' : '' }}>Not Out</option>
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
                <select class="form-control custom-select form-control m-2" name="select2" id="select2" >
                <!-- <option value="">If Catch Out, Where</option> -->
                <option value="Slip" {{ old('select2') == 'Slip' ? 'selected' : '' }}>Slip</option>
                <option value="Long On" {{ old('select2') == 'Long On' ? 'selected' : '' }}>Long On</option>
                <option value="Long Off" {{ old('select2') == 'Long Off' ? 'selected' : '' }}>Long Off</option>
                <option value="Mid On" {{ old('select2') == 'Mid On' ? 'selected' : '' }}>Mid On</option>
                <option value="Mid Off" {{ old('select2') == 'Mid Off' ? 'selected' : '' }}>Mid Off</option>
                <option value="Cover" {{ old('select2') == 'Cover' ? 'selected' : '' }}>Cover</option>
                <option value="Point" {{ old('select2') == 'Point' ? 'selected' : '' }}>Point</option>
                <option value="Silly Point"  {{ old('select2') == 'Silly Point' ? 'selected' : '' }}>Silly Point</option>
                <option value="Third Man" {{ old('select2') == 'Third Man' ? 'selected' : '' }}>Third Man</option>
                <option value="Deep Third Man" {{ old('select2') == 'Theep Third Man' ? 'selected' : '' }}>Deep Third Man</option>
                <option value="Gully" {{ old('select2') == 'Gully' ? 'selected' : '' }}>Gully</option>
                </select>
                </div>
                </div>
                </div>

                 <h5>Bowlling</h5>
                <hr class="">

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Overs Bowled:</label>
                <input type="text" name="overs_bowled" id="overs_bowled"  value="{{ old('overs_bowled') }}" class="form-control m-2" placeholder="Runs Given(Excluding Extra).....">
                </div>
                @error('overs_bowled')
                <div class="alert text-danger">{{ $message }}</div>
              @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Runs Given(Excluding Extra):</label>
                <input type="number" name="runGiven" id="runGiven"  value="{{ old('runGiven') }}" class="form-control m-2" placeholder="Runs Given(Excluding Extra).....">
                </div>
                @error('runGiven')
              <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Extras:</label>
                <input type="number" name="extras" id="extras"  value="{{ old('extras') }}" class="form-control m-2" placeholder="Extras.....">
                </div>
                @error('extras')
                 <div class="alert text-danger">{{ $message }}</div>
                 @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of Maidan Overs:</label>
                <input type="number" name="nomo" id="nomo"  value="{{ old('nomo') }}" class="form-control m-2" placeholder="Number Of Maidan Overs.....">
                </div>
                @error('nomo')
                <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3 mb-4">
                <div class="from-group">
                <label>Wickets Taken</label>
                <input type="number" name="wicket_taken" id="wicket_taken"  value="{{ old('wicket_taken') }}" class="form-control m-2"  placeholder="Wickets Taken.....">
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
                <select name="fielding_pos">
                <option value="">Fielding Position</option>
                <option value="Wicket Keeper" {{ old('fielding_pos') == 'Wicket Keeper' ? 'selected' : '' }}>Wicket Keeper</option>
                <option value="Slip" {{ old('fielding_pos') == 'Slip' ? 'selected' : '' }}>Slip</option>
                <option value="Long On" {{ old('fielding_pos') == 'Long On' ? 'selected' : '' }}>Long On</option>
                <option value="Long Off" {{ old('fielding_pos') == 'Long Off' ? 'selected' : '' }}>Long Off</option>
                <option value="Mid On" {{ old('fielding_pos') == 'Mid On' ? 'selected' : '' }}>Mid On</option>
                <option value="Mid Off" {{ old('fielding_pos') == 'Mid Off' ? 'selected' : '' }}>Mid Off</option>
                <option value="Cover" {{ old('fielding_pos') == 'Cover' ? 'selected' : '' }}>Cover</option>
                <option value="Point" {{ old('fielding_pos') == 'Point' ? 'selected' : '' }}>Point</option>
                <option value="Silly Point"  {{ old('fielding_pos') == 'Silly Point' ? 'selected' : '' }}>Silly Point</option>
                <option value="Third Man" {{ old('fielding_pos') == 'Third Man' ? 'selected' : '' }}>Third Man</option>
                <option value="Deep Third Man" {{ old('fielding_pos') == 'Deep Third Man' ? 'selected' : '' }}>Deep Third Man</option>
                <option value="Gully" {{ old('fielding_pos') == 'Gully' ? 'selected' : '' }}>Gully</option>
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
                <input type="number" name="norsif" value="{{ old('norsif') }}" class="form-control m-2"  placeholder="Number of Run Saved in Fielding.....">
                </div>
                @error('norsif')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of Catches:</label>
                <input type="number" name="noc" value="{{ old('noc') }}" class="form-control m-2" placeholder="Number Of Catches.....">
                </div>
                @error('noc')
                <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of Runs Outs:</label>
                <input type="number" name="norouts" value="{{ old('norouts') }}" class="form-control m-2" placeholder="Number Of Runs Outs.....">
                </div>
                @error('norouts')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Number Of stumpings:</label>
                <input type="number" name="nostump" value="{{ old('nostump') }}" class="form-control m-2" placeholder="Number Of stumpings.....">
                </div>
                @error('nostump')
                <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Runs Given by misfiled:</label>
                <input type="number" name="rgbmis" value="{{ old('rgbmis') }}" class="form-control m-2" placeholder="Runs Given by misfiled....">
                </div>
                @error('rgbmis')
                <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Catches Missed:</label>
                <input type="number" name="cmissed"  value="{{ old('cmissed') }}" class="form-control m-2" placeholder="Catches Missed.....">
                </div>
                @error('cmissed')
                <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Stumpings Missed:</label>
                <input type="number" name="stump_missed" value="{{ old('stump_missed') }}" class="form-control m-2" data-scroll="true" placeholder="Stumpings Missed.....">
                </div>
                @error('stump_missed')
                 <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Run-Out Missed:</label>
                <input type="number" name="runouts" value="{{ old('runouts') }}" class="form-control m-2" placeholder="Run-Out Missed.....">
                </div>
                @error('runouts')
                <div class="alert text-danger">{{ $message }}</div>
                @enderror
                </div>


                <div class="col-md-3 mt-3">
                <div class="from-group">
                <label>Award:</label>
                <div class="custom-select form-control m-2">
                <select name="award">
                <option value="">Award</option>
                <option value="Man of The Match" value="{{ old('date') }}">Man of The Match</option>
                <option value="Man of The Match" {{ old('award') == 'Man of The Match' ? 'selected' : '' }}>Man of The Match</option>
                <option value="Best Bowler" {{ old('award') == 'Best Bowler' ? 'selected' : '' }}>Best Bowler</option>
                <option value="Best Batsman" {{ old('award') == 'Best Batsman' ? 'selected' : '' }}>Best Batsman</option>
                <option value="Best Fielder" {{ old('award') == 'Best Fielder' ? 'selected' : '' }}>Best Fielder</option>
                <option value="Best All-Rounder" {{ old('award') == 'Best All-Rounder' ? 'selected' : '' }}>Best All-Rounder</option>
                <option value="None" {{ old('award') == 'None' ? 'selected' : '' }}>None</option>
                </select>
                </div>
                </div>
                @error('award')
    <div class="alert text-danger">{{ $message }}</div>
@enderror
                </div>

               

                <!-- <div class="col-md-3">
                <div class="from-group">
                <label class="m-2">Images</label>
                <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                </div>
                </div> -->
                </div>
                <button type="submit" id="submitBtn" class="btn comon-btn btn-success mt-3 ">Submit</button>
                    <!-- <a href="{{ url('/user/dashboard/index') }}" class="btn btn-warning" style="float: start;">Back</a> -->
            </form>
          </div>
         </div>
      </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// $(document).ready(function() {
//     // When the select element changes
//     $('#dropdown-input').on('change', function() {
        
//         if ($(this).val() === 'other') {
//             // If the selected value is empty, show the text input
//             $('#custom-match-type').show();
//         } else {
//             // If a value is selected, hide the text input
//             $('#custom-match-type').hide();
//         }
//     });

//     // // When the text input changes
//     // $('#custom-match-type').on('input', function() {
//     //     // Update the select element's value with the typed value
//     //     $('#dropdown-input').val($(this).val());
//     // });
// });
</script>


<!-- <script>
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
    </script> -->







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
        <!-- <script>
            function toggleCustomInput() {
                var dropdown = document.getElementById("dropdown-input");
                var customInput = document.getElementById("custom-match-type");

                if (dropdown.value === "Other") {
                    customInput.style.display = "inline-block";
                } else {
                    customInput.style.display = "none";
                }
            }
        </script> -->



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
        if (decimalPart && parseInt(decimalPart) > 5) {
            // Display an error message
            alert("You cannot type numbers with a decimal part greater than '.6'");
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
    if (oversBowledInput.value === '0') {
        disableInputs();
    }

    // Add event listener for input
    oversBowledInput.addEventListener('input', function(event) {
        // Get the value of overs_bowled
        var oversBowledValue = parseFloat(event.target.value);

        // Check if overs_bowled is 0
        if (oversBowledValue === 0) {
            disableInputs();
        } else {
            enableInputs();
        }
    });

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
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include jQuery Validation plugin -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
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
            },
            messages: {
                date: {
                    required: "Enter Date",
                },
                myTeam: {
                    required: "Please enter your Team",
                },
                award: {
                    required: "Select field",
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection
