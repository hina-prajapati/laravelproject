@extends('layout2')
 @section('content')
<style>
 select {
    word-wrap: normal;
    border: none;
}

p{
    font-size: 16px;
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

.contact-use-div .comon-btn {
    background: #34a853;
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
    float: inline-end;
    margin-top: -40px;
    display: flex;
    justify-content: center;
    align-items: center;
}
@media (max-width: 768px){
.information-crm ul {
    column-count: 1 !important;
}
}

img.img-thumbnail.gallery-img.fancybox {
    display: block !important;
}
img#profile-image {
    display: block !important;
}
.py-us {
    width: 250px;
    height: 300px;
    overflow: hidden;
    border-radius: 8px;
    margin: auto;
    margin-bottom: 16px;
}
@media (min-width: 768px){
.information-crm ul {
    column-count: auto;
}
}
.d-flex.justify-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.comon-btn {
    background: #0d6efd;
    font-weight: 600;
    font-family: "Kanit", sans-serif;
    text-transform: uppercase;
    font-style: normal;
    height: 48px;
    line-height: 34px;
    color: #fff;
    border-radius: 0;
    width: 150px;
    box-shadow: #a1a1a1 12px 12px 48px;
    height: auto;

}

.image-row img {
    width: 180px;
    /* display: flex; */
    height: 120px;
    /* margin-top: 50px; */
}
.image-row {
    display: flex;
    gap: 20px;
}
.nav-link:focus, .nav-link:hover {
    color: #fff !important;
}
.fancybox-container * img {
    box-sizing: border-box;
    width: 1000px;
}
img.img-responsive {
    display: block !important;
}

.image-row {
    /* max-width: 1000px; */
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    display: flex;
    /* flex-direction: column; */
    align-items: center;
    padding: 50px;
    margin-top: 50px;
}
@media (max-width: 1000px){
.image-row {
    flex-direction: column;
    height: auto !important;
}
}

.right-fgo li a {
    color: #fff !important;
    font-size: 15px;
    font-family: "Roboto", sans-serif;
}
.navbar-light .navbar-nav .nav-link {
    font-family: "Kanit", sans-serif;
    text-transform: uppercase;
    font-style: italic;
    font-weight: 600;
    font-size: 18px;
    color: #212529 !important;
}
</style>
 
<section class="banner-part sub-main-banner float-start w-100">

          <div class="baner-imghi">
             <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> View Match Details </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Match Details</li>
                        </ol>
                    </nav>
               </div>
            </div>
</section>


