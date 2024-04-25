@extends('layout2')
 @section('content')
 
<section class="banner-part sub-main-banner float-start w-100">

          <div class="baner-imghi">
             <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> About Club</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Club</li>
                        </ol>
                    </nav>
               </div>
            </div>
</section>

<section class="float-start w-100 body-part pt-0">

      <div class="about-page-main comon-sub-page-main d-inline-block w-100">

           <div class="about-club-top">
               <div class="container">
                   <div class="row row-cols-1 row-cols-lg-2 g-lg-5">
                        <div class="col position-relative">
                            <figure class="big-img">
                            <img src="assets2/images/pexels-photo-2973104.jpeg" alt="pic">
                            </figure>
                            <figure class="small-img">
                                <img src="assets2/images/pexels-photo-13464804.jpeg" alt="pic2">
                            </figure>
                        </div>
                        <div class="col">
                              <h5 class="samll-sub mb-1 mt-0"> Our Story </h5>
                              <h2 class="comon-heading m-0"> About The FC Club </h2>
                              <p class="mt-3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a
                                 reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                            </p>

                        </div>
                   </div>
               </div>
           </div>

      </div>

      <div class="our-history-div d-inline-block w-100 mt-5">


          <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-calendar-alt"></i> Our History </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                aria-controls="profile" aria-selected="false"> <i class="fas fa-flag-checkered"></i> Our Mission </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab"
                 aria-controls="contact" aria-selected="false"> <i class="far fa-eye"></i> Our Vision </button>
              </li>
            </ul>
          </div>
          <div class="tab-content mna-bg" id="myTabContent">

            <div class="tab-pane fade show active" id="home" role="tabpanel">

              <div class="container">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                     data-bs-target="#yd-hom1" type="button" role="tab"> <i class="fas fa-calendar-alt"></i> 1990</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#yd-hom2"
                    type="button" role="tab"><i class="fas fa-calendar-alt"></i>1995</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#yd-hom3"
                    type="button" role="tab">
                    <i class="fas fa-calendar-alt"></i> 2005</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#yd-hom4"
                        type="button" role="tab">
                        <i class="fas fa-calendar-alt"></i> 2015</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#yd-hom5"
                        type="button" role="tab">
                        <i class="fas fa-calendar-alt"></i> 2022</button>
                    </li>


                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="yd-hom1" role="tabpanel" >
                         <div class="comon-fild-ads1 d-lg-flex align-items-center">
                              <figure>
                                  <img src="assets2/images/pexels-photo-2973104.jpeg" alt="bg"/>
                              </figure>

                              <div class="left-history mt-3 mt-lg-0">
                                  <h2>It is a long established fact that a reader </h2>
                                  <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                    sites still in their infancy. Various versions have evolved over the years, sometimes by
                                    accident, sometimes on purpose (injected humour and the like).</p>
                              </div>
                         </div>
                    </div>
                    <div class="tab-pane fade" id="yd-hom2" role="tabpanel">
                        <div class="comon-fild-ads1 d-lg-flex align-items-center">
                            <figure>
                                <img src="assets2/images/pexels-photo-2973104.jpeg" alt="bg"/>
                            </figure>

                            <div class="left-history mt-3 mt-lg-0">
                                <h2>It is a long established fact that a reader </h2>
                                <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                                  accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="yd-hom3" role="tabpanel">
                        <div class="comon-fild-ads1 d-lg-flex align-items-center">
                            <figure>
                                <img src="assets2/images/pexels-photo-2973104.jpeg" alt="bg"/>
                            </figure>

                            <div class="left-history mt-3 mt-lg-0">
                                <h2>It is a long established fact that a reader </h2>
                                <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                                  accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="yd-hom4" role="tabpanel">
                        <div class="comon-fild-ads1 d-lg-flex align-items-center">
                            <figure>
                                <img src="assets2/images/pexels-photo-2973104.jpeg" alt="bg"/>
                            </figure>

                            <div class="left-history mt-3 mt-lg-0">
                                <h2>It is a long established fact that a reader </h2>
                                <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                                  accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="yd-hom5" role="tabpanel">
                        <div class="comon-fild-ads1 d-lg-flex align-items-center">
                            <figure>
                                <img src="assets2/images/pexels-photo-2973104.jpeg" alt="bg"/>
                            </figure>

                            <div class="left-history">
                                <h2>It is a long established fact that a reader </h2>
                                <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                                  accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                       </div>
                    </div>
                </div>
              </div>
            </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                  <div class="container">
                    <div class="comon-fild-ads1 d-lg-flex align-items-center">
                      <figure>
                          <img src="assets2/images/pexels-photo-2973104.jpeg" alt="bg"/>
                      </figure>

                      <div class="left-history mt-3 mt-lg-0">
                          <h2>It is a long established fact that a reader </h2>
                          <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                            accident, sometimes on purpose (injected humour and the like).</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel">
                  <div class="container">
                    <div class="comon-fild-ads1 d-lg-flex align-items-center">
                      <figure>
                          <img src="assets2/images/pexels-photo-12806375.webp" alt="bg"/>
                      </figure>

                      <div class="left-history mt-3 mt-lg-0">
                          <h2>It is a long established fact that a reader </h2>
                          <p>  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                            accident, sometimes on purpose (injected humour and the like).</p>
                      </div>
                    </div>
                  </div>
                </div>

          </div>

      </div>


      <div class="our-mangent-sft d-inline-block w-100 ">
          <div class="container">

              <div class="mindle-heading text-center">

                <h5> Staff </h5>
                <h1> Our <span> Management  Staff </span> </h1>
              </div>
            <span class="bgi-text light-tsext01"> Staff</span>

              <div class="mangemnet-sf owl-carousel owl-theme">
                   <div class="items-man">
                      <figure>
                          <img src="assets2/images/manages-st.jpg" alt="pmg"/>
                      </figure>
                      <div class="name">
                        <h5> Jores Leperto
                         <span class="d-block"> President </span>
                        </h5>
                     </div>
                   </div>

                   <div class="items-man">
                        <figure>
                            <img src="assets2/images/manages-st2.jpg" alt="pmg"/>
                        </figure>
                        <div class="name">
                            <h5> Jores Leperto
                            <span class="d-block"> Vice President (House & Admin)</span>
                            </h5>
                       </div>
                    </div>


                    <div class="items-man">
                        <figure>
                            <img src="assets2/images/manages-st3.jpg" alt="pmg"/>
                        </figure>
                        <div class="name">
                            <h5> Jores Leperto
                            <span class="d-block"> Hony. Treasurer & Sponsorship</span>
                            </h5>
                       </div>
                    </div>

                    <div class="items-man">
                        <figure>
                            <img src="assets2/images/manages-st4.jpg" alt="pmg"/>
                        </figure>
                        <div class="name">
                            <h5> Jores Leperto
                            <span class="d-block"> Member - Entertainment</span>
                            </h5>
                       </div>
                    </div>


              </div>
          </div>
      </div>


      <div class="achivement-div py-5">

           <div class="container">

               <div class="mindle-heading text-center">

                <h5> Award </h5>
                <h1> Our <span> achievement </span> </h1>
              </div>

              <span class="bgi-text light-tsext01"> Award  </span>

               <div class="achivent-slide owl-carousel owl-theme ">
                   <div class="items-achiv">
                       <figure>
                          <img src="assets2/images/award-img1.png" alt="ad1"/>
                       </figure>
                       <div class="achiv-titel">
                           <h5> 2010 world FC cup champion </h5>
                       </div>
                   </div>

                   <div class="items-achiv">
                    <figure>
                       <img src="assets2/images/award-img3.png" alt="ad1"/>
                    </figure>
                    <div class="achiv-titel">
                        <h5> 2012 United CD cup champion </h5>
                    </div>
                    </div>

                    <div class="items-achiv">
                        <figure>
                           <img src="assets2/images/award-img4.png" alt="ad1"/>
                        </figure>
                        <div class="achiv-titel">
                            <h5> 2014 world cup champion </h5>
                        </div>
                    </div>

                    <div class="items-achiv">
                        <figure>
                           <img src="assets2/images/award-img1.png" alt="ad1"/>
                        </figure>
                        <div class="achiv-titel">
                            <h5> 2015 FC cup champion </h5>
                        </div>
                    </div>

                    <div class="items-achiv">
                        <figure>
                           <img src="assets2/images/award-img4.png" alt="ad1"/>
                        </figure>
                        <div class="achiv-titel">
                            <h5> 2014 world cup champion </h5>
                        </div>
                    </div>
               </div>
           </div>
      </div>


      <div class="sponcer-logo d-inline-block w-100">

         <div class="container">
            <div class="mindle-heading text-center">
              <h1> Our <span> Sponsors </span> </h1>
            </div>
            <span class="bgi-text light-tsext01"> Sponsors </span>
            <div class="sponj-slide owl-carousel owl-theme mt-5">
                <div class="corm-iteml">
                    <figure class="m-auto">
                       <img src="assets2/images/brand_food2.jpg" alt="jok"/>
                    </figure>
                </div>
                <div class="corm-iteml">
                  <figure class="m-auto">
                     <img src="assets2/images/logo-3-1.png" alt="jok"/>
                  </figure>
                </div>
            </div>
         </div>
      </div>
</section>

<!-- <button type="button" class="btn btn-member" data-bs-toggle="modal" data-bs-target="#memberModal"> Become A Member </button> -->


@endsection
