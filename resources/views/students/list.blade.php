@extends('FrontUser')
@extends('students.layout')
@section('admin')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
    <h2 class="text-center">List Of Student Data....</h2>
   
    <div class="row d-flex">
     

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

    

    <div class="row">
                        <div class="col-md-1">
                            <a href="{{ url('/user/dashboard/students/add') }}" class="btn btn-primary ms-3 mb-3">Add</a>
                        </div>
                    </div>

                   
<table class="table table-striped"  id="example" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Language</th>
      <th scope="col">ZipCode</th>
      <th scope="col">About</th>
      <th>Date</th>
      <th>created_at</th>
    
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
    <?php foreach($students as $key=>$val) {  ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?=$val['name']?></td>
      <td><?=$val['email']?></td>
      <td><?=$val['password']?></td>
      <td><?=$val['phone']?></td>
      <td><?=$val['gender']?></td>
      <td><?=$val['language']?></td>
      <td><?=$val['zipcode']?></td>
      <td><?=$val['about']?></td>
    
     
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
  </td>    <td>
        <div class="d-flex">
        <a href="{{url('/user/dashboard/students/edit')}}/<?=$val['id']?>" class="btn btn-primary">Edit</a>
        <a href="{{url('/user/dashboard/students/delete')}}/<?=$val['id']?>" class="btn btn-danger ms-2">Delete</a>
        </div>
    </td>
    </tr>
   <?php } ?>
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
   DataTable.ext.search.push(function (settings, data, dataIndex) {
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
  $('table').DataTable();
</script>


@endsection