@extends('FrontUser')

@extends('students.layout')
@section('admin')


<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
<div class="container">
  <div class="row">
  <h1>Registration Form</h1>
  <div class="row">
                        <div class="col-md-1">
                            <a href="{{ url('/user/dashboard/students/list') }}" class="btn btn-primary ms-3 mb-3">Back</a>
                        </div>
                    </div>
  <form action="{{ route('students.edit', ['id' => $student['id']]) }}" name="registration" class="registartion-form" onsubmit="return formValidation()" method="post">
  @csrf
  
    <table>
      <tr>
        <td><label for="name">Name:</label></td>
        <td><input type="text" name="name" id="name" value="<?=$student['name']?>" placeholder="your name"></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" name="email" id="email" value="<?=$student['email']?>" placeholder="your email"></td>
      </tr>
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" name="password" value="<?=$student['password']?>" id="password"></td>
      </tr>
      <tr>
        <td><label for="phoneNumber">Phone Number:</label></td>
        <td><input type="number" name="phone" value="<?=$student['phone']?>" id="phoneNumber"></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td>Male: <input type="radio" name="gender" <?php echo ($student['gender'] =='male')?'checked="checked"':'';?> value="male">
          Female: <input type="radio" name="gender" <?php echo ($student['gender'] =='female')?'checked="checked"':'';?> value="female">
          Other: <input type="radio" name="gender" <?php echo ($student['gender'] =='other')?'checked="checked"':'';?> value="other"></td>
      </tr>
      <tr>
        <td><label for="language">language</label></td>
        <td>
          <select name="language" id="language">
            <option value="">Select language</option>
            <option value="English" <?php echo ($student['language'] =='English')?'selected="Selected"':'';?>>English</option>
            <option value="Spanish" <?php echo ($student['language'] =='Spanish')?'selected="Selected"':'';?>>Spanish</option>
            <option value="Hindi" <?php echo ($student['language'] =='Hindi')?'selected="Selected"':'';?>>Hindi</option>
            <option value="Arabic" <?php echo ($student['language'] =='Arabic')?'selected="Selected"':'';?>>Arabic</option>
            <option value="Russian" <?php echo ($student['language'] =='Russian')?'selected="Selected"':'';?>>Russian</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="zipcode">Zip Code:</label></td>
        <td><input type="number" name="zipcode" value="<?=$student['zipcode']?>" id="zipcode"></td>
      </tr>
      <tr>
        <td><label for="about">About:</label></td>
        <td><textarea name="about" id="about" placeholder="Write about yourself..."><?=$student['about']?></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" class="submit" value="update" /></td>
      </tr>
    </table>
  </form>
  </div>
</div>
</section>



@endsection