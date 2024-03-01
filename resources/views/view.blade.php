@extends('FrontUser')
@extends('layoutt')
@section('admin')


<style>


select {
    word-wrap: normal;
    border: none;
}

.image-row.img-responsive.mt-4 {
    width: 100px;
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
a.btn.btn-warning {
    float: inline-end;
}

.card-body{
    padding: 50px;
}

.image-row.img-responsive.mt-4 {
    width: 100px;
    display: flex !important;
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
                <h2 class="jdksghk">View Match</h2>
                <a href="{{ url('/user/dashboard/index') }}" class="btn btn-success" style="float: start;">Back</a>

            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <p><strong>Date:</strong> {{ $posts->date }}</p>
                        <p><strong>My Team:</strong> {{ $posts->myTeam }}</p>
                        <p><strong>Opposition Team:</strong> {{ $posts->opppsitionTeam }}</p>
                        <p><strong>Venue:</strong> {{ $posts->venue }}</p>
                        <p><strong>Select or Type Match Type:</strong>{{ $posts->match_type }}</p>
                        <p><strong>Select Role:</strong>{{ $posts->select_role }}</p>
                        <p><strong>Match Result:</strong>{{ $posts->match_result }}</p>
                        <p><strong>Batting Position:</strong>{{ $posts->batting_pos }}</p>
                        <p><strong>Runs:</strong>{{ $posts->runs }}</p>
              
                   
                      
                    </div>
                    <div class="col-md-4">
                    <p><strong>Overs Bowled:</strong>{{ $posts->overs_bowled }}</p>
                        <p><strong>Runs Given(Excluding Extra):</strong>{{ $posts->runGiven }}</p>
                        <p><strong>Extras:</strong>{{ $posts->extras }}</p>
                        <p><strong>Number Of Maidan Overs:</strong>{{ $posts->nomo }}</p>
                        <p><strong>Wickets Taken:</strong>{{ $posts->wicket_taken }}</p>
                        <p><strong>Number of Run Saved in Fielding:</strong>{{ $posts->norsif }}</p>
                        <p><strong>Number Of Catches:</strong>{{ $posts->noc }}</p>
                        <p><strong>Number Of 4s::</strong>{{ $posts->no4s }}</p>
                        <p><strong>Number Of 6s:</strong>{{ $posts->no6s }}</p>
                </div>

                <div class="col-md-4">
                <p><strong>Number Of stumpings:</strong>{{ $posts->nostump }}</p>
                        <p><strong>Runs Given by misfiled:</strong>{{ $posts->rgbmis }}</p>
                        <p><strong>Catches Missed:</strong>{{ $posts->cmissed }}</p>
                        <p><strong>Stumpings Missed:</strong>{{ $posts->stump_missed }}</p>
                        <p><strong>Total Balls Faced:</strong>{{ $posts->tbs }}</p>
                        <p><strong>Run-Out Missed:</strong>{{ $posts->runouts }}</p>
                        <p><strong>Award:</strong>{{ $posts->award }}</p>
                        <p><strong>Wicket In Which Fashion:</strong>{{ $posts->fielding_pos }}</p>
                        <p><strong>Number Of Runs Outs:</strong>{{ $posts->norouts }}</p>
                        <p><strong>Fielding Position:</strong>{{ $posts->select1 }}</p>
                        <p><strong>If Catch Out, Where:</strong>{{ $posts->select2 }}</p>
                </div>

                <!-- Add more content styling as needed -->

                <div class="image-row img-responsive mt-4">
                    @if (count($posts->images) > 0)
                        @foreach ($posts->images as $img)
                            <img src="/images/{{ $img->image }}" class="img-thumbnail" alt="" srcset="">
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>

<script></script>
@endsection
