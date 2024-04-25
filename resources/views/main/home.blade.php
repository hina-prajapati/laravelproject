@extends('layout2')
@section('content')


@if(Session::has('success'))
<div class="alert text-success">
    {{ Session::get('success') }}
</div>
@endif


<section class="float-start w-100 banner-part">


    <div class="slider-banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets2/images/bg-bangh.jpg" alt="images not found">

                    <div class="cover">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="header-content">
                                        <h1 class="fadeInDown animated">Celebrate Every, <span class="d-block">Cricket
                                                Journey

                                            </span>
                                        </h1>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>

                                        <!-- <a href="#" class="btn btn-comon-btn">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                            </svg>
                          </span>
                          About More!
                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets2/images/bg-bangh2.jpg" alt="images not found">

                    <div class="cover">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="header-content">
                                        <h1 class="fadeInUp animated">United Leagues
                                            <span class="d-block">Season Begins
                                            </span>
                                        </h1>

                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>

                                        <!-- <a href="#" class="btn btn-comon-btn">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                            </svg>
                          </span>
                          Schedule!
                        </a> -->
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <!-- <button type="button" class="btn btn-member" data-bs-toggle="modal" data-bs-target="#memberModal"> Become A Member </button> -->



</section>



<section class="float-start w-100 body-part pt-0">


    <div class="top-list-turnament">

        <div class="dots-bg">

        </div>
        <div class="container">
            <div class="mindle-heading text-center">

                <h5> Upcoming Match </h5>
                <h1> TopListed Tournament</h1>
            </div>
            <span class="bgi-text light-tsext01"> Matches</span>


            <div class="upcomin-matches owl-carousel owl-theme">
                <div class="comon-matchbn">



                    <a href="#" class="topikn-div">
                        <div class="top-bg-backgrouh">
                            <figure>
                                <img src="assets2/images/st01.jpg" alt="pnhm" />
                            </figure>
                            <div class="conty">


                                <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                                <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                                <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4  justify-content-center">
                            <div class="col-5">
                                <div class="cul-div">
                                    <figure class="">
                                        <img src="assets2/images/r3.png" alt="club">
                                    </figure>
                                    <h6 class="text-center">

                                        Spartams
                                    </h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <h1 class="vs-text"> VS </h1>
                            </div>
                            <div class="col-5">

                                <div class="cul-div">

                                    <figure class="">
                                        <img src="assets2/images/r4.png" alt="club">
                                    </figure>

                                    <h6 class="text-center">
                                        RedBull
                                    </h6>

                                </div>
                            </div>

                        </div>
                    </a>

                    <div class="more-details-div text-center">

                        <a href="#" class="btn btn-book-btn"> Book Ticket <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </span> </a>
                    </div>

                </div>


                <div class="comon-matchbn">



                    <a href="#" class="topikn-div">
                        <div class="top-bg-backgrouh">
                            <figure>
                                <img src="assets2/images/st01.jpg" alt="pnhm" />
                            </figure>
                            <div class="conty">


                                <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                                <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                                <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4  justify-content-center">
                            <div class="col-5">
                                <div class="cul-div">
                                    <figure class="">
                                        <img src="assets2/images/r4.png" alt="club">
                                    </figure>
                                    <h6 class="text-center">

                                        Spartams
                                    </h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <h1 class="vs-text"> VS </h1>
                            </div>
                            <div class="col-5">

                                <div class="cul-div">

                                    <figure class="">
                                        <img src="assets2/images/r3.png" alt="club">
                                    </figure>

                                    <h6 class="text-center">
                                        RedBull
                                    </h6>

                                </div>
                            </div>

                        </div>
                    </a>

                    <div class="more-details-div text-center">

                        <a href="#" class="btn btn-book-btn"> Book Ticket
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>

                <div class="comon-matchbn">



                    <a href="#" class="topikn-div">
                        <div class="top-bg-backgrouh">
                            <figure>
                                <img src="assets2/images/st01.jpg" alt="pnhm" />
                            </figure>
                            <div class="conty">


                                <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                                <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                                <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                            </div>
                        </div>

                        <div class="row align-items-center mt-4  justify-content-center">
                            <div class="col-5">
                                <div class="cul-div">
                                    <figure class="">
                                        <img src="assets2/images/r1.png" alt="club">
                                    </figure>
                                    <h6 class="text-center">

                                        Spartams
                                    </h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <h1 class="vs-text"> VS </h1>
                            </div>
                            <div class="col-5">

                                <div class="cul-div">

                                    <figure class="">
                                        <img src="assets2/images/r2.png" alt="club">
                                    </figure>

                                    <h6 class="text-center">
                                        RedBull
                                    </h6>

                                </div>
                            </div>

                        </div>
                    </a>

                    <div class="more-details-div text-center">

                        <a href="#" class="btn btn-book-btn"> Book Ticket
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>

                <div class="comon-matchbn">



                    <a href="#" class="topikn-div">

                        <div class="top-bg-backgrouh">
                            <figure>
                                <img src="assets2/images/st01.jpg" alt="pnhm" />
                            </figure>
                            <div class="conty">


                                <h4 class="text-center lega-text mt-0 mb-2"> United Leagues </h4>
                                <span class="btn time-d05 d-table mx-auto"> 21 Mar 2023 </span>
                                <h6 class="text-center text-white mb-3">Sidney, North America</h6>
                            </div>
                        </div>


                        <div class="row align-items-center  justify-content-center">
                            <div class="col-5">
                                <div class="cul-div">
                                    <figure class="">
                                        <img src="assets2/images/r1.png" alt="club">
                                    </figure>
                                    <h6 class="text-center">

                                        Spartams
                                    </h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <h1 class="vs-text"> VS </h1>
                            </div>
                            <div class="col-5">

                                <div class="cul-div">

                                    <figure class="">
                                        <img src="assets2/images/r3.png" alt="club">
                                    </figure>

                                    <h6 class="text-center">
                                        RedBull
                                    </h6>

                                </div>
                            </div>

                        </div>
                    </a>

                    <div class="more-details-div text-center">

                        <a href="#" class="btn btn-book-btn"> Book Ticket
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>



            </div>

            <div class="bags-side ">
                <img src="assets2/images/toppng.com-ss-elite-cricket-helmet-cricket-helmet-701x523.png" alt="gbn" />
            </div>

        </div>



    </div>

    <div class="next-match-part d-inline-block w-100">
        <div class="dots-bg">

        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-5 g-lg-5 align-items-center">
                <div class="col">
                    <div class="comon-leadborad">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="comon-headding">
                                <h2> Statistics</h2>
                            </div>

                            <a href="#" class="btn link-btn">
                                See All Results
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">N</th>
                                    <th scope="col">Club</th>
                                    <th scope="col">W</th>
                                    <th scope="col">L</th>
                                    <th scope="col">PTS</th>
                                    <th scope="col">PA</th>
                                    <th scope="col">TD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Avengers</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>RedBull</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>ActionX</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>YBluster</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>FC United</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>RealBlust</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>AVO Bull</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>70</td>
                                    <td>0</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="next-match05 d-inline-block w-100">
                        <figure class="m-0 bgh">
                            <img src="assets2/images/cricket-clip.png" alt="pmnjk" />
                        </figure>
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="comon-headding">
                                <h2>Next Matches </h2>
                            </div>


                        </div>

                        <div class="comon-match-sec w-100 d-inline-block">
                            <h6 class="text-center text-white"> June 15, 2025 19:00 <span class="d-block mt-2"> New Expo
                                    Stadium, NYK </span> </h6>
                            <div class="comon-match-div">
                                <div class="row align-items-center  justify-content-center">
                                    <div class="col-5">
                                        <div class="cul-div">
                                            <figure class="m-0">
                                                <img src="assets2/images/r2.png" alt="club" />
                                            </figure>
                                            <h6 class="text-center text-white">
                                                <span class="d-block"> USA </span>
                                                Spartams
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <h1 class="reuli-tc text-center text-white"> VS </h1>
                                    </div>
                                    <div class="col-5">

                                        <div class="cul-div">

                                            <figure class="m-0">
                                                <img src="assets2/images/r4.png" alt="club" />
                                            </figure>
                                            <h6 class="text-center text-white">
                                                <span class="d-block"> UAE </span>
                                                RedBull
                                            </h6>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="num-txet-divb d-flex align-items-center justify-content-center">

                                <a href="#" class="btn book-btn"> Book Ticket </a>
                                <a href="#" class="btn strm-btn ms-3"> Streaming </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="about-sec-home">
        <span class="bgi-text light-tsext01"> About</span>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col text-abouy">

                    <h5>Our History</h5>
                    <h1> About Our <span> Club </span></h1>
                    <p class="my-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    <h6> It has survived <span>100+ win</span> not only five centuries, but
                        also the leap into <span>30+ tropy</span> electronic typesetting </h6>

                    <a href="#" class="btn btn-about">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z">
                                </path>
                            </svg>
                        </span>
                        About More</a>

                </div>

                <div class="col">
                    <div class="about-1imgn">
                        <img src="assets2/images/pngaaa.com-1165094.png" alt="bnm" />
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="match-result-div">

        <div class="container">
            <div class="mindle-heading text-center">
                <h5 class="text-white"> Fixtures </h5>
                <h1 class="text-white"> Latest Match Result</h1>
            </div>
            <span class="bgi-text light-tsext01"> Results</span>


            <div class="col-lg-9 mt-5 mx-auto">
                <div class="result-sliden owl-carousel owl-theme">

                    <div class="comon-results-div">
                        <div class="leag-name text-center">
                            <h2>United FC Cup </h2>


                        </div>
                        <div class="bodyu-divbn">
                            <h4 class="text-center text-white"> <span> Roethlon Dan </span> <span
                                    class="text-white mx-4"> <i class="fas fa-minus"></i> </span> <span> James Rider
                                </span> </h4>
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
                                            <img src="assets2/images/Vector-Smart-Object1.png" alt="bn" />
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
                                                <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i>
                                                    Edens,Melbourne</p>
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
                                            <img src="assets2/images/6288d1fe92d55dad82ab2207.png" alt="bn" />
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
                                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i>
                                            Edens,Melbourne</p>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>


                    <div class="comon-results-div">
                        <div class="leag-name text-center">
                            <h2>United FC Cup </h2>


                        </div>
                        <div class="bodyu-divbn">
                            <h4 class="text-center text-white"> <span> Roethlon Dan </span> <span
                                    class="text-white mx-4"> <i class="fas fa-minus"></i> </span> <span> James Rider
                                </span> </h4>
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
                                            <img src="assets2/images/Vector-Smart-Object1.png" alt="bn" />
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
                                                <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i>
                                                    Edens,Melbourne</p>
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
                                            <img src="assets2/images/6288d1fe92d55dad82ab2207.png" alt="bn" />
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
                                        <p class="mt-2 text-white"> <i class="fas fa-map-marker-alt"></i>
                                            Edens,Melbourne</p>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>


                </div>


            </div>



        </div>

        <div class="right-windre">
            <img src="assets2/images/cup01.png" alt="pbn" />
        </div>


    </div>



    <div class="shop-apge-div">
        <div class="container">
            <div class="mindle-heading text-center">
                <h5> Our Shop </h5>
                <h1> Exclusive <span> Collection </span> </h1>
            </div>

            <span class="bgi-text light-tsext01"> Store</span>
            <div class="shop-slider owl-carousel owl-theme mt-5">

                <div class="comon-section1-shop">
                    <div class="top-imgb-box">
                        <figure>
                            <img src="assets2/images/bats.png" alt="shop1" />
                        </figure>
                        <ul class="hover-list2">
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-details-div text-center mt-3">
                        <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
                        <span class="d-block rat-text">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </span>
                        <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
                        <a href="#" class="btn cart-bthn mt-3">
                            <span> Add to cart </span>
                            <span class="ms-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></span>
                        </a>
                    </div>
                </div>

                <div class="comon-section1-shop">
                    <div class="top-imgb-box">
                        <figure>
                            <img src="assets2/images/toppng.com-ss-elite-cricket-helmet-cricket-helmet-701x523.png"
                                alt="shop1" />
                        </figure>
                        <ul class="hover-list2">
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-details-div text-center mt-3">
                        <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
                        <span class="d-block rat-text">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </span>
                        <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
                        <a href="#" class="btn cart-bthn mt-3">
                            <span> Add to cart </span>
                            <span class="ms-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></span>
                        </a>
                    </div>
                </div>

                <div class="comon-section1-shop">
                    <div class="top-imgb-box">
                        <figure>
                            <img src="assets2/images/pads.png" alt="shop1" />
                        </figure>
                        <ul class="hover-list2">
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-details-div text-center mt-3">
                        <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
                        <span class="d-block rat-text">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </span>
                        <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
                        <a href="#" class="btn cart-bthn mt-3">
                            <span> Add to cart </span>
                            <span class="ms-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></span>
                        </a>
                    </div>
                </div>

                <div class="comon-section1-shop">
                    <div class="top-imgb-box">
                        <figure>
                            <img src="assets2/images/wickets.png" alt="shop1" />
                        </figure>
                        <ul class="hover-list2">
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-details-div text-center mt-3">
                        <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
                        <span class="d-block rat-text">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </span>
                        <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
                        <a href="#" class="btn cart-bthn mt-3">
                            <span> Add to cart </span>
                            <span class="ms-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></span>
                        </a>
                    </div>
                </div>

                <div class="comon-section1-shop">
                    <div class="top-imgb-box">
                        <figure>
                            <img src="assets2/images/botsman1.png" alt="shop1" />
                        </figure>
                        <ul class="hover-list2">
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-comnb">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-details-div text-center mt-3">
                        <a href="products-details.html" class="titel-text1"> Junior Jusrssy </a>
                        <span class="d-block rat-text">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </span>
                        <h3 class="price-text1"> <span class="text-decoration-line-through">$ 20.00 </span> $30.00 </h3>
                        <a href="#" class="btn cart-bthn mt-3">
                            <span> Add to cart </span>
                            <span class="ms-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg></span>
                        </a>
                    </div>
                </div>








            </div>
        </div>
    </div>

    <div class="our-small-details">
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-4 g-4 g-lg-0">
                <div class="col">
                    <div class="comon-divbn d-md-flex align-items-center">
                        <figure>
                            <img src="assets2/images/819590.png" alt="pnbm" />
                        </figure>
                        <div class="right-dibvb">
                            <h2>781 +</h2>
                            <h6>Matches Winery</h6>
                        </div>

                    </div>
                </div>
                <div class="col d-lg-grid justify-content-lg-center">
                    <div class="comon-divbn d-md-flex align-items-center">
                        <figure>
                            <img src="assets2/images/6906863.png" alt="pnbm" />
                        </figure>
                        <div class="right-dibvb">
                            <h2>1200 +</h2>
                            <h6>Team Member</h6>
                        </div>

                    </div>
                </div>

                <div class="col d-lg-grid justify-content-lg-end">
                    <div class="comon-divbn d-md-flex align-items-center">
                        <figure>
                            <img src="assets2/images/5140351.png" alt="pnbm" />
                        </figure>
                        <div class="right-dibvb">
                            <h2>10 +</h2>
                            <h6>Trained Coaches</h6>
                        </div>

                    </div>
                </div>

                <div class="col d-lg-grid justify-content-lg-end">
                    <div class="comon-divbn d-md-flex align-items-center">
                        <figure>
                            <img src="assets2/images/1851036.png" alt="pnbm" />
                        </figure>
                        <div class="right-dibvb">
                            <h2>15 +</h2>
                            <h6>Award</h6>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <div class="bg-small-back02">
            <img src="assets2/images/parallax-1.png" alt="sportsfbn" />
        </div>

    </div>

    <div class="offers-divo d-inline-block w-100">
        <div class="container">
            <div class="mindle-heading text-center">
                <h5> We offers </h5>
                <h1> Professional <span> Tennis Academy </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Services</span>
            <div class="row row-cols-1 row-cols-md-3 g-4 g-lg-5 mt-0">
                <div class="col">
                    <a href="#" class="tenis-meg d-inline-block w-100">
                        <figure class="img-oi-div">
                            <img src="assets2/images/photo-1559579313-021b6ec9f6d6.jfif" alt="gnm" />
                        </figure>
                        <h5> Tennis court rent </h5>
                        <p class="mt-2">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since

                        </p>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="tenis-meg d-inline-block w-100">
                        <figure class="img-oi-div">
                            <img src="assets2/images/0_RHh1hXVyTxoUIdHC.jpg" alt="gnm" />
                        </figure>
                        <h5> Personal Trainings </h5>
                        <p class="mt-2">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since

                        </p>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="tenis-meg d-inline-block w-100">
                        <figure class="img-oi-div">
                            <img src="assets2/images/supor.jpeg" alt="gnm" />
                        </figure>
                        <h5> Support </h5>
                        <p class="mt-2">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since

                        </p>
                    </a>
                </div>


            </div>
        </div>

    </div>


    <div class="our-spocerder d-inline-block w-100">
        <div class="container">
            <div class="col-lg-7">
                <h6> Membership </h6>
                <h1>Join Our <span> Club </span> </h1>
                <span class="bgi-text light-tsext01"> Membership </span>
                <h5 class="my-3"> Become a member of our online community and get tickets to
                    <span class="d-lg-block"> upcoming matches or sports events faster! </span>
                </h5>
                <div class="comon-section01 mt-5">
                    <ul>
                        <li>
                            <span> <i class="fas fa-check-circle"></i> </span>
                            <span> Vestibulum a eros in enim </span>
                        </li>
                        <li>
                            <span> <i class="fas fa-check-circle"></i> </span>
                            <span> Nam ullamcorper lacus </span>
                        </li>
                        <li>
                            <span> <i class="fas fa-check-circle"></i> </span>
                            <span> Nam ullamcorper lacus </span>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center mt-5">
                    <a href="#" class="btn subc"> Subcribe Now !</a>
                    <a href="#" class="btn joinst ms-4"> Join Member </a>
                </div>
            </div>
            <figure class="m-0 right-imgplya">
                <img src="assets2/images/38-384690_cricket-vector-png.png" alt="gnm" />
            </figure>
        </div>
    </div>

    <div class="mediasection d-inline-block w-100">
        <div class="container">
            <div class="mindle-heading text-center">
                <h5> Gallery </h5>
                <h1> Our <span> Latest Media </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Gallery </span>
            <div class="row row-cols-2 row-cols-lg-4 mt-0 g-4 mt-3">
                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/pexels-photo-3628912.jpeg" class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/pexels-photo-3628912.jpeg" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/pexels-photo-13509963.jpeg" class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/pexels-photo-13509963.jpeg" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/Centurion-Cricket-Academy-Andheri-8.webp"
                        class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/Centurion-Cricket-Academy-Andheri-8.webp" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>


                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/pexels-photo-5739195.jpeg" class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/pexels-photo-5739195.jpeg" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col">
                    <a data-fancybox="wk"
                        href="assets2/images/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.webp"
                        class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.webp"
                                alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/3364.webp" class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/3364.webp" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/pexels-photo-13509632.jpeg" class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/pexels-photo-13509632.jpeg" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="col">
                    <a data-fancybox="wk" href="assets2/images/954603-658494-india-women-cricket-team-bcci.jpg"
                        class="comon-links-divb05">
                        <figure>
                            <img src="assets2/images/954603-658494-india-women-cricket-team-bcci.jpg" alt="pbnm" />
                            <figcaption>
                                FGC CUP 2022
                            </figcaption>
                        </figure>
                    </a>
                </div>




            </div>
        </div>
    </div>

    <div class="news-sectiondiv d-inline-block w-100">
        <div class="container">
            <div class="mindle-heading text-center">
                <h5> Devoted </h5>
                <h1> Meet Our <span> Members </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Member</span>

            <div class="team-membern owl-carousel owl-theme mt-5">
                <a href="player-details.html" class="crm-teams01">
                    <figure>
                        <img src="assets2/images/t1.webp" alt="teams01" />
                    </figure>
                    <div class="design">
                        <h5> James dane</h5>
                        <p> Offensive Line </p>
                    </div>
                </a>
                <a href="player-details.html" class="crm-teams01">
                    <figure>
                        <img src="assets2/images/t2.jpg" alt="teams01" />
                    </figure>
                    <div class="design">
                        <h5> Adams dane</h5>
                        <p> Offensive Line </p>
                    </div>
                </a>

                <a href="player-details.html" class="crm-teams01">
                    <figure>
                        <img src="assets2/images/t3.jpg" alt="teams01" />
                    </figure>
                    <div class="design">
                        <h5> Clark dane</h5>
                        <p> Offensive Line </p>
                    </div>
                </a>


                <a href="player-details.html" class="crm-teams01">
                    <figure>
                        <img src="assets2/images/t4.jpg" alt="teams01" />
                    </figure>
                    <div class="design">
                        <h5> Hills dane </h5>
                        <p> Offensive Line </p>
                    </div>
                </a>

                <a href="player-details.html" class="crm-teams01">
                    <figure>
                        <img src="assets2/images/t5.jpg" alt="teams01" />
                    </figure>
                    <div class="design">
                        <h5> Nalty dane</h5>
                        <p> Offensive Line </p>
                    </div>
                </a>


            </div>

        </div>
        <div class="big-headerpic">
            <img src="assets2/images/ballsk.png" alt="ho" />
        </div>


    </div>


    <div class="statisci-players d-inline-block w-100">
        <div class="container">
            <div class="mindle-heading text-center">
                <h5> About Players </h5>
                <h1> Players <span> Statistics </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Players</span>
            <div class="slider-sertu owl-carousel owl-theme">
                <div class="items-plays">
                    <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                        <div class="col">
                            <figure class="m-0">
                                <img src="assets2/images/teamp.png" alt="pmy" />
                            </figure>
                        </div>
                        <div class="col">
                            <div class="details-divn">
                                <h5> Robert Dan </h5>
                                <hr class="bg-light" />
                                <ul>
                                    <li>
                                        <span class="rtus">Role</span>
                                        <span>Batsman</span>
                                    </li>
                                    <li>
                                        <span class="rtus">Bats</span>
                                        <span>Right-Handed</span>
                                    </li>
                                    <li>
                                        <span class="rtus">Bowls</span>
                                        <span>Right-Handed off-break</span>
                                    </li>
                                </ul>

                                <h5 class="mt-4"> 2022 Season </h5>
                                <div class="row row-cols-3 mt-3">
                                    <div class="col">
                                        <div class="rtyu">
                                            <h4> Matches </h4>
                                            <h2>14</h2>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="rtyu">
                                            <h4> Runs </h4>
                                            <h2>1400</h2>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="rtyu">
                                            <h4> Wickets </h4>
                                            <h2>5</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="items-plays">
                    <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                        <div class="col">
                            <figure class="m-0">
                                <img src="assets2/images/teamp2.png" alt="pmy" />
                            </figure>
                        </div>
                        <div class="col">
                            <div class="details-divn">
                                <h5> Robert Dan </h5>
                                <hr class="bg-light" />
                                <ul>
                                    <li>
                                        <span class="rtus">Role</span>
                                        <span>Batsman</span>
                                    </li>
                                    <li>
                                        <span class="rtus">Bats</span>
                                        <span>Right-Handed</span>
                                    </li>
                                    <li>
                                        <span class="rtus">Bowls</span>
                                        <span>Right-Handed off-break</span>
                                    </li>
                                </ul>

                                <h5 class="mt-4"> 2022 Season </h5>
                                <div class="row row-cols-3 mt-3">
                                    <div class="col">
                                        <div class="rtyu">
                                            <h4> Matches </h4>
                                            <h2>14</h2>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="rtyu">
                                            <h4> Runs </h4>
                                            <h2>1400</h2>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="rtyu">
                                            <h4> Wickets </h4>
                                            <h2>5</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="light-newd-section d-inline-block w-100">
        <div class="container">
            <div class="mindle-heading text-center">
                <h5> What's Trending </h5>
                <h1> Our <span> Latest News </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Blogs</span>
            <div class="row row cols-1 row-cols-lg-3 g-4 g-lg-5 mt-0 posrt">
                <div class="col">
                    <a href="#" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/_128258572_gettyimages-1435855432.jpg" alt="pbnm" />
                            </figure>
                            <span class="daet01">
                                14
                                <small class="d-block">Jan</small>
                            </span>
                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula </h5>
                            <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been</p>
                            <div
                                class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/1mr5tvog_virat-kohli-babar-azam-afp_625x300_25_August_22.webp"
                                            alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>

                    <a href="#" class="comon-posrt right-post0 w-100 d-inline-block mt-4">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/shutterstock_1008651946-scaled.jpg" alt="pbnm" />
                            </figure>
                            <span class="daet01">
                                14
                                <small class="d-block">Jan</small>
                            </span>
                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula </h5>
                            <div
                                class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/cricket-1642491052.jpg" alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>


                </div>

                <div class="col">
                    <a href="#" class="comon-posrt middle-post w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/pexels-photo-13079892.webp" alt="pbnm" />
                            </figure>

                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula vestibulum molestie in vel mi </h5>
                            <i class="fas fa-quote-right"></i>
                            <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been</p>
                            <div
                                class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/manages-st.jpg" alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>

                    <a href="#" class="comon-posrt w-100 d-inline-block my-4">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/ANI-20221110317-0_1668092848531_1668092848531_1668092863718_1668092863718.webp"
                                    alt="pbnm" />
                            </figure>
                            <span class="daet01">
                                14
                                <small class="d-block">Jan</small>
                            </span>
                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula </h5>
                            <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been</p>
                            <div
                                class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/manages-st.jpg" alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>

                    <a href="#" class="comon-posrt middle-post m-hefigh w-100 d-inline-block ">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/zhabi04opycbbyjlmvmg.webp" alt="pbnm" />
                            </figure>

                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula vestibulum molestie in vel mi </h5>
                            <i class="fas fa-quote-right"></i>
                            <div
                                class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/manages-st.jpg" alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>

                </div>


                <div class="col">
                    <a href="#" class="comon-posrt right-post0 w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/np_file_171051.jpeg" alt="pbnm" />
                            </figure>
                            <span class="daet01">
                                14
                                <small class="d-block">Jan</small>
                            </span>
                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula </h5>
                            <div class="user-dela06 w-100 d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center ">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/manages-st.jpg" alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>

                    <a href="#" class="comon-posrt w-100 d-inline-block mt-4">
                        <div class="img-boxv w-100 d-inline-block">
                            <figure class="w-100 d-inline-block">
                                <img src="assets2/images/skysports-ireland-women-cricket_5369912.jpg" alt="pbnm" />
                            </figure>
                            <span class="daet01">
                                14
                                <small class="d-block">Jan</small>
                            </span>
                        </div>
                        <div class="parar-delatsy">
                            <h6>Cricket</h6>
                            <h5> Proin in arcu eu ligula </h5>
                            <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been</p>
                            <div
                                class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                                <div class="admins d-flex align-items-center">
                                    <figure class="m-0 me-2">
                                        <img src="assets2/images/manages-st.jpg" alt="spbn" />
                                    </figure>
                                    <span>Jmanes</span>
                                </div>
                                <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                            </div>
                        </div>

                    </a>
                </div>


            </div>

            <a href="#" class="btn btn-about mx-auto justify-content-center mt-5">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z">
                        </path>
                    </svg>
                </span>
                See All Post</a>
        </div>



    </div>

    <div class="sponcer-logo d-inline-block w-100">
        <div class="rtck-img">
            <img src="assets2/images/favpng_cricket-bats-kookaburra-sport-bag-cricket-clothing-and-equipment.png"
                alt="bnm" />
        </div>
        <div class="container">
            <div class="mindle-heading text-center">
                <h1> Our <span> Sponsors </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Sponsors </span>
            <div class="sponj-slide owl-carousel owl-theme mt-5">
                <div class="corm-iteml">
                    <figure class="m-auto">
                        <img src="assets2/images/brand_food2.jpg" alt="jok" />
                    </figure>
                </div>
                <div class="corm-iteml">
                    <figure class="m-auto">
                        <img src="assets2/images/logo-3-1.png" alt="jok" />
                    </figure>
                </div>

            </div>

        </div>

    </div>

</section>



@endsection