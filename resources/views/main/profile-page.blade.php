
@extends('layout2')
 @section('content')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
            <style>
                .matches-seduels .nav-pills {
                position: relative;
                top: 0px !important;
            }
            .matches-seduels {
    position: relative;
    padding: 0 !important;
}
            a.btn.btn-outline-primary {
                background: #0d6efd;
                color: #fff;
            }
            a.btn.btn-outline-success {
                background: #198754;
                color: #fff;
            }
            button.btn.btn-outline-danger {
                color: #fff;
                background: #dc3545;
            }
            
           .matches-seduels .dataTables_wrapper {
            margin-top: 30px !important;
}

            @media screen and (max-width: 640px){
            .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
                float: none;
                text-align: center;
                margin-top: 46px !important;
                margin-left: 165px;
            }

                .nav {
                display: flex;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: -72px !important;
                list-style: none;
                }
                .matches-seduels .dataTables_wrapper {
                margin-top: 98px !important;
               }

                .matches-seduels .nav-pills .nav-link {
                border: 0;
                border-radius: 0.25rem;
                font-family: "Kanit", sans-serif;
                text-transform: uppercase;
                font-style: normal;
                color: #212529;
                font-size: 16px !important;
                font-weight: 600;
                width: 150px !important;
                }
            }

                .matches-seduels .nav-pills {
                    position: relative;
                    top: 54px !important;
                }
                .comon-btn {
                background: #0d6efd;
                font-weight: 600;
                font-family: "Kanit", sans-serif;
                text-transform: uppercase;
                font-style: normal;
                height: 40px;
                line-height: 30px;
                color: #fff;
                border-radius: 0;
                width: 82px;
                box-shadow: #a1a1a1 12px 12px 48px;
                height: auto;
               }     

            a.nav-link.collapsed.btn.comon-btn{
                width: 173px;
                background: #0d6efd;
                font-size: 18px;
                color: #fff;
                border-radius: none !important;
                border: 0px !important;
                border-radius: initial;
                height: auto;
                }
                .right-fgo li a {
                color: #fff !important;
                font-size: 15px;
                font-family: "Roboto", sans-serif;
                }

            </style>
              <style>
                label {
                  font-weight: bold;
              }
              .details-platyd{
                margin-bottom: 30px;
              }

              img {
                  display: block !important;
              }
              .fancybox-container * img {
                  box-sizing: border-box;
                  width: 1000px;
              }


              /* Regular styles */
              .profile-image-container {
                  display: flex;
                  justify-content: center; /* Horizontally center the image */
                  align-items: center; /* Vertically center the image */
                  width: 254px;
              }

              .image-box {
                  width: 224px;
                  height: 144px;
              }


              .justify-content-centerss {
                  margin-left: 18px;
                  margin-bottom: 20px;
              }
              /* Media query for screens up to 768 pixels wide */
              @media (max-width: 768px) {
                  .profile-image-container {
                      display: block; /* Change to block layout on smaller screens */
                      text-align: center; /* Center the image horizontally */
                  }
                  
                    .py-us {
                  width: 0px !important;
                  height: 0px !important;
                  overflow: hidden;
                  border-radius: 8px;
                  margin: auto !important;
                  }

                  .justify-content-centerss {
                  width: 250px;
                  margin-left: 110px;
                  border-radius: 8px;
                  margin-top: 20px !important;
              }

              .image-container img {
                  height: 100px !important;
                  object-fit: cover;
              }
              .image-container{
                display: flex;
                  height: 100px !important;
              }
                      
                  
              }
              @media (max-width: 768px){
              .information-crm ul {
                  column-count: 1 !important;
              }
              }
              .image-container {
                  display: flex;
                  height: 200px;
              }
              .image-container img {
                  width: 200px;
                  height: 150px;
              }
              img.gallery-img.fancybox {
                  display: block !important;
              }

              img#profile-image {
                  display: block !important;
                  width: 100%;
              }
              .contact-use-div .comon-btnn {
                  /* background: #34a853; */
                  font-weight: 600;
                  font-family: "Kanit", sans-serif;
                  text-transform: uppercase;
                  font-style: normal;
                  height: 45px;
                  line-height: 34px;
                  color: #fff;
                  border-radius: 0;
                  width: 150px;
                  box-shadow: #a1a1a1 12px 12px 48px;
              }
              .right-fgo li a {
                  color: #fff !important;
                  font-size: 15px;
                  font-family: "Roboto", sans-serif;
              }


 </style>


 <section class="banner-part sub-main-banner float-start w-100">
     
     <div class="baner-imghi">
        <img src="/assets2/images/sub-banner01.jpg" alt="sub-banner"/>
     </div>

       <div class="sub-banner">
           <div class="container">
               <h1 class="text-center"> Player Details</h1>
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb justify-content-center">
                   <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Player Details</li>
                    
                   </ol>
                   
               </nav>
          </div>
       </div>

