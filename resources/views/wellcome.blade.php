<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>xriea</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- CSS Files -->
 
  <link href="{{asset('assets2')}}/css/bootstrap.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/css/font-awesome.css" rel="stylesheet">

   <!-- Template Main CSS File -->
  <link href="{{asset('assets2')}}/css/style.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/css/Search.css" rel="stylesheet">
  <link href="{{asset('assets2')}}/css//carousel.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span><img src="{{asset('assets2')}}/img/Frame.png" alt=""></span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="{{asset('assets2')}}/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#">Jobs</a></li>
            <li><a class="nav-link scrollto" href="#">Companies</a></li>
            <li><a class="nav-link scrollto" href="#">For Employers</a></li>
            <li><a class="login scrollto" href="{{ route('login') }}">Login</a></li>
            <li><a class="signup scrollto" href="#about">Signup</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <div class="row">
      <div class="col-lg-7 banner-left">
      <h5><img src="{{asset('assets2')}}/img/Frame 122.png" alt=""></h5>
      <h1>It's Easy<br> to find your<br><span>dream job</span></h1>
      <h2 >Explore all the most exciting job roles based on your interest and study major.</h2>
      <div class="col-lg-12 ">
        <div class="s003">
          <form>
            <div class="inner-form">
              
              <div class="input-field second-wrap">
              <input id="search" type="text" placeholder="Job title or keywords" />
              </div>
              <div class="input-field second-wrap">
                <input id="search" type="text" placeholder="Location" />
              </div>
              <div class="input-field first-wrap">
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="">Select Category</option>
                    <option>Designer</option>
                    <option>marketing</option>
                    <option>Devoloper</option>
                  </select>
                  
                </div>
              </div>
              <div class="input-field third-wrap">
                <button class="btn-search" type="button">
                  <svg class="svg-inline--fa fa-search fa-w-16"  data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </form>
        </div>
       </div>
       <p>Popular searches:</p>
       <div class="col-lg-12">
       <a href="#" class="text-box">uI/uX designer</a> <a href="#" class="text-box">Software Developer</a> <a href="#" class="text-box">data management</a> <a href="#" class="text-box">FinancialAnalyst</a> <a href="#" class="text-box">customer support</a>
      </div>
      <a href="#" class="btn-get-started scrollto mt-3">Get Started7 &nbsp;<i class="fa fa-arrow-right" ></i></a>
    </div>
    <div class="col-lg-5 banner-right"><img src="{{asset('assets2')}}/img/Group 87.png"></div>
  </div>
    </div>
  </section><!-- End Hero -->

  <main id="#">

    <!-- ======= Simple Step ======= -->
    <section id="#" class="simple-step">
      <div class="container">
<p class="text-center">How It Works</p>
<h2 class="text-center">Find jobs with us easily by following these<span class="purple">simple steps</span></h2>
        <div class="row content">
          <div class="col-lg-6 simple-part1" >
            <h5 class="green">01.</h5>
            <h6 class="txt-bold">Create your account</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fringilla dui sed erat pretium, sit amet bibendum est luctus.</p>
            <div class="col-lg-12 text-center">
            <div class="simple-part1-img"><img src="{{asset('assets2')}}/img/Frame 26080156.png" alt=""></div></div>
          </div>
          <div class="col-lg-6 simple-step mt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <div class="simple-part2">
              <h5 class="green">02.</h5>
              <h6 class="txt-bold">Update Resume</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fringilla dui sed erat pretium, sit amet bibendum est luctus.</p>
            
            </div>
            <div class="simple-part3">
              <h5 class="green">03.</h5>
              <h6 class="txt-bold">Apply for New Jobs</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fringilla dui sed erat pretium, sit amet bibendum est luctus.</p>
            <div class="col-lg-12 text-center">
              <div class="simple-part3-img"><img src="{{asset('assets2')}}/img/Frame 26080165.png" alt=""></div></div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End Simple Step Section -->
