@extends('FrontUser')
@extends('layoutt')
@section('admin')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
<style>
    /* Add this CSS to your stylesheet */
.image-row {
    display: flex;
    overflow-x: auto; /* Enable horizontal scrolling */
    max-width: 100%; /* Limit the width to the container size */
    gap: 10px; /* Adjust the gap between images as needed */
}

.image-row img {
    max-height: 100px; /* Set a maximum height for the images */
    max-width: 100px; /* Set a maximum width for the images */
}

</style>
<div class="row">



    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a href="{{ url('/create') }}" class="btn btn-success btn-sm mt-4 p-2 ms-2" title="Add New Post">Create Match</a>
    <br/><br/>
            
<div class="panel-body">

<form action="/user/dashboard/filter" method="GET">
    <div class="row">
        <div class="col-md-5 form-group">
            <label for="">Start Date</label>
            <input type="date" name="start_date" class="form-control">
        </div>
        <div class="col-md-5 form-group">
            <label for="">Date From</label>
            <input type="date" name="end_date" class="form-control">
        </div>
        <div class="col-md-2 form-group" style="margin-top:25px;">
            <input type="submit" class="btn btn-primary" value="Search">
        </div>
    </div>
</form>
</div>
              <!-- <h2>All Data</h2> -->
            </div>

            
<div class="card-body">
 
    <div class="table-responsive">
    <h2>Match Post List</h2>
    <table class="table table-striped" id="example">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>My Team</th>
            <th>Opposition Team</th>
            <th>Venue</th>
            <th>Match Type</th>
             <!-- <th>Custome Match Type</th>
            <th>Role</th>
            <th>Match Result</th>
            <th>Batting Pos</th>
            <th>Runs</th>
            <th>4s</th>
            <th>6s</th>
            <th>Overs Bowled</th>
            <th>Runs Given</th>
            <th>Extras</th>
            <th>NO MO</th>
            <th>Wickets Taken</th>
            <th>NO R/S/F</th>
            <th>NOC</th>
            <th>NO R Outs</th>
            <th>NO Stump</th>
            <th>RGBMIS</th>
            <th>CMISSED</th>
            <th>Stump Missed</th>
            <th>Runouts</th>
            <th>Award</th>
            <th>Wicket in Which Fashion</th>
            <th>If Catch Out</th>
            <th>Fielding Position</th> -->
            <!-- <th>Images</th> -->
            <th>Edit</th>
            <th>View</th>
            <th>Delete</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    <?php $sno = 1; ?>
        @foreach ($posts as $post)
        <tr>
            <!-- <th scope="row">{{ $post->id }}</th> -->
            <td><?= $sno++ ?></td>
            <td>{{ $post->date }}</td>
            <td>{{ $post->myTeam }}</td>
            <td>{{ $post->opppsitionTeam }}</td>
            <td>{{ $post->venue }}</td>
            <td>{{ $post->match_type }}</td>
            <!-- <td>{{ $post->custom_match_type }}</td>
            <td>{{ $post->select_role }}</td>
            <td>{{ $post->match_result }}</td>
            <td>{{ $post->batting_pos }}</td>
            <td>{{ $post->runs }}</td>
            <td>{{ $post->no4s }}</td>
            <td>{{ $post->no6s }}</td>
            <td>{{ $post->overs_bowled }}</td>
            <td>{{ $post->runGiven }}</td>
            <td>{{ $post->extras }}</td>
            <td>{{ $post->nomo }}</td>
            <td>{{ $post->wicket_taken }}</td>
            <td>{{ $post->norsif }}</td>
            <td>{{ $post->noc }}</td>
            <td>{{ $post->norouts }}</td>
            <td>{{ $post->nostump }}</td>
            <td>{{ $post->rgbmis }}</td>
            <td>{{ $post->cmissed }}</td>
            <td>{{ $post->stump_missed }}</td>
            <td>{{ $post->runouts }}</td>
            <td>{{ $post->award }}</td>
            <td>{{ $post->select1 }}</td>
            <td>{{ $post->select2 }}</td>
            <td>{{ $post->fielding_pos }}</td> -->
            <!-- <td>
                <img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px"
                    alt="" srcset="">
            </td> -->
                        <!-- <td>
                <div class="image-row">
                    @if (count($post->images) > 0)
                        @foreach ($post->images as $img)
                            <img src="/images/{{ $img->image }}" class="img-responsive" alt="" srcset="">
                        @endforeach
                    @endif
                </div>
            </td> -->

            <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Edit</a></td>
            <td><a href="{{ route('view', $post->id)  }}" class="btn btn-outline-success">View</a></td>
            <td>
                <form action="/delete/{{ $post->id }}" method="post">
                    <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                    @csrf
                                    @method('delete')
                                </form>
                            </td>

                            <td>{{ $post->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                <script>
        let minDate, maxDate;

        // Custom filtering function which will search data in column four between two values
        DataTable.ext.search.push(function(settings, data, dataIndex) {
            let min = minDate.val();
            let max = maxDate.val();
            let date = new Date(data[4]);

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        });

        // Create date inputs
        minDate = new DateTime('#min', {
            format: 'MMMM Do YYYY'
        });
        maxDate = new DateTime('#max', {
            format: 'MMMM Do YYYY'
        });

        // DataTables initialisation
        let table = new DataTable('#example');

        // Refilter the table
        document.querySelectorAll('#min, #max').forEach((el) => {
            el.addEventListener('change', () => table.draw());
        });
    </script>

     <script>
        $('.table').DataTable();
    </script>

                </div>  
            </div>                  
        </div>
    </div>                        
</div>
@endsection


<?php
              use Illuminate\Support\Facades\Auth;
              use App\Models\Profile;
              $userId = Auth::id();
              $profile = Profile::where('user_id', $userId)->first();
              ?>