<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsBlog</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    body{
        font-family: poppins;
    }
</style>
<body>
    

    <section id="navbar" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                  <div class="logo">
                      <img src="img\logo.png" alt="">
                  </div>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Stories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu mt-4" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Donate</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#search" data-bs-toggle="modal"><i class="fas fa-search"></i></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Lang
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">English</a></li>
                      <li><a class="dropdown-item" href="#">Hindi</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">More</a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>
            </div>
          </nav>    
    </section>

    <div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog p-0">
          <div class="modal-content p-0">
          
            <div class="modal-body p-0">
              <div class="input-group">
                  <input type="search" placeholder="Search for Blogs, News & more.." class="form-control">
                  <button class="btn btn-dark"><i class="fas fa-search"></i></button>
              </div>
            </div>
            
          </div>
        </div>
      </div>



    <section id="main-poster">
        <div class="poster">
            <img src="img\poster1.jpg" alt="">
            <div class="content">
               <div class="container-fluid">
                <div class="data">
                    <div class="cat-date">
                        <span class="cat-name">Lorem Ipsum Category Name here</span>
                        <span class="mx-3">|</span>
                        <span>September 15, 2021</span>
                    </div>
                    <div class="title">
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                    </div>
                    <div class="desc">
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere numquam voluptates nesciunt assumenda quisquam optio vitae corrupti modi eum mollitia! Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="actions d-none d-lg-block">
                        <div class="action-content d-flex">
                            <span class="fixed" style="width: 160px;">Mr. Author Ipsum</span>
                        <span class=""> 
                            <div class="dropdown"> Language
                                <button class="btn btn-secondary dropdown-toggle py-0 my-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  English
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                        </span>
                        <span>
                            Read Story in Pictures
                        </span>
                        <span>
                            Share
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook"></i>
                        </span>
                        <span>
                            Print this Story
                        </span>
                        <span>
                            <i class="fas fa-map-marker"></i> 
                             Ghaziabad, Uttar Pradesh
                               
                        </span>
                        <span class="see-more">
                            See More from this Area
                        </span>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>


    <section id="blog-text">
        <div class="container px-5 my-5">
            <p class="">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur. Consequatur dignissimos doloremque et necessitatibus suscipit deleniti libero aspernatur exercitationem nemo maiores! Eius voluptas ex eaque doloremque ea odit officia ab animi error fugit, id cum officiis deleniti veritatis quia, modi hic maxime eligendi atque alias doloribus amet quibusdam omnis. Consectetur quae neque veniam iusto harum sed aliquam odio maiores quas dicta adipisci rem id temporibus, nisi quibusdam. Quidem consectetur ad vel quisquam harum commodi aliquam quos delectus obcaecati? Veritatis molestiae eos omnis obcaecati iure quas magnam. Perferendis dolores iure eius suscipit! Odio, animi iure alias maiores quos quo dolor veritatis, omnis placeat rerum laboriosam nulla minus nobis porro. Nemo magni dolorem minima blanditiis, delectus explicabo corporis illo porro, sequi incidunt vel.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, optio? Non labore voluptatibus a dolorum quam modi, repudiandae dolore veniam odio minima aut repellendus sapiente voluptatum nobis enim temporibus consequuntur ipsam ipsum. Dolor nesciunt optio harum deleniti odio quae, eveniet, placeat cum mollitia doloribus expedita. Dolorum voluptates quam quis atque porro commodi tempora! Ipsa reprehenderit delectus saepe quis illum, repellendus dolor laudantium perspiciatis, tempore vero magni voluptatibus Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, elit. eaque numquam quibusdam?
            </p>
        </div>
    </section>

    <section id="blog-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img\car-img2.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="img\car-img3.jpg" alt="">
                </div>
            </div>
            <div class="img-desc p-3 text-center">
                <p class="small text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, esse consequuntur. Asperiores nemo est aspernatur culpa nesciunt consequatur laborum, perspiciatis harum quaerat ad enim recusandae, autem omnis saepe voluptas eveniet cupiditate! In deserunt magni similique. 
                </p>
            </div>
        </div>
    </section>

    <section id="blog-text">
        <div class="container px-5 my-5">
            <p class="">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur. Consequatur dignissimos doloremque et necessitatibus suscipit deleniti libero aspernatur exercitationem nemo maiores! Eius voluptas ex eaque doloremque ea odit officia ab animi error fugit, id cum officiis deleniti veritatis quia, modi hic maxime eligendi atque alias doloribus amet quibusdam omnis. Consectetur quae neque veniam iusto harum sed aliquam odio maiores quas dicta adipisci rem id temporibus, nisi quibusdam. Quidem consectetur ad vel quisquam harum commodi aliquam quos delectus obcaecati? Veritatis molestiae eos omnis obcaecati iure quas magnam. Perferendis dolores iure eius suscipit! Odio, animi iure alias maiores quos quo dolor veritatis, omnis placeat rerum laboriosam nulla minus nobis porro. Nemo magni dolorem minima blanditiis, delectus explicabo corporis illo porro, sequi incidunt vel.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, optio? Non labore voluptatibus a dolorum quam modi, repudiandae dolore veniam odio minima aut repellendus sapiente voluptatum nobis enim temporibus consequuntur ipsam ipsum. Dolor nesciunt optio harum deleniti odio quae, eveniet, placeat cum mollitia doloribus expedita. Dolorum voluptates quam quis atque porro commodi tempora! Ipsa reprehenderit delectus saepe quis illum, repellendus dolor laudantium perspiciatis, tempore vero magni voluptatibus Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, elit. eaque numquam quibusdam?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem modi et cumque quas, doloremque vero officia facilis exercitationem magnam nostrum voluptatem provident eos deleniti incidunt vitae amet suscipit dicta aliquid, tenetur tempore fugit rem. Eligendi quisquam doloremque magni eum consectetur itaque dignissimos libero inventore totam quae sed nemo expedita, ipsa possimus quia voluptates aliquid molestias at optio voluptate, sit maiores, omnis et. Laborum voluptates porro temporibus corporis quis odio modi eaque! Ex, maxime. Dolores, repudiandae ratione veritatis animi sunt debitis in sed velit quis fugit soluta dolorum hic dolor odio sequi ad ducimus eligendi deserunt ab. Totam, officia numquam sint distinctio similique rerum in iusto, quaerat sunt ipsum inventore, quas provident aliquam ex ad! Facere iure nobis praesentium cupiditate impedit, necessitatibus tempora incidunt saepe omnis et tempore laboriosam dolor expedita ipsum vero fugiat aspernatur earum repellat eveniet veniam? Ducimus deleniti blanditiis exercitationem placeat magni magnam animi quis ipsum neque molestiae!
            </p>
        </div>
    </section>

    <section id="blog-video">
        <div class="container">
           <div class="row">
            <video width="320" height="240" controls>
                <source src="img\movie.mp4" type="video/mp4">                        
            </video>
           </div>
            <div class="vid-desc py-2 px-5 text-center">
                <p class="small text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, esse consequuntur. Asperiores nemo est aspernatur culpa nesciunt consequatur laborum, perspiciatis harum quaerat ad enim recusandae, autem omnis saepe voluptas eveniet cupiditate! In deserunt magni similique. 
                </p>
            </div>
        </div>
    </section>

    <section id="blog-text">
        <div class="container px-5 my-5">
            <p class="">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur. Consequatur dignissimos doloremque et necessitatibus suscipit deleniti libero aspernatur exercitationem nemo maiores! Eius voluptas ex eaque doloremque ea odit officia ab animi error fugit, id cum officiis deleniti veritatis quia, modi hic maxime eligendi atque alias doloribus amet quibusdam omnis. Consectetur quae neque veniam iusto harum sed aliquam odio maiores quas dicta adipisci rem id temporibus, nisi quibusdam. Quidem consectetur ad vel quisquam harum commodi aliquam quos delectus obcaecati? Veritatis molestiae eos omnis obcaecati iure quas magnam. Perferendis dolores iure eius suscipit! Odio, animi iure alias maiores quos quo dolor veritatis, omnis placeat rerum laboriosam nulla minus nobis porro. Nemo magni dolorem minima blanditiis, delectus explicabo corporis illo porro, sequi incidunt vel.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, optio? Non labore voluptatibus a dolorum quam modi, repudiandae dolore veniam odio minima aut repellendus sapiente voluptatum nobis enim temporibus consequuntur ipsam ipsum. Dolor nesciunt optio harum deleniti odio quae, eveniet, placeat cum mollitia doloribus expedita. Dolorum voluptates quam quis atque porro commodi tempora! Ipsa reprehenderit delectus saepe quis illum, repellendus dolor laudantium perspiciatis, tempore vero magni voluptatibus Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, elit. eaque numquam quibusdam?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem modi et cumque quas, doloremque vero officia facilis exercitationem magnam nostrum voluptatem provident eos deleniti incidunt vitae amet suscipit dicta aliquid, tenetur tempore fugit rem. Eligendi quisquam doloremque magni eum consectetur itaque dignissimos libero inventore totam quae sed nemo expedita, ipsa possimus quia voluptates aliquid molestias at optio voluptate, sit maiores, omnis et. Laborum voluptates porro temporibus corporis quis odio modi eaque! Ex, maxime. Dolores, repudiandae ratione veritatis animi sunt debitis in sed velit quis fugit soluta dolorum hic dolor odio sequi ad ducimus eligendi deserunt ab. Totam, officia numquam sint distinctio similique rerum in iusto, quaerat sunt ipsum inventore, quas provident aliquam ex ad! Facere iure nobis praesentium cupiditate impedit, necessitatibus tempora incidunt saepe omnis et tempore laboriosam dolor expedita ipsum vero fugiat aspernatur earum repellat eveniet veniam? Ducimus deleniti blanditiis exercitationem placeat magni magnam animi quis ipsum neque molestiae!
            </p>
        </div>
    </section>


    <section id="author-details" class="bg-dark p-5 text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="info">
                        <h2 class="author-name">Piyush Thakur</h2> 
                        <h5>Share <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i></h5>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="container">
                        <p class="lead">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At blanditiis, quod laboriosam quaerat voluptas illum consequatur illo, repellendus eos a, provident accusamus aut!
                        </p>
                        <button>Other Stories From Piyush Thakur</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-card" class=" px-3 py-2">
       
        <div class="container-fluid my-5">
            <div class="head d-flex mb-5 mt-3 px-2" style="justify-content: space-between; align-items: baseline;">
                <h3 class="" id="heading">Related</h3>
                <span class="more float-end"><a href="" style="text-decoration: underline; color: black;">View More</a></span>
            </div>
            <div class="row">
               <div class="col-6 mb-3">
                   <div class="news-card">
                       <div class="row">
                        <div class="col-lg-6">
                            <div class="image">
                               <a href="">
                                <img src="img\car-img3.jpg" alt="">
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
                                <img src="img\car-img3.jpg" alt="">
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
                                <img src="img\car-img3.jpg" alt="">
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
                                <img src="img\car-img3.jpg" alt="">
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