</section>

<section class="float-start w-100 body-part pt-0 pb-5">

<div class="plyaers-divbn-details d-inline-block w-100 pt-5">
   <div class="container">
       <div class="row">
           <div class="col-lg-3">
               <figure class="">
                          <?php
            use Illuminate\Support\Facades\Auth;
            use App\Models\User; // Make sure User model is imported correctly

            $userId = Auth::id();
            $user = User::find($userId); // Use find() method to retrieve user by primary key

            if($user && $user->profile_image) {
            
                echo '<img src="' . asset('uploads/' . $user->profile_image) . '" alt="Profile Image" data-fancybox="profile-image" style="max-width: 100%; max-height: 100%;"  class="profile-image-container"  id="profile-image">';
            } else {
                echo '<img src="' . asset('uploads/profile.png') . '" alt="Default Profile Image" data-fancybox="profile-image" style="max-width: 100%; max-height: 100%;"  class="profile-image-container"  id="profile-image">';
            }
            ?>
              
              </figure>
              <div class="row mb-4">

              <div class="col-md-2 text-center d-flex justify-content-centerss mt-2">
              <a class="nav-link collapsed btn-primary" href="{{ route('main.edit-profile', ['id' => $user->id]) }}">
                <span style="color: #fff;" class="btn comon-btnn">Edit</span>
              </a>
           
              <a class="nav-link collapsed btn-danger  ms-3" href="{{ route('/logout') }}">
                <span style="color: #fff;" class="btn comon-btnn">Logout</span>
              </a>
              </div>
              </div>
                    
               <!-- <div class="tesmpa">
                   <img src="assets2/images/logo-3-1.png" alt="amnj"/>
               </div> -->
           </div>
           
           <div class="col-lg-9">
               <div class="details-platyd">
               <h1 class="mt-0">{{ $user->name }}</h1>
                          <?php
                          // use Illuminate\Support\Facades\Auth;
                          use App\Models\Profile;
                          // Get the authenticated user's ID
                          $userId = Auth::id();
                          // Retrieve the user's profile record
                          $profile = Profile::where('user_id', $userId)->first();
                          ?>
                          @if($profile)
               <h3 class="mt-2 d-flex">{{ $profile->select1 ?? '' }} - {{ $profile->select2 ?? '' }} </h3>
               @endif
                   <div class="information-crm mt-3">
                       <h4> Player Infomation </h4>
                       <ul class="mt-4">
                          <li>
                           <span class="dert"> Email</span>
                           <span>{{ $user->email }}</span>
                          </li>
                         
                          <?php
                          // use Illuminate\Support\Facades\Auth;
                          // use App\Models\Profile;
                          // Get the authenticated user's ID
                          $userId = Auth::id();

                          // Retrieve the user's profile record
                          $profile = Profile::where('user_id', $userId)->first();
                          ?>
                           <?php
                    
                          // Get the authenticated user's ID
                          $userId = Auth::id();
                          // Retrieve the user's profile record
                          $profile = Profile::where('user_id', $userId)->first();
                          ?>
                          @if($profile)
                          <li>
                           <span class="dert"> Date Of Birth </span>
                           <span>{{ $profile->datebirth ? \Carbon\Carbon::parse($profile->datebirth)->format('d-m-Y') : '' }}  - {{ $profile->age ?? '' }}  (Age)</span>
                           <!-- <span>{{ $profile->datebirth ?? '' }} - {{ $profile->age ?? '' }}  (Age)</span> -->
                          </li>
                          <!-- <li>
                           <span class="dert"> State </span>
                           <span>{{ $profile->state ?? '' }}</span>
                          </li> -->

                          <li>
                            <span class="dert"> State </span>
                            @foreach ($states as $state)
                                @if ($profile->state == $state->id)
                                    <span>{{ $state->name }}</span>
                                @endif
                            @endforeach
                        </li>

                          <!-- <li>
                           <span class="dert"> Role </span>
                           <span>{{ $profile->select1 ?? '' }}</span>
                          </li> -->
                          <li>
                           <span class="dert"> Bowling Orientation </span>
                           <span>{{ $profile->bowling_orientation ?? '' }}</span>
                          </li>

                          
                          <li>
                           <span class="dert"> Phone </span>
                           <span>{{ $user->phone }}</span>
                          </li>
                          <!-- <li>
                           <span class="dert"> Specialist </span>
                           <span>{{ $profile->select2 ?? '' }}</span>
                          </li> -->
                          

                          <!-- <li>
                           <span class="dert"> Country </span>
                           <span>{{ $profile->country ?? '' }}</span>
                          </li> -->

                            <li>
                            <span class="dert"> Country </span>
                            @foreach ($countries as $country)
                                @if ($profile->country == $country->id)
                                    <span>{{ $country->name }}</span>
                                @endif
                            @endforeach

                           </li>

                           <li>
                            <span class="dert"> City </span>
                            @if ($profile->city && $cities->where('id', $profile->city)->isNotEmpty())
                                <span>{{ $cities->where('id', $profile->city)->first()->name }}</span>
                            @else
                                <!-- <span>No city selected</span> -->
                            @endif
                        </li>


                      
                          <li>
                           <span class="dert"> Batting Orientation </span>
                           <span>{{ $profile->batting_orientation ?? '' }}</span>
                          </li>
                       </ul>

                       @endif
                   </div>

                   
               </div>

           </div>
       </div>
   

      </li><!-- End F.A.Q Page Nav -->
       <div class="career-div01">
           <div class="accordion" id="accordionExample">
               <!-- <div class="accordion-item">
                 <h2 class="accordion-header" id="headingOne">
                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Digital Vault
                   </button>
                 </h2>
                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                   <div class="accordion-body">
                       <div class="table-sectionss table-responsive">
                       <div class="image-container">
            @foreach ($profile->photos as $photo)
                <div class="image-box">
                    <img src="{{ asset('images/' . $photo->photo) }}" data-fancybox="gallery-img fancybox"  alt="Photo">
                  </div>
                    @endforeach

                    @if ($profile->photo)
                        @php
                            $fileExtension = pathinfo($profile->photo, PATHINFO_EXTENSION);
                        @endphp

                        @if (in_array($fileExtension, ['pdf', 'docx', 'xlsx']))
                            <br><br>
                            <a href="{{ asset('images/' . $photo->photo) }}" target="_blank" class="file-link ">
                                Download File
                            </a>
                        @else
                            <div>
                                File not supported
                            </div>
                        @endif
                    @endif
                </div>
                       </div>
                   </div>
                 </div>
               </div> -->
               <div class="matches-seduels d-inline-block w-100">
          <div class="container">

            <div class="mindle-heading text-center">
               
                <!-- <h5> Schedule </h5> -->
              
                <!-- <h1> All  <span> Match </span> Record </h1> -->
            </div>
        
            <!-- <span class="bgi-text light-tsext01"> Schedule</span> -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <!-- <li class="nav-item ms-lg-0" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                   data-bs-target="#pills-home" type="button" role="tab" >Series</button>
                </li> -->
                <li>
                <a style="color: #fff; width: 150px; height:auto;" class="btn comon-btn" href="{{ route('/matches') }}">
              Create Match
                  </a>
                </li>
                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                   data-bs-target="#pills-profile" type="button" role="tab" >Laegue</button>
                </li> -->
                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                   data-bs-target="#pills-contact" type="button" role="tab">International</button>
                </li> -->
            </ul>



            <div class="tab-content" id="pills-tabContent">
                <div class="table-responsive">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" >
                  <table id="myTable" class="table table-striped order-column dt-responsive nowrap" style="width:100%">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>My Team</th>
                        <th>Opposition Team</th>
                        <th>Venue</th>
                        <th>Match Type</th>
                        <th>Create_at</th>
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                       
                        </tr>
                        </thead>
                        <tbody>
                     
                        <?php
                          use App\Models\Post;
                          // Get the authenticated user's ID
                          // Get the authenticated user's ID
                          $userId = Auth::id();

                          // Find posts belonging to the authenticated user
                          $posts = Post::where('user_id', $userId)->get();
                          ?>
                        <?php $sno = 1; 
                        
                        
                        ?>
                        @foreach ($posts as $post)
                        <tr>
                        <td><?= $sno++ ?></td>
                        <td>{{ \Carbon\Carbon::parse($post->date)->format('d-m-Y') }}</td>
                        <td>{{ $post->myTeam }}</td>
                        <td>{{ $post->opppsitionTeam }}</td>
                        <td>{{ $post->venue }}</td>
                        <td>{{ $post->match_type }}</td>
                        <!-- <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</td> -->

                        <td>{{ $post->created_at }}</td>

                        <td><a href="/edit-match/{{ $post->id }}" class="btn comon-btn btn-outline-primary">Edit</a></td>
                        <td><a href="{{ route('/view-matches', $post->id)  }}" class="btn comon-btn btn-outline-success">View</a></td>
                        <td>
                        <form action="/delete/{{ $post->id }}" method="post">
                            <button class="btn comon-btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                        </td>
                    
                        </tr>
                        @endforeach
                       </tbody>
                         </table>
                    </div>
                </div>
                
          </div>
          </div>
      </div>
               <!-- <div class="accordion-item">
                 <h2 class="accordion-header" id="headingThree">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       Career Total 
                   </button>
                 </h2>
                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                   <div class="accordion-body">
                       <div class="table-sectionss">
                           <table class="table">
                               <thead>
                                 <tr>
                                   <th scope="col">Saason</th>
                                   <th scope="col">AB</th>
                                   <th scope="col">R</th>
                                   <th scope="col">H</th>
                                   <th scope="col">RBI</th>
                                   <th scope="col">2B</th>
                                   <th scope="col">3B</th>
                                   <th scope="col">LOB</th>
                                   <th scope="col">G</th>
                                   <th scope="col">AVG</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                   <td>RedBull</td>
                                   <td>20</td>
                                   <td>9</td>
                                   <td>08</td>
                                   <td>17</td>
                                   <td>20</td>
                                   <td>8</td>
                                   <td>22</td>
                                   <td>9</td>
                                   <td>0.25</td>
                                 </tr>

                                 <tr>
                                   <td>Avenger</td>
                                   <td>20</td>
                                   <td>9</td>
                                   <td>08</td>
                                   <td>17</td>
                                   <td>20</td>
                                   <td>8</td>
                                   <td>22</td>
                                   <td>9</td>
                                   <td>0.25</td>
                                 </tr>

                                 <tr>
                                   <td>JSBull</td>
                                   <td>20</td>
                                   <td>9</td>
                                   <td>08</td>
                                   <td>17</td>
                                   <td>20</td>
                                   <td>8</td>
                                   <td>22</td>
                                   <td>9</td>
                                   <td>0.25</td>
                                 </tr>

                                 <tr>
                                   <td>RedBull</td>
                                   <td>20</td>
                                   <td>9</td>
                                   <td>08</td>
                                   <td>17</td>
                                   <td>20</td>
                                   <td>8</td>
                                   <td>22</td>
                                   <td>9</td>
                                   <td>0.25</td>
                                 </tr>
                                
                               </tbody>
                             </table>
                       </div>
                   </div>
                 </div>
               </div> -->
             </div>
       </div>
   </div>