<section class="float-start w-100 body-part pt-0 pb-5">
   
     <div class="plyaers-divbn-details d-inline-block w-100 pt-5">
        <div class="container">
            <div class="row">
            <div class="d-flex justify-btn mb-4">
            <h4> View Match Details </h4>
            <a class=" btn comon-btn btn-primary ms-3 mt-3" style="background-color: #0d6efd" href="{{ route('/all-matches') }}">
                                   Back
                                </a>
            </div>
                <div class="col-lg-4">
                    <div class="details-platyd">
                    
                        <!-- <h3 class="mt-2">Class Of 2022 / OF </h3> -->

                        <div class="information-crm mt-3">
                      
                            <ul class="mt-4">
                               <li>
                                <span class="dert"> Date</span>
                                <span>{{ date('d-m-y', strtotime($posts->date)) }}</span>
                               </li>
                               <li>
                                <span class="dert"> My Team </span>
                                <span>{{ $posts->myTeam }}</span>
                               </li>

                               <li>
                                <span class="dert"> Opposition Team </span>
                                <span>{{ $posts->opppsitionTeam }}</span>
                               </li>
                               <li>
                                <span class="dert"> Venue </span>
                                <span>{{ $posts->venue }}</span>
                               </li>
                               <li>
                                <span class="dert">Selected Match Type </span>
                                <span>{{ $posts->match_type }}</span>
                               </li>
                               <li>
                                <span class="dert"> Select Role </span>
                                <span>{{ $posts->select_role }}</span>
                               </li>

                               <li>
                                <span class="dert"> Match Result </span>
                                <span>{{ $posts->match_result }}</span>
                               </li>

                               <li>
                                <span class="dert"> Runs </span>
                                <span>{{ $posts->runs }}</span>
                               </li>

                               <li>
                                <span class="dert"> Number Of 4s </span>
                                <span>{{ $posts->no4s }}</span>
                               </li>
                               <li>
                                <span class="dert"> Number Of 6s </span>
                                <span>{{ $posts->no6s }}</span>
                               </li>

                               <li>
                                <span class="dert"> Wicket In Which Fashion </span>
                                <span>{{ $posts->fielding_pos }}</span>
                               </li>

                            </ul>
                        </div>
                      </div>
                    </div>

                        <div class="col-lg-4">
                    <div class="details-platyd">
                    
                        <!-- <h3 class="mt-2">Class Of 2022 / OF </h3> -->

                        <div class="information-crm mt-3">
                              <ul>
                               <li>
                                <span class="dert"> Batting Position </span>
                                <span>{{ $posts->batting_pos }}</span>
                               </li>
                               <li>
                                <span class="dert"> Custome Match Type </span>
                                <span>{{ $posts->custom_match_type }}</span>
                               </li>
                               <li>
                                <span class="dert"> Number Of 6s </span>
                                <span>{{ $posts->no6s }}</span>
                               </li>
                               
                               <li>
                                <span class="dert"> Overs Bowled </span>
                                <span>{{ $posts->overs_bowled }}</span>
                               </li>

                               <li>
                                <span class="dert"> Runs Given </span>
                                <span>{{ $posts->runGiven }}</span>
                               </li>
                               <li>
                                <span class="dert"> Extras </span>
                                <span>{{ $posts->extras }}</span>
                               </li>
                               <li>
                                <span class="dert"> Number of Run Saved in Fielding </span>
                                <span>{{ $posts->norsif }}</span>
                               </li>

                               <li>
                                <span class="dert"> Type Ball </span>
                                <span>{{ $posts->type_ball }}</span>
                               </li>


                               <li>
                                <span class="dert"> No. Of Maidan Overs </span>
                                <span>{{ $posts->nomo }}</span>
                               </li>
                               <li>
                                <span class="dert"> Wickets Taken </span>
                                <span>{{ $posts->wicket_taken }}</span>
                               </li>

                               <li>
                                <span class="dert"> Number Of Catches </span>
                                <span>{{ $posts->noc }}</span>
                               </li>
                              </ul>
                        </div></div></div>


                        <div class="col-lg-4">
                    <div class="details-platyd">
                    
                        <!-- <h3 class="mt-2">Class Of 2022 / OF </h3> -->

                        <div class="information-crm mt-3">

                        <ul>

                               <li>
                                <span class="dert"> Number Of stumpings </span>
                                <span>{{ $posts->nostump }}</span>
                               </li>
                               <li>
                                <span class="dert"> Runs Given by misfiled </span>
                                <span>{{ $posts->rgbmis }}</span>
                               </li>
                               <li>
                                <span class="dert"> Catches Missed </span>
                                <span>{{ $posts->cmissed }}</span>
                               </li>

                               
                               <li>
                                <span class="dert"> Tournament </span>
                                <span>{{ $posts->tournament }}</span>
                               </li>

                               <li>
                                <span class="dert"> Stumpings Missed </span>
                                <span>{{ $posts->stump_missed }}</span>
                               </li>
                               <li>
                                <span class="dert"> Total Balls Faced </span>
                                <span>{{ $posts->tbs }}</span>
                               </li>
                               <li>
                                <span class="dert"> Run-Out Missed </span>
                                <span>{{ $posts->runouts }}</span>
                               </li>


                               <li>
                                <span class="dert"> Award </span>
                                <span>{{ $posts->award }}</span>
                               </li> 
                               
                               
                               <li>
                                <span class="dert"> Number Of Runs Outs </span>
                                <span>{{ $posts->norouts }}</span>
                               </li>
                               <li>
                                <span class="dert"> Fielding Position </span>
                                <span>{{ $posts->select1 }}</span>
                               </li>
                               <li>
                                <span class="dert"> If Catch Out, Where </span>
                                <span>{{ $posts->select2 }}</span>
                               </li>
                               
                            </ul>
                        </div>

                        
                    </div>

                </div>


                <!-- <div class="image-row">
                    @if (count($posts->images) > 0)
                        @foreach ($posts->images as $img)
                            <img src="/images/{{ $img->image }}" class="img-responsive" data-fancybox="gallery-img fancybox" alt="" srcset="">
                        @endforeach
                    @endif
                </div> -->
            </div>

        </div>
     </div>


</section>
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

@endsection
