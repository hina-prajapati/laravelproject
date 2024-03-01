@extends('layout2')
 @section('content')
 
 
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
            <style>
                .matches-seduels .nav-pills {
                position: relative;
                top: 0px !important;
            }
            a.btn.btn-outline-primary {
                background: #0d6efd;
                color: #fff !important;
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
            a.nav-link.collapsed.btn.comon-btn {
                color: #fff !important;
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
                margin-bottom: -48px !important;
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

            /* a.nav-link.collapsed.btn.comon-btn{
                width: 173px;
                background: #0d6efd;
                font-size: 18px;
                color: #fff;
                border-radius: none !important;
                border: 0px !important;
                border-radius: initial;
                height: auto;
            } */
            .right-fgo li a {
    color: #fff !important;
    font-size: 15px;
    font-family: "Roboto", sans-serif;
}

            </style>
        <section class="banner-part sub-main-banner float-start w-100">
            
                <div class="baner-imghi">
                    <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
                </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> All Matches</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Matches</li>
                        </ol>
                    </nav>
               </div>
            </div>
</section>

<section class="float-start w-100 body-part mtches-divbnh01 pt-0">
   
      <!-- <div class="next-matches d-inline-block w-100">
          <div class="container">

            <div class="mindle-heading text-center">
               
                <h5> Match </h5>
                <h1> Next <span> Match </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Matches</span>

            <div class="comon-results-div">
                <div class="leag-name text-center">
                  <h2>United FC Cup </h2>
                  
                  
                </div>
                <div class="bodyu-divbn">
                  <h4 class="text-center text-white"> <span> Roethlon Dan </span> <span class="text-white mx-4"> <i class="fas fa-minus"></i> </span> <span> James Rider </span>  </h4>
                  <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                  <h6 class="text-center text-white"> 06:00Court 01 </h6>
                  <h3 class="text-white text-center mt-2 justify-content-center">
                     <span class="text-center"> 160/5 
                   
                    </span> 
                    <span>:</span>
                    <span class="text-center"> 152/5 
                    
                    </span>
                    <b class="d-block">20 Over</b>
                   </h3>

                  <div class="row align-items-center">
                    <div class="col-5">
                      <div class="club-items d-flex align-items-center">
                          <figure class="m-0">
                              <img src="assets2/images/Vector-Smart-Object1.png" alt="bn"/>
                          </figure>
                          <h5 class="ms-3"> Roethlon 
                            <span class="d-block">South America</span>
                          </h5>
                      </div>
                    </div>
  
                    <div class="col-2">
                      <div class="d-none d-lg-block">
                        <div class="vds-resut text-center">
                          <div class="golas-divb mb-2">
                              <h3>02 : 01</h3>
                          </div>
                          <div class="watch-div">
                             <a href="#" class="btn btn-wtch1">
                              <i class="fas fa-play"></i> Match Highligt
                             </a>
                             <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                          </div>
                        </div>
                      </div>
                      <div class="d-block d-lg-none">
                         <h3 class="text-white text-center">VS</h3>
                      </div>
                     
                    </div>

                    <div class="col-5">
                      <div class="club-items d-flex align-items-center">
                          <figure class="m-0">
                              <img src="assets2/images/6288d1fe92d55dad82ab2207.png" alt="bn"/>
                          </figure>
                          <h5> Roethlon 
                            <span class="d-block">South America</span>
                          </h5>
                      </div>
                    </div>
                  </div>

                  <div class="d-lg-none d-block">
                    <div class="vds-resut text-center my-4">
                      <div class="golas-divb mb-2">
                          <h3>02 : 01</h3>
                      </div>
                      <div class="watch-div">
                         <a href="#" class="btn btn-wtch1">
                          <i class="fas fa-play"></i> Match Highligt
                         </a>
                         <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i> Edens,Melbourne</p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              

               
              </div>

          </div>
      </div> -->

      <div class="matches-seduels d-inline-block w-100">
          <div class="container">

            <div class="mindle-heading text-center">
               
                <!-- <h5> Schedule </h5> -->
              
                <h1> All  <span> Match </span> Record </h1>
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
                     

                        <?php $sno = 1; ?>
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
                    <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" >
                        <table id="matchess2" class="table table-striped order-column dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Fixtures</th>
                              <th>Date</th>
                              <th>Stadium</th>
                              <th>Location</th>
                              <th>Time</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          
                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td><a href="#" class="btn btn-get"> Book Ticket </a></td>
                          </tr>

                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>


                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>



                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>




                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>



                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>


                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>


                      </tbody>
                  </table>
              </div> -->
              <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel">
                  <table id="matchess3" class="table table-striped order-column dt-responsive nowrap" style="width:100%">
                      <thead>
                          <tr>
                              <th>Fixtures</th>
                              <th>Date</th>
                              <th>Stadium</th>
                              <th>Location</th>
                              <th>Time</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          
                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td><a href="#" class="btn btn-get"> Book Ticket </a></td>
                          </tr>

                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>


                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>



                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>




                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>



                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>


                          <tr>
                              <td>
                                  <div class="d-flex fetuexr align-items-center">
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons01.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> JC Bull</span>
                                      </div>
      
                                      <span class="mx-3 vs-0">VS</span>
      
                                      <div class="name-team d-flex align-items-center">
                                          <span>
                                              <span class="sm-iconj">
                                                  <img src="assets2/images/mt-1119-home-icons04.png" alt="je"/>
                                              </span>
                                          </span>
                                          <span> FC Nets</span>
                                      </div>
                                  </div>
                              </td>
                              <td>01-03-2023</td>
                              <td>Jaharbar</td>
                              <td>New York</td>
                              <td>1:30PM</td>
                              <td>
                                  <a href="#" class="btn btn-get"> Book Ticket </a>
                              </td>
                          </tr>


                      </tbody>
                  </table>
              </div> -->
          </div>
          </div>
      </div>


</section>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    
  <script>
        $('#myTable').DataTable();
    </script>

@endsection