</div>


</section>



<script>
   $(function () {
    $('#profile-image').on('click', function () {
        $(this).width(400).height('auto'); // Enlarge the image when clicked
    });

    $("[data-fancybox='profile-image']").fancybox({
        animationEffect: 'fade',
        thumbs: {
            autoStart: true,
            axis: 'x'
        },
        overlayShow: false,
        scrolling: 'no', // Prevent scrolling to the top after closing
        hideOnContentClick: false, // Keep the content (image) visible after closing
        touch: false, // Disable touch events to prevent automatic hiding
        afterClose: function () {
            $('#profile-image').width('100%'); // Reset the image width to auto
        }
    });
});

</script>
<script>
    $(document).ready(function() {
        $(".gallery-img").on('click', function() {
            $(this).width(1000).height('auto'); // Enlarge the clicked image
        });

        $(".gallery-img").fancybox({
            animationEffect: 'fade',
            thumbs: {
                autoStart: true,
                axis: 'x'
            },
            buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
            overlayShow: false,
            scrolling: 'no', // Prevent scrolling to the top after closing
            hideOnContentClick: false, // Keep the content (image) visible after closing
            arrows: true, // Enable navigation arrows
            touch: false, // Disable touch events to prevent automatic hiding
            afterClose: function(instance, slide) {
                $(".gallery-img").css({
                    width: '200px', // Reset the width of all images
                    height: '150px' // Reset the height of all images
                });
            }
        });
    });
</script>



<!-- @auth
    <script>
        var userName = "{{ auth()->user()->name }}";
        alert("Welcome to Profile Page " + userName);
    </script>
@endauth -->


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    
  <script>
        $('#myTable').DataTable();
    </script>
 @endsection