<footer class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href=""><p><strong>About Us</strong></p></a>
                <a href=""><p>Contact Us</p></a>
                <a href=""><p>Join Us</p></a>
                <a href=""><p>Privacy Policy</p></a>
                <a href=""><p>Terms of Service</p></a>
            </div>
            <div class="col-lg-3">
                <a href=""><p><strong>Contact</strong></p></a>
                <a href=""><p>Newsletter </p></a>
                <a href=""><p>Blog</p></a>
                <a href=""><p>Acknowlegdements</p></a>
                <a href=""><p>Guidelines</p></a>

            </div>
            <div class="col-lg-3">
                <a href=""><p><strong>Get Involved</strong></p></a>
                <a href=""><p>Donate</p></a>
                <a href=""><p>Volunteer </p></a>
                <div class="social-links mb-3">
                    <a href=""><p><strong>Social Links</strong></p></a>
                    <span><i class="fab fa-facebook"></i></span>
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-instagram"></i></span>
                    <span><i class="fab fa-google"></i></span>
                    <span><i class="fab fa-youtube"></i></span>
                </div>
            </div>
            <div class="col-lg-3 border-0">
                <a href=""><p><strong>Recieve Our News & Updates</strong></p></a>
                <input type="text" placeholder="Enter Email" class="form-control form-control-sm">
                <button class="btn btn-sm btn-primary w-100 my-3">Subscribe Now</button>
            </div>
        </div>
    </div>
</footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>