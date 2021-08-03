
@extends('layouts.homebase')

@section('content')

<section id="main-carousel">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets_home\img\car-img2.jpg')}}" class="d-block w-100" alt="">
                <div class="content">
                    <div class="car-content">
                       <a href="">
                        <h1> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quisquam? </h1>
                        <h5 class="mt-4"> Lorem ipsum dolor sit amet consectetur. </h5>
                       </a>
                    </div>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{asset('assets_home\img\car-img3.jpg')}}" class="d-block w-100" alt="">
                 <div class="content">
                    <div class="car-content">
                       <a href="">
                        <h1> Lorem ipsum dolor sit amet consectetur elit. Nulla, quisquam? </h1>
                        <h5 class="mt-4"> Lorem ipsum dolor sit amet consectetur. </h5>
                       </a>
                    </div>
                </div>
              </div>

            <div class="carousel-item">
                <img src="{{asset('assets_home\img\newspaper-car.jpg')}}" class="d-block w-100" alt="">

                    <div class="content">
                    <div class="car-content">
                       <a href="">
                        <h1> Lorem ipsum dolor sit Lorem, ipsum dolor. amet sit consectetur adipisicing elit. Nulla, quisquam? </h1>
                        <h5 class="mt-4"> Lorem ipsum dolor sit amet consectetur. </h5>
                       </a>
                    </div>
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <section id="news-slider">
                <div class="slider" id="swt_slider">

                    <a href="#" class="slider__prev"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="slider__next"><i class="fas fa-chevron-right"></i></a>

                    <div class="slider__wrapper">
                      <div class="slider__container">
                        <div class="slider__element">
                            <div class="image">
                                <a href="">
                                    <img src="https://images.unsplash.com/photo-1598084991519-c90900bc9df0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1951&q=80" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div class="blog-content">
                                    <a href="">
                                        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h1>

                                    <h4 class="small-text mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
                                    <span class="author">
                                        Mr. Lorem Ipsum
                                    </span>

                                    <div class="l-d">
                                        <span>Gurgaon</span>
                                        <span class="mx-2">| </span>
                                        <span>Jan 4, 2021</span>
                                    </div>
                                    <div class="more">
                                        Read | Watch  | Listen
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                          <div class="slider__element">
                            <div class="image">
                                <a href="">
                                    <img src="https://images.unsplash.com/photo-1598084991519-c90900bc9df0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1951&q=80" alt="">
                                </a>                    </div>
                            <div class="content">
                                <div class="blog-content">
                                    <a href="">
                                        <h1>Lorem ipsum dolor, sit amet Lorem ipsum dolor si lorem amet. consectetur adipisicing elit. </h1>

                                    <h4 class="small-text mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
                                    <span class="author">
                                        Mr. Lorem Ipsum
                                    </span>

                                    <div class="l-d">
                                        <span>Gurgaon</span>
                                        <span class="mx-2">| </span>
                                        <span>Jan 4, 2021</span>
                                    </div>
                                    <div class="more">
                                        Read | Watch  | Listen
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                         <div class="slider__element">
                            <div class="image">
                                <a href="">
                                    <img src="https://images.unsplash.com/photo-1598084991519-c90900bc9df0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1951&q=80" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div class="blog-content">
                                    <a href="">
                                        <h1>Lorem ipsum dolor, sit amet consectetur lorem ip adipisicing elit. </h1>

                                    <h4 class="small-text mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
                                    <span class="author">
                                        Mr. Lorem Ipsum
                                    </span>

                                    <div class="l-d">
                                        <span>Gurgaon</span>
                                        <span class="mx-2">| </span>
                                        <span>Jan 4, 2021</span>
                                    </div>
                                    <div class="more">
                                        Read | Watch  | Listen
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
            </section>


            <section id="blog-card" class="bg-light px-3 py-2">
                <div class="container-fluid my-5">
                    <div class="row">
                       <div class="col-6 mb-3">
                           <div class="news-card">
                               <div class="row">
                                <div class="col-lg-6">
                                    <div class="image">
                                       <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                       </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-desc">
                                        <a href="">
                                            <h3 class="news-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing.
                                            </h3>
                                            <p class="author">Mr Lorem Ipsum</p>
                                            <div class="l-d">
                                                <span>Chattisgarh </span>
                                                <span class="mx-2"> | </span>
                                                <span> July 28, 2021 </span>
                                            </div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" role="button" data-bs-toggle="dropdown" aria-expanded="false">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>

                                    </div>
                                </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-6 mb-3">
                        <div class="news-card">
                            <div class="row">
                             <div class="col-lg-6">
                                 <div class="image">
                                     <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                     </a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card-desc">
                                     <a href="">
                                         <h3 class="news-title">
                                             Lorem ipsum dolor sit amet consectetur adipisicing.
                                         </h3>
                                         <p class="author">Mr Lorem Ipsum</p>
                                         <div class="l-d">
                                             <span>Chattisgarh </span>
                                             <span class="mx-2"> | </span>
                                             <span> July 28, 2021 </span>
                                         </div>
                                        </a>
                                             <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" data-bs-toggle="dropdown">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>

                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="news-card">
                            <div class="row">
                             <div class="col-lg-6">
                                 <div class="image">
                                    <a href="">
                                        <img src="{{ asset('assets_home\car-img3.jpg')}}" alt="">
                                    </a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card-desc">
                                     <a href="">
                                         <h3 class="news-title">
                                             Lorem ipsum dolor sit amet consectetur adipisicing.
                                         </h3>
                                         <p class="author">Mr Lorem Ipsum</p>
                                         <div class="l-d">
                                             <span>Chattisgarh </span>
                                             <span class="mx-2"> | </span>
                                             <span> July 28, 2021 </span>
                                         </div>
                                        </a>
                                                <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" data-bs-toggle="dropdown">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>

                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>

                       <div class="col-6">
                        <div class="news-card">
                            <div class="row">
                             <div class="col-lg-6">
                                 <div class="image">
                                    <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                    </a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card-desc">
                                     <a href="">
                                         <h3 class="news-title">
                                             Lorem ipsum dolor sit amet consectetur adipisicing.
                                         </h3>
                                         <p class="author">Mr Lorem Ipsum</p>
                                         <div class="l-d">
                                             <span>Chattisgarh </span>
                                             <span class="mx-2"> | </span>
                                             <span> July 28, 2021 </span>
                                         </div>
                                        </a>
                                        <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" data-bs-toggle="dropdown">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>


            <section id="video-blog" class="">
                <div class="head d-flex mb-5 mt-3" style="justify-content: space-between; align-items: baseline;">
                    <h3 class="" id="heading">Video Blog</h3>
                    <span class="more float-end"><a href="" style="text-decoration: underline;">View More</a></span>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="big-video">
                           <a href="">
                            <video controls>
                                <source src="{{asset('assets_home\img\movie.mp4" type="video/mp4')}}">
                          </video>
                           </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="small-vid">
                            <div class="row">
                              <div class="col-6">
                                <div class="vid">
                                   <a href="">
                                    <video controls>
                                        <source src="{{asset('assets_home\img\file_example_MP4_1920_18MG.mp4')}}" type="video/mp4">
                                      </video>
                                   </a>
                                </div>

                              </div>
                              <div class="col-6">
                                <div class="desc">
                                   <a href="">
                                    <h4 class="title"> Lorem ipsum dolor sit amet Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, sunt. consectetur. </h4>
                                    <div class="l-d">
                                            <span>Chattisgarh </span>
                                            <span class="mx-2"> | </span>
                                            <span> July 28, 2021 </span>
                                        </div>
                                   </a>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                  <div class="vid">
                                      <a href="">
                                        <video controls>
                                            <source src="{{asset('assets_home\img\file_example_MP4_1920_18MG.mp4')}}" type="video/mp4">
                                          </video>
                                      </a>
                                  </div>

                                </div>
                                <div class="col-6">
                                  <div class="desc">
                                        <a href="">
                                            <h4 class="title"> Lorem ipsum dolor sit amet Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, sunt. consectetur. </h4>
                                            <div class="l-d">
                                                  <span>Chattisgarh </span>
                                                  <span class="mx-2"> | </span>
                                                  <span> July 28, 2021 </span>
                                              </div>
                                        </a>
                                  </div>
                              </div>
                              </div>
                              <div class="row">
                                <div class="col-6">
                                  <div class="vid">
                                      <a href="">
                                        <video controls>
                                            <source src="{{asset('assets_home\img\file_example_MP4_1920_18MG.mp4')}}" type="video/mp4">
                                          </video>
                                      </a>
                                  </div>

                                </div>
                                <div class="col-6">
                                  <div class="desc">
                                      <a href="">
                                        <h4 class="title"> Lorem ipsum dolor sit amet Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, sunt. consectetur. </h4>
                                        <div class="l-d">
                                              <span>Chattisgarh </span>
                                              <span class="mx-2"> | </span>
                                              <span> July 28, 2021 </span>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="reports" class="bg-light">
                <div class="container-fluid my-4 ">
                    <div class="head d-flex mb-5 mt-3" style="justify-content: space-between; align-items: baseline;">
                        <h3 class="" id="heading"> Our Surveys & Reports</h3>
                        <span class="more float-end"><a href="" style="text-decoration: underline;">View More</a></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="report-card">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="image">
                                           <a href="">
                                            <img src="{{asset('assets_home\img\newspaper-car.jpg')}}" alt="">
                                           </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                       <a href="">
                                        <h3 class="title">
                                            All India Suryey on Lorem Ipsum Usage (2020-2021)
                                        </h3>
                                        <div class="date">
                                            <span class="text-muted">July 27, 2021</span>
                                        </div>
                                       </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="report-card">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="image">
                                            <a href="">
                                                <img src="{{asset('assets_home\img\newspaper-car.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <a href="">
                                            <h3 class="title">
                                                Our Report on Lorem Ipsum Usage Lorem ipsum dolor sit. (2020-2021)
                                            </h3>
                                            <div class="date">
                                                <span class="text-muted">July 27, 2021</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="banner" class="mb-5">
                <div class="banner-poster">
                    <div class="img">
                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="main">
                            <div class="row">
                                <div class="col-6 text-col">
                                    <span class="large">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                </div>
                                <div class="col-6 ps-4 d-flex align-items-center">
                                    <div class="item">
                                        <button>VIEW ALL</button> <br>
                                        <a href="" class="share">Share Informations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blog-card" class=" px-3 py-2">
                <div class="container-fluid my-5">
                    <div class="row">
                       <div class="col-6 mb-3">
                           <div class="news-card">
                               <div class="row">
                                <div class="col-lg-6">
                                    <div class="image">
                                       <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                       </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-desc">
                                        <a href="">
                                            <h3 class="news-title">
                                                Lorem ipsum dolor sit amet consectetur adipisicing.
                                            </h3>
                                            <p class="author">Mr Lorem Ipsum</p>
                                            <div class="l-d">
                                                <span>Chattisgarh </span>
                                                <span class="mx-2"> | </span>
                                                <span> July 28, 2021 </span>
                                            </div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" role="button" data-bs-toggle="dropdown" aria-expanded="false">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>

                                    </div>
                                </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-6 mb-3">
                        <div class="news-card">
                            <div class="row">
                             <div class="col-lg-6">
                                 <div class="image">
                                     <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                     </a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card-desc">
                                     <a href="">
                                         <h3 class="news-title">
                                             Lorem ipsum dolor sit amet consectetur adipisicing.
                                         </h3>
                                         <p class="author">Mr Lorem Ipsum</p>
                                         <div class="l-d">
                                             <span>Chattisgarh </span>
                                             <span class="mx-2"> | </span>
                                             <span> July 28, 2021 </span>
                                         </div>
                                        </a>
                                             <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" data-bs-toggle="dropdown">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>

                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="news-card">
                            <div class="row">
                             <div class="col-lg-6">
                                 <div class="image">
                                    <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                    </a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card-desc">
                                     <a href="">
                                         <h3 class="news-title">
                                             Lorem ipsum dolor sit amet consectetur adipisicing.
                                         </h3>
                                         <p class="author">Mr Lorem Ipsum</p>
                                         <div class="l-d">
                                             <span>Chattisgarh </span>
                                             <span class="mx-2"> | </span>
                                             <span> July 28, 2021 </span>
                                         </div>
                                        </a>
                                                <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" data-bs-toggle="dropdown">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>

                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>

                       <div class="col-6">
                        <div class="news-card">
                            <div class="row">
                             <div class="col-lg-6">
                                 <div class="image">
                                    <a href="">
                                        <img src="{{asset('assets_home\img\car-img3.jpg')}}" alt="">
                                    </a>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="card-desc">
                                     <a href="">
                                         <h3 class="news-title">
                                             Lorem ipsum dolor sit amet consectetur adipisicing.
                                         </h3>
                                         <p class="author">Mr Lorem Ipsum</p>
                                         <div class="l-d">
                                             <span>Chattisgarh </span>
                                             <span class="mx-2"> | </span>
                                             <span> July 28, 2021 </span>
                                         </div>
                                        </a>
                                        <div class="dropdown">
                                                <button class="language mt-3 dropdown-toggle" id="lang" data-bs-toggle="dropdown">Languages</button>
                                                <ul class="dropdown-menu" aria-labelledby="lang">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                  </ul>
                                            </div>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <hr>


            <section id="s-donate" class="my-5">
                <div class="container text-center">
                    <h1 class="text-center" style="color: rgb(255, 192, 20); font-weight: 900; text-shadow: 3px 3px black;">
                        Like Our Work?
                    </h1>
                    <h4 >You Can Support us by Donating!</h4>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="donate-card py-5">
                                <h1><i class="fas fa-hand-holding-usd"></i></h1>
                                <h3>Donate to NewsBlog</h3>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="donate-card p-5">
                                <h1><i class="fas fa-hands-helping"></i></h1>
                                <h3>Support to NewsBlog</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

 @endsection

