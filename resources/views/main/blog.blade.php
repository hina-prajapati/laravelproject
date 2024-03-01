
@extends('layout2')
 @section('content')

<section class="banner-part sub-main-banner float-start w-100">
     
          <div class="baner-imghi">
             <img src="assets2/images/sub-banner01.jpg" alt="sub-banner"/>
          </div>

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
               </div>
            </div>

   
</section>

<section class="float-start w-100 body-part pt-0">
   
    <div class="blogs-page d-inline-block w-100">
        <div class="container">
             <div class="row">
                <div class="col-lg-5">
                    <h2 class="comon-heading"> Our News </h2>
                </div>
                <div class="col-lg-7 d-lg-grid justify-content-lg-end">
                    <div class="d-flex align-items-center">
                        <p class="me-3"> Showing 1-4 of 13 results </p>
                        <div class="dropdown">
                           <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                             Sort by Latest
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                             <li><a class="dropdown-item" href="#">A-Z</a></li>
                             <li><a class="dropdown-item" href="#">Best Selling</a></li>
                             <li><a class="dropdown-item" href="#">Most Popular</a></li>
                           </ul>
                         </div>
                    </div>
                </div>
             </div>

             <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 mt-0">
                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.webp" alt="pbnm">
                          </figure>
                          <span class="daet01">
                           20
                            <small class="d-block">Mar</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> Vivamus quis nisi eu nunc </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/istockphoto-1158435344-612x612.jpg" alt="pbnm">
                          </figure>
                          <span class="daet01">
                            10
                            <small class="d-block">Jan</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> Fusce accumsan urna  </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/np_file_171051.jpeg" alt="pbnm">
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
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/pexels-photo-3628912.jpeg" alt="pbnm">
                          </figure>
                          <span class="daet01">
                            08
                            <small class="d-block">Jan</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> Sed laoreet felis dignissim </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/pexels-photo-13509632.jpeg" alt="pbnm">
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
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/pexels-photo-1103829.jpeg" alt="pbnm">
                          </figure>
                          <span class="daet01">
                            05
                            <small class="d-block">Mar</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> Proin in arcu eu ligula </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>

                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/pexels-photo-1103829.jpeg" alt="pbnm">
                          </figure>
                          <span class="daet01">
                            04
                            <small class="d-block">Jun</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> In ut risus sed felis venenatis </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/pexels-photo-1103829.jpeg" alt="pbnm">
                          </figure>
                          <span class="daet01">
                            02
                            <small class="d-block">Jun</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> Aliquam in erat at </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>

                <div class="col">
                    <a href="blog-details.html" class="comon-posrt w-100 d-inline-block">
                        <div class="img-boxv w-100 d-inline-block">
                          <figure class="w-100 d-inline-block">
                              <img src="assets2/images/pexels-photo-9148548.jpeg" alt="pbnm">
                          </figure>
                          <span class="daet01">
                            02
                            <small class="d-block">Jun</small>
                          </span>
                        </div>
                        <div class="parar-delatsy">
                          <h6>Cricket</h6>
                          <h5> It is a long established </h5>
                          <p class="my-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been</p>
                          <div class="user-dela06 w-100 d-inline-block d-flex justify-content-between align-items-center">
                             <div class="admins d-flex align-items-center">
                                <figure class="m-0 me-2">
                                   <img src="assets2/images/manages-st.jpg" alt="spbn">
                                </figure>
                                <span>Jmanes</span>
                             </div>
                             <span class="crom"> <i class="far fa-comments"></i> 2 Comments</span>
                          </div>
                        </div>
                       
                     </a>
                </div>


             </div>
        </div>
    </div>


</section>


<button type="button" class="btn btn-member" data-bs-toggle="modal" data-bs-target="#memberModal"> Become A Member </button>



@endsection