<!-- ======= Why Us Section ======= -->
<section id="#" class="jobopening">
  <div class="container">
    <p class="text-center">How It Works</p>
    <h2 class="text-center">Find jobs with us easily by following these<span class="purple">simple steps</span></h2>
    <div class="row">
  
      <div class="col-lg-12 d-flex align-items-stretch mt-3">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
          @foreach ($jobdata as $data)

                <div class="col-xl-4 d-flex mt-3 align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                        <div class="row mt-3">
                            <div class="col-6"><h4 class="text-left txt-bold">
                                {{ $data->job_title }}</h4>
                            </div>
                            <div class="col-6  text-right"><i class="fa fa-bookmark-o" ></i></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 purple-box text-color2">
                                <i class="fa fa-user-o" ></i> 
                                {{ $data->job_designation }}
                            </div>
                            <div class="col-lg-4 yeollow-box">
                                <i class="fa fa-lightbulb-o" ></i> 
                                {{ $data->experience_from }} - {{ $data->experience_to }}  year
                            </div>
                            <div class="col-lg-4 sky-box">
                                <i class="fa fa-clock-o" ></i>  
                                @if ($data->shift_type == 'full') Full Time @else Part Time @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-lg-12 text-left  ">
                                    <h4 ><span class="green text txt-bold">
                                        $ {{ $data->salary_from }} - $ {{ $data->salary_to }}</span>/month
                                    </h4> 
                                </div>
                                <!-- <div class="col-lg-2 text-left"></div> -->
                        </div>
                        <div class="text-left txt-bold">
                            <h5><span class="purple"><i class="fa fa-map-marker" ></i></span> {{ $data->location_address }}</h5>
                        </div>
                                 @php
                                    // Retrieve the date from the database (replace 'date_field' with your actual date field)
                                   // Calculate the date difference
                                    $currentDate = \Carbon\Carbon::now();
                                    $difference = $currentDate->diff(\Carbon\Carbon::parse($data->job_posted_date));

                                    // Extract the number of days, months, and years
                                    $days = $difference->days;
                                    //$months = $difference->m;
                                    //$years = $difference->y;
                                @endphp
                        <div class="row border-top">
                            <div class="col-8 text-left">
                                <p>{{ $days }} day ago</p>
                                <h4 class="txt-bold">{{ $data->company_name }}</h4>
                            </div>
                            <div class="col-4 ">
                                <img src="{{ asset($data->company_logo_image) }}" class="img-box">
                            </div>
                        </div>
                    </div>
                </div>  <!--  End of streach -->
          @endforeach   
              <!--  End of streach -->
          
        <!-- end streach -->
          </div>
        </div><!-- End .content-->
      </div>
    </div>
   <div class="col-lg-12 text-center"> <a href="#" class="btn-get-started scrollto mt-3">Browse to All Jobs &nbsp;<i class="fa fa-arrow-right" ></i></a></div>
  </div>
