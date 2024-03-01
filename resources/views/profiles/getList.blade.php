@extends('FrontUser')
@extends('profiles.layout')
@section('admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
    <h2 class="text-center">List Of Data....</h2>
<style>
    /* Add this CSS to your stylesheet or <style> tag in your HTML */

/* Style for the image container */
.image-container {
    display: flex;
    /* flex-wrap: wrap;  */
    /* Wrap images to the next row if there's not enough space */
}

/* Style for each image box */
.image-box {
    width: 100px; /* Adjust the width as per your preference */
    height: 100px; /* Adjust the height as per your preference */
    margin: 10px; /* Add spacing between image boxes */
    border: 1px solid #ccc; /* Add a border around each image box */
    box-sizing: border-box; /* Include the border in the width and height */
    overflow: hidden; /* Hide overflowing content (images) */
}

/* Style for the images within the image boxes */
.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Maintain aspect ratio and cover the entire box */
}

</style>

    <div class="row">

        <div class="panel-body">

            <form action="/filter" method="GET">
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
        <div class="col-lg-8">


            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <a href="{{ url('/user/dashboard/profiles/create') }}" class="btn btn-primary ms-3 mb-3">Add</a>


            <table class="table table-dark table-striped" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Age</th>
                        <th scope="col">Role</th>
                        <th scope="col">State</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                        <th scope="col">Bowling_Orientation</th>
                        <th scope="col">Batting_Orientation</th>
                        <th scope="col">DateBirth</th>
                        <!-- <th scope="col">Cover</th> -->
                        <th scope="col">Photo</th>
                        <th scope="col">File</th>
                        <th>Date</th>
                        <th>created_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sno = 1; ?>
                    <?php foreach ($profile as $key => $val) : ?>
                    <tr>
                        <td><?= $sno++ ?></td>
                        <td><?= $val['name'] ?></td>
                        <td><?= $val['email'] ?></td>
                        <td><?= $val['password'] ?></td>
                        <td><?= $val['age'] ?></td>
                        <td><?= $val['role'] ?></td>
                        <td><?= $val['state'] ?></td>
                        <td><?= $val['city'] ?></td>
                        <td><?= $val['country'] ?></td>
                        <td><?= $val['batting_orientation'] ?></td>
                        <td><?= $val['bowling_orientation'] ?></td>
                        <td><?= $val['datebirth'] ?></td>

                   


                        @foreach ($profile as $val)
                    <td>
                        <div class="image-container">
                            @foreach ($val->photos as $photo)
                                <div class="image-box">
                                    <img src="{{ asset('images/' . $photo->photo) }}" alt="Photo">
                                </div>
                            @endforeach
                        </div>
                    </td>
                @endforeach           
                <td>
                    <?php
                    $fileExtension = pathinfo($val['file'], PATHINFO_EXTENSION);
                    if (in_array($fileExtension, ['pdf', 'docx'])) : ?>
                        <a href="/<?= $val['file'] ?>" target="_blank"><?= $val['file'] ?></a>
                    <?php else : ?>
                        File not supported
                    <?php endif; ?>
                </td>



                        <td>
                            <?php
                            // Assuming $val['created_at'] is in the UTC timezone
                            $created_at = Carbon\Carbon::parse($val['created_at'])->setTimezone('Asia/Kolkata');
                            echo $created_at->diffForHumans();
                            ?>
                        </td>
                        <td>
                            <?php
                            // Assuming $val['created_at'] is in the UTC timezone
                            $created_at = Carbon\Carbon::parse($val['created_at'])->setTimezone('Asia/Kolkata');
                            echo $created_at->format('Y-m-d H:i:s');
                            ?>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ url('/user/dashboard/profiles/edit') }}/<?= $val['id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="{{ url('/user/dashboard/profiles/delete') }}/<?= $val['id'] ?>" class="btn btn-danger ms-2">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
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
    <!-- <script>
        $('#myTable').DataTable();
    </script> -->
@endsection
