<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsBlog</title>
    <link rel="stylesheet" href="{{asset('assets_home/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


    <section id="navbar" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                  <div class="logo">
                      <img src="{{asset('assets_home\img\logo.png')}}" alt="">
                  </div>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li> --}}

                  @foreach ($navigations->where('title', '!=', 'home') as $n)

                    <li class="nav-item dropdown">
                        <a class="nav-link  @if ($n->category->child->count() > 0) dropdown-toggle

                        @endif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ucfirst($n->category->name)}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       @foreach ($n->category->child as $sub)
                        <li><a class="dropdown-item" href="">{{ucfirst($sub->name)}}</a></li>

                        @endforeach
                    </ul>
                      </li>

                  @endforeach



                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('about')}}">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('donate')}}">Donate</a>
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

      @yield('content')

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
        <script src="{{asset('assets_home/js/script.js')}}"></script>
    </body>
    </html>
