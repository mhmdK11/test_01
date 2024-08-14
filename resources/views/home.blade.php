<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="p-5 m-5" class="bg" style="background-image: url('images/download.jpeg'); background-size: cover;
                        background-position: center;
                        height: 100vh;">

                        <header id="header" class="header d-flex align-items-center fixed-top">
                            <div class="container-fluid container-xl position-relative d-flex align-items-center">

                              <a href="index.html" class="logo d-flex align-items-center me-auto">
                                <!-- Uncomment the line below if you also wish to use an image logo -->
                                <!-- <img src="assets/img/logo.png" alt=""> -->
                                <h1 class="sitename">Arsha</h1>
                              </a>

                              <nav id="navmenu" class="navmenu">
                                <ul>
                                  <li><a href="#hero" class="active">Home</a></li>
                                  <li><a href="#about">About</a></li>
                                  <li><a href="#services">Services</a></li>
                                  <li><a href="#portfolio">Portfolio</a></li>
                                  <li><a href="#team">Team</a></li>
                                  <li><a href="#pricing">Pricing</a></li>
                                  <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                      <li><a href="#">Dropdown 1</a></li>
                                      <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                        <ul>
                                          <li><a href="#">Deep Dropdown 1</a></li>
                                          <li><a href="#">Deep Dropdown 2</a></li>
                                          <li><a href="#">Deep Dropdown 3</a></li>
                                          <li><a href="#">Deep Dropdown 4</a></li>
                                          <li><a href="#">Deep Dropdown 5</a></li>
                                        </ul>
                                      </li>
                                      <li><a href="#">Dropdown 2</a></li>
                                      <li><a href="#">Dropdown 3</a></li>
                                      <li><a href="#">Dropdown 4</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="#contact">Contact</a></li>
                                </ul>
                                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                              </nav>

                              <a class="btn-getstarted" href="#about">Get Started</a>

                            </div>
                          </header>

                        <section id="hero" class="hero section dark-background">

                            <div class="container">
                              <div class="row gy-4">
                                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                                  <h1>Better Solutions For Your Business</h1>
                                  <p>We are team of talented designers making websites with Bootstrap</p>
                                  <div class="d-flex">
                                    <a href="#about" class="btn-get-started">Get Started</a>
                                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                  </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                                  <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                                </div>
                              </div>
                            </div>

                          </section>
    <section>
    @foreach ($ser as $serr)
    <div class="card p-5 m-5" >
        <div class="card-body container-xl">
          <h5 class="card-title container-xl m-5">{{$serr->title}}</h5>
          <img src="../{{$serr->img}}" class="card-img-center container-xl" alt="...">
          <p class="card-text container-xl m-5">{{$serr->description}}</p>

        </div>
        <a href="/ed/{{$serr->id}}" class="btn btn-primary">تعديل</a>


    </div>

      @endforeach
    </section>
</body>
</html>