</section><!-- End Why Us Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
<h6 class="text-center">Trusted by Job holders from</h6>
        <div class="row counters">

          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <img src="{{asset('assets2')}}/img/Facebook logo.png" alt="">  
          </div>

          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <img src="{{asset('assets2')}}/img/Group 47.png" alt="">  
          </div>

          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <img src="{{asset('assets2')}}/img/Group 48.png" alt="">  
          </div>

          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <img src="{{asset('assets2')}}/img/Group 49.png " alt="">  
          </div>
          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <img src="{{asset('assets2')}}/img/Group 50.png" alt="">  
          </div>
          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <img src="{{asset('assets2')}}/img/Samsung logo.png" alt="">  
          </div>
          <div class="col-lg-1 client-logo col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <img src="{{asset('assets2')}}/img/Group 51.png" alt="">  
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
       <div class="row">
        <div class="col-lg-9">
          <p>100+ jobs category</p>
          <h3>Popular <span class="purple">categories</span></h3>
        </div>
        <div class="col-lg-3"><div class="col-lg-12 text-center"> <a href="#" class="btn-get-started scrollto mt-3">View All Categories &nbsp;<i class="fa fa-arrow-right" ></i></a></div></div>
       </div>
        <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
          <div class="carousel-inner w-100">
            <div class="carousel-item active">
              <div class="col-md-3">
                <div class="card card-body category-box">
                 <div class="row">
                  <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 51.png" alt=""></div>
                  <div class="col-lg-9"><h6 class="green">Design & Creative</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                 </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 52.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Development & IT</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 54.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Marketing & Sales</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 53.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Customer Service</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 51.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Design & Creative</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 52.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Development & IT</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 54.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Marketing & Sales</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-3">
                <div class="card card-body category-box">
                  <div class="row">
                    <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Frame 53.png" alt=""></div>
                    <div class="col-lg-9"><h6 class="green">Customer Service</h6><p><i class="fa fa-suitcase" aria-hidden="true"></i> 50 Jobs</p></div>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        

      </div>
    </section><!-- End Cta Section -->

    <!-- =======  Section ======= -->
    <section id="#" class="price section-bg">
      <div class="container">
        <p class="text-center">Choose a plan followed to your needs</p>
        <h2 class="text-center">Ready to<span class="purple">get started?</span></h2>
                <div class="row ">
          <div class="col-lg-12">
            <div class="row price-box-margine">
              <div class="col-md-4 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <h4><a href="">Starter Plan</a></h4>
                  <p>Lorem ipsum dolor amet conse ctetur adipis cing elit</p>
                  <div class="price-box"><span class="large-txt green txt-bold">$5</span> <span>/ month</span></div>
                  <h6>Features Included :</h6>
                  <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Curabitur rhoncus</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Pellentesque sed orci</li>
                    
                  </ul>
                  <div class="col-lg-12"><div class="col-lg-12 text-center"> <a href="#" class="btn-get-started scrollto mt-3">Create a free account &nbsp;<i class="fa fa-arrow-right" ></i></a></div></div> 

                </div>
              </div>

              <div class="col-md-4 d-flex align-items-stretch  mt-4 ">
                <div class="icon-box2" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Standard Plan</h4>
                  <p>Lorem ipsum dolor amet conse ctetur adipis cing elit</p>
                  <div class="price-box"><span class="large-txt green txt-bold">$10</span> <span>/ month</span></div>
                  <h6>Features Included :</h6>
                  <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Curabitur rhoncus</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Pellentesque sed orci</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Ipsum porta vestibulum</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Suspendisse tristique</li>
                  </ul>
                  <div class="col-lg-12"><div class="col-lg-12 text-center"> <a href="#" class="btn-get-started scrollto mt-3">Create a free account &nbsp;<i class="fa fa-arrow-right" ></i></a></div></div>
                </div>
              </div>

              <div class="col-md-4 d-flex align-items-stretch mt-4">
                <div class="icon-box3" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4>Premium Plan</h4>
                  <p>Lorem ipsum dolor amet conse ctetur adipis cing elit</p>
                  <div class="price-box"><span class="large-txt green txt-bold">$20</span> <span>/ month</span></div>
                  <h6>FFeatures Included :</h6>
                  <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Curabitur rhoncus</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Pellentesque sed orci</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Ipsum porta vestibulum</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Suspendisse tristique</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Commodo metus id</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Maecenas porta massa</li>
                  </ul>
                  <div class="col-lg-12"><div class="col-lg-12 text-center"> <a href="#" class="btn-get-started scrollto mt-3">Create a free account &nbsp;<i class="fa fa-arrow-right" ></i></a></div></div>
                </div>
              </div>

             

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="#" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-inner w-100">
              <div class="carousel-item active">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                   <div class="row">
                    <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                    <h6><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></h6>
                    <p class="text-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris. </p>
                   <div class="row">
                    <div class="col-lg-9">
                      <div class="row">
                      <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5.png" alt=""></div> 
                      <div class="col-lg-9"><h6 class="mb-0">Stanley Martin</h6><p>UI/UX Designer</p></div>
                    </div>
                  </div>
                    <div class="col-lg-3 small-logo"><img class=" " src="{{asset('assets2')}}/img/Group 86.png"></div>
                   </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                    <div class="row">
                      <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                      <h6><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h6>
                      <p class="text-italic">Proin pharetra pulvinar purus quis sollicitudin. Vestibulum malesuada lacinia tortor quis pharetra. Maecenas a porta massa, ut iaculis est. Suspendisse tristique erat ultricies velit porttitor.
                        <div class="row">
                          <div class="col-lg-9">
                            <div class="row">
                            <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5 (1).png" alt=""></div> 
                            <div class="col-lg-9"><h6 class="mb-0">Helen Caro</h6><p>Front End Developer</p></div>
                          </div>
                        </div>
                          <div class="col-lg-3 small-logo"><img class="" src="{{asset('assets2')}}/img/Microsoft logo.png"></div>
                         </div>
                      </p>
                     </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                    <div class="row">
                      <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                      <h6><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h6>
                      <p class="text-italic">Mauris et est ac augue porta volutpat eu quis augue. Suspendisse potenti. Vivamus felis diam, maximus vitae quam vel, placerat gravida diam. Nulla dapibus tincidunt nisl a laoreet. Phasellus tristique ipsum urna, ac hendrerit.</p>
                      <div class="row">
                        <div class="col-lg-9">
                          <div class="row">
                          <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5.png" alt=""></div> 
                          <div class="col-lg-9"><h6 class="mb-0">Jerold Sinclair</h6><p>Marketing Consultent</p></div>
                        </div>
                      </div>
                        <div class="col-lg-3 small-logo"><img class="" src="{{asset('assets2')}}/img/Cisco logo.png"></div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                   <div class="row">
                    <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                    <h6><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></h6>
                    <p class="text-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris. </p>
                   <div class="row">
                    <div class="col-lg-9">
                      <div class="row">
                      <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5.png" alt=""></div> 
                      <div class="col-lg-9"><h6 class="mb-0">Stanley Martin</h6><p>UI/UX Designer</p></div>
                    </div>
                  </div>
                    <div class="col-lg-3 small-logo"><img class=" " src="{{asset('assets2')}}/img/Group 86.png"></div>
                   </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                    <div class="row">
                      <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                      <h6><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h6>
                      <p class="text-italic">Proin pharetra pulvinar purus quis sollicitudin. Vestibulum malesuada lacinia tortor quis pharetra. Maecenas a porta massa, ut iaculis est. Suspendisse tristique erat ultricies velit porttitor.
                        <div class="row">
                          <div class="col-lg-9">
                            <div class="row">
                            <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5 (1).png" alt=""></div> 
                            <div class="col-lg-9"><h6 class="mb-0">Helen Caro</h6><p>Front End Developer</p></div>
                          </div>
                        </div>
                          <div class="col-lg-3 small-logo"><img class="" src="{{asset('assets2')}}/img/Microsoft logo.png"></div>
                         </div>
                      </p>
                     </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                    <div class="row">
                      <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                      <h6><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h6>
                      <p class="text-italic">Mauris et est ac augue porta volutpat eu quis augue. Suspendisse potenti. Vivamus felis diam, maximus vitae quam vel, placerat gravida diam. Nulla dapibus tincidunt nisl a laoreet. Phasellus tristique ipsum urna, ac hendrerit.</p>
                      <div class="row">
                        <div class="col-lg-9">
                          <div class="row">
                          <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5.png" alt=""></div> 
                          <div class="col-lg-9"><h6 class="mb-0">Jerold Sinclair</h6><p>Marketing Consultent</p></div>
                        </div>
                      </div>
                        <div class="col-lg-3 small-logo"><img class="" src="{{asset('assets2')}}/img/Cisco logo.png"></div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                   <div class="row">
                    <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                    <h6><span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></h6>
                    <p class="text-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost rud exercitation ullamco laboris. </p>
                   <div class="row">
                    <div class="col-lg-9">
                      <div class="row">
                      <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5.png" alt=""></div> 
                      <div class="col-lg-9"><h6 class="mb-0">Stanley Martin</h6><p>UI/UX Designer</p></div>
                    </div>
                  </div>
                    <div class="col-lg-3 small-logo"><img class=" " src="{{asset('assets2')}}/img/Group 86.png"></div>
                   </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                    <div class="row">
                      <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                      <h6><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h6>
                      <p class="text-italic">Proin pharetra pulvinar purus quis sollicitudin. Vestibulum malesuada lacinia tortor quis pharetra. Maecenas a porta massa, ut iaculis est. Suspendisse tristique erat ultricies velit porttitor.
                        <div class="row">
                          <div class="col-lg-9">
                            <div class="row">
                            <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5 (1).png" alt=""></div> 
                            <div class="col-lg-9"><h6 class="mb-0">Helen Caro</h6><p>Front End Developer</p></div>
                          </div>
                        </div>
                          <div class="col-lg-3 small-logo"><img class="" src="{{asset('assets2')}}/img/Microsoft logo.png"></div>
                         </div>
                      </p>
                     </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-4">
                  <div class="card card-body category-box">
                    <div class="row">
                      <div class="col-lg-12"><img src="{{asset('assets2')}}/img/Path 13237 1.png" alt=""></div>
                      <h6><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h6>
                      <p class="text-italic">Mauris et est ac augue porta volutpat eu quis augue. Suspendisse potenti. Vivamus felis diam, maximus vitae quam vel, placerat gravida diam. Nulla dapibus tincidunt nisl a laoreet. Phasellus tristique ipsum urna, ac hendrerit.</p>
                      <div class="row">
                        <div class="col-lg-9">
                          <div class="row">
                          <div class="col-lg-3"><img src="{{asset('assets2')}}/img/Ellipse 5.png" alt=""></div> 
                          <div class="col-lg-9"><h6 class="mb-0">Jerold Sinclair</h6><p>Marketing Consultent</p></div>
                        </div>
                      </div>
                        <div class="col-lg-3 small-logo"><img class="" src="{{asset('assets2')}}/img/Cisco logo.png"></div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><img src="{{asset('assets2')}}/img/Frame.png"></h3>
            <p>
              Lorem ipsum dolor sit amet, consecteturscing elit, sed do eiusmod tempor incididu ngt labore.
            </p>
            <div class="social-links text-md-right pt-3 mt-3 pt-md-0">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-youtube"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Quicklinks</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Find Job</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">APost a Job</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">How it works</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Browse Companies</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Faq</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sitemap</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy Policy </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Refund Policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cookie Policy </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms & Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Fraud Alert</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-box">
            <h4>Unlock Opportunities with Job Alerts</h4>
            <p>50K+ jobs live - 1.5K+ added today.</p>
            <div class="col-lg-12 text-center"> <a href="#" class="btn-get-started scrollto mt-3">Subscribe to Job Alerts &nbsp;<i class="fa fa-arrow-right"></i></a></div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex container d-md-flex py-4">
      py-4">

      <div class="text-center ">
        <div class="copyright">
          © 2024 Xiera. All Rights Reserved.
        </div>
        
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--  JS Files -->
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/choices.js"></script>
  <script src="js/jquery.min.js"></script>
  <script>
    const choices = new Choices('[data-trigger]',
    {
      searchEnabled: false,
      itemSelectText: '',
    });
   
  </script>
<script> // var myCarousel = document.querySelector('#myCarousel')
  // var carousel = new bootstrap.Carousel(myCarousel, {
  //   interval: 100000
  // })
  
  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });</script>
</body>

</html>