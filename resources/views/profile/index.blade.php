@extends('FrontUser')
@extends('profile.layout')
@section('admin')

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <?php
        use Illuminate\Support\Facades\Auth;

        $user = Auth::user();
        ?>
       @if($user->profile_image)
        <img src="{{ asset('uploads/' . $user->profile_image) }}" alt="Profile Image" class="profile-image">
    @else
        <img src="{{ asset('images/profile.png') }}" alt="Default Profile Image" class="profile-image">
    @endif
    <h2>{{ auth()->user()->name }}</h2>

    <h3>{{ auth()->user()->email }}</h3>

    <h3>{{ auth()->user()->phone }}</h3>

          <!-- <h3>Web Designer</h3> -->
          <!-- <div class="social-links mt-2 mb-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div> -->

          <div class="profile-button">
            
        <a href="{{ route('profile.edit', ['id' => $user->id]) }}" class="edit-button">Edit Profile</a>
        <a href="{{ route('/logout')}}" class=" btn-warning edit-button">Logout</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>
            <?php
              // use Illuminate\Support\Facades\Auth;
              use App\Models\Profile;
              // Get the authenticated user's ID
              $userId = Auth::id();

              // Retrieve the user's profile record
              $profile = Profile::where('user_id', $userId)->first();
              ?>
            <!-- <li class="nav-item">
              <a  href="{{ route('profile.edit', ['id' => $user->id]) }}" class="nav-link"  data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</a>
            </li> -->
                        <!-- @php
                $id = Auth::id();
                $profile = Profile::where('user_id', $id)->first();
                
            @endphp
            <li>
              @if(!empty($profile))
                <a href="{{ route('profiles.edit', ['id' => $profile['id'], 'name' => $profile->name]) }}"  >
                   <span class="mt-4">Update Profile</span>
                </a>
                @endif
            </li> -->


            <!-- <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li> -->

            <li class="nav-item">
          <a class="nav-link" href="{{ url('/change-password') }}" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</a>
         </li>

            <!-- <a href="{{route('/logout')}}" class="mt-2">Logout</a> -->

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              <p class="small fst-italic">{{ old('about', $profile->about) }}</p>

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8">{{ old('name', $user->name) }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{ old('email', $user->email) }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8">{{ old('phone', $user->phone) }}</div>
              </div>

              <?php
              // use Illuminate\Support\Facades\Auth;
              // use App\Models\Profile;
              // Get the authenticated user's ID
              $userId = Auth::id();

              // Retrieve the user's profile record
              $profile = Profile::where('user_id', $userId)->first();
              ?>
              @if($profile)
                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                          <div class="col-lg-9 col-md-8">{{ $profile->datebirth ?? ''  }}</div>
                      </div>

              <div class="row">
                  <div class="col-lg-3 col-md-4 label">Age</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->age ?? '' }}</div>
              </div>
              
              <div class="row">
                  <div class="col-lg-3 col-md-4 label">Role</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->select1 ?? '' }}</div>
              </div>

              <div class="row">
                  <div class="col-lg-3 col-md-4 label">Specialist</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->select2 ?? '' }}</div>
              </div>

              <div class="row">
                  <div class="col-lg-3 col-md-4 label">Country</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->country ?? '' }}</div>
              </div>

              <div class="row">
                  <div class="col-lg-3 col-md-4 label">State</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->state ?? '' }}</div>
              </div>

              <div class="row">
                  <div class="col-lg-3 col-md-4 label">City</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->city ?? '' }}</div>
              </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 label">Bowling Orientation</div>
                <div class="col-lg-9 col-md-8">{{ $profile->bowling_orientation ?? '' }}</div>
              </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Batting Orientation</div>
                  <div class="col-lg-9 col-md-8">{{ $profile->batting_orientation ?? '' }}</div>
                </div>


              <!-- <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
              </div> -->


                          @if($profile)
                <td>
                <div class="image-container" style="display: flex; align-items: center;">
    @foreach ($profile->photos as $photo)
        <div class="image-box">
            <img src="{{ asset('images/' . $photo->photo) }}" alt="Photo">
        </div>
    @endforeach

    @if ($profile->photo)
        @php
            $fileExtension = pathinfo($profile->photo, PATHINFO_EXTENSION);
        @endphp

        @if (in_array($fileExtension, ['pdf', 'docx', 'xlsx']))
            <br><br>
            <a href="{{ asset('images/' . $photo->photo) }}" target="_blank" class="file-link">
                Download File
            </a>
        @else
            <div>
                File not supported
            </div>
        @endif
    @endif
</div>


                  <!-- <a href="{{ asset('pdf/' . $profile->file) }}" target="_blank" style="
                  background: blue;
                  width: 150px;
                  height: 50px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  border-radius: 2px;
                  color: #fff;
                  margin-top: 20px;
              ">Download PDF</a> -->
                </td>
            @else
                <td>No profile data available.</td>
            @endif

          @else
              <p>No profile data available.</p>
          @endif
    
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->


              <!-- <form method="post" action="">

              
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                 <div class="col-md-8 col-lg-9">

                  @if($user->profile_image)
                <img src="{{ asset('uploads/' . $user->profile_image) }}" alt="Profile Image" class="profile-image" style="height: 120px;">
            @else
                <img src="{{ asset('images/profile.png') }}" alt="Default Profile Image" class="profile-image" style="height: 120px;">
            @endif

            <input type="file" name="profile_image" class="form-control mt-2" placeholder="image">

                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                  <div class="col-md-8 col-lg-9">
                  <input name="name" type="text" class="form-control" id="fullName" value="{{ old('name', optional($user)->name ?? '') }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="text" class="form-control" readonly id="email" value="{{ old('email', $user->email) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="phone" type="number" class="form-control" id="phone" value="{{ old('phone', $user->phone) }}">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                <div class="col-md-8 col-lg-9">
                    <input name="datebirth" type="text" class="form-control" id="datebirth" value="{{ old('datebirth', optional($profile)->datebirth) }}">
                </div>
               </div>


                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Age</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="age" type="text" class="form-control" id="age" value="{{ old('age', optional($profile)->age) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Role</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="role" type="text" class="form-control" id="role" value="{{ old('role', optional($profile)->role) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Country</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="country" type="text" class="form-control" id="Email" value="{{ old('country', optional($profile)->country) }}">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">State</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="state" type="state" class="form-control" id="Email" value="{{ old('state', optional($profile)->state) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">City</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="city" type="text" class="form-control" id="city" value="{{ old('city', optional($profile)->city) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Bowling Orientation</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="bowling_orientation" type="bowling_orientation" class="form-control" id="bowling_orientation" value="{{ old('bowling_orientation', optional($profile)->bowling_orientation) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Batting Orientation</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="batting_orientation" type="batting_orientation" class="form-control" id="batting_orientation" value="{{ old('batting_orientation', optional($profile)->batting_orientation) }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                  </div>
                </div>

              


                <div class="text-center">
                  <button type="submit" name="submit"  class="btn btn-primary">Save Changes</button>
                </div>

                
              </form>
               -->
              
              
              <!-- End Profile Edit Form -->

             
             
            </div>
            <div class="tab-pane fade pt-3" id="profile-settings">

              <!-- Settings Form -->
              <form>



                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                  <div class="col-md-8 col-lg-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="changesMade" checked>
                      <label class="form-check-label" for="changesMade">
                        Changes made to your account
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="newProducts" checked>
                      <label class="form-check-label" for="newProducts">
                        Information on new products and services
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="proOffers">
                      <label class="form-check-label" for="proOffers">
                        Marketing and promo offers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                      <label class="form-check-label" for="securityNotify">
                        Security alerts
                      </label>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
              
              <!-- End settings Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Submit</button>
                        </div>

                    </form><!-- End Change Password Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Add a click event listener to the tab
        $('button[data-bs-target="#profile-edit"]').on('click', function() {
            // Trigger a click event on the edit link
            $('.edit-button').click();
        });
    });
</script>

@endsection