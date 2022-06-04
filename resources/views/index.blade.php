<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>John Doe - Personal CV Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('assetswebsite/img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@400;700&family=Poppins&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assetswebsite/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assetswebsite/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assetswebsite/css/style.css')}}" rel="stylesheet">

      </head>
      
    <body data-spy="scroll" data-target=".navbar" data-offset="51">
      
        <div class="wrapper">
            <div class="sidebar">
                @foreach ($personal as $personal)
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    {{-- <img class="w-100 img-fluid mb-4" src="{{ asset('assetswebsite/img/profile.jpg')}}" alt="Image"> --}}
                    <img class="w-100 img-fluid mb-4" src="{{ asset('uploads/' . $personal->image) }}" alt="Image">
                    <h1 class="mt-2">{{ $personal->name }}</h1>
                  

 
                    <div class="mb-4" style="height: 22px;">
                        <h4 class="typed-text-output d-inline-block text-body"></h4>
                        <h5 class="mb-1">
                          @foreach ($experiance as $experiance)

                          {{ $experiance->job_title }}</h5>
                          

                    </div>
                    <div class="d-flex justify-content-center mt-auto mb-3">
                        <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="mx-2" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="d-flex align-items-end justify-content-between">
                        <a href="" class="btn btn-block border-right">Download CV</a>
                        <a href="#contact" class="btn btn-block btn-scroll">Contact Me</a>
                    </div>
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>
          
            <div class="content">
                <!-- About Start -->
                <div class="container bg-white py-5">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">About Me</h2>
                        </div>
                        <div class="col-12">
                            <p>Sea et gubergren justo invidunt at amet clita. Justo sit justo tempor et invidunt voluptua, lorem voluptua ipsum gubergren et est nonumy magna et vero, sit eos dolor sea sed et dolor erat et. Accusam accusam magna aliquyam eirmod amet est kasd dolore sanctus. Lorem ea vero lorem eos eos sanctus labore. Aliquyam vero ipsum dolor duo clita consetetur stet, aliquyam ipsum sea sed et magna amet dolor.</p>
                            <div class="row">
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Name:</h5> 
                                    {{ $personal->name }}
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Birthday:</h5> 1 April 1990
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Degree:</h5> Master
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Experience:</h5> {{ $experiance->years_of_experiance }} Years
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Phone:</h5> {{ $personal->mobile }}
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Email:</h5> {{ $personal->email }}
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Address:</h5> {{ $personal->address }}
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Freelance:</h5> Available
                                </div>
        

                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                @endforeach
                <!-- Skills Start -->
                <div class="container bg-white py-5">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Skills</h2>
                        </div>

                        <div class="col-sm-6">
                            @foreach ($skills as $skills)
                            <div class="skill mb-4">
                                
                                <div class="d-flex justify-content-between">
                                    
                                    <p class="mb-2">{{ $skills->skills_name }}</p>
                                    <p class="mb-2">{{ $skills->skills_grade }}%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width:{{ $skills->skills_grade }}%" aria-valuenow="{{ $skills->skills_grade }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                
                            </div>
                            @endforeach
                           
                    </div>
                </div>
                <!-- Skills End -->


                <!-- Education Start -->
                <div class="container bg-white py-5">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Education</h2>
                        </div>
                        <div class="col-12">
                            @foreach ($qualification as $qualification)
                            <div class="border-left border-primary pt-2 pl-4 ml-2">
                                <div class="position-relative mb-4">
                                    <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                                    <h5 class="mb-1">
                                      {{ $qualification->qualification_name }}</h5> 
                                    
                                    <p class="mb-2">Iam graduated from : {{ $qualification->university }} | on <small>{{ $qualification->year }}</small></p>
                                    <p>My Grade in this qualification is : {{ $qualification->grade }} </p>
                                </div>
                                
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- Education End -->

                <!-- Services Start -->
                <div class="container bg-white pt-5 pb-3">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Expericence</h2>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                            <h5 class="mb-2"> {{ $experiance->job_title }}</h5>
                            <p>I work at : {{ $experiance->place }} in this period of Time : ({{ $experiance->created_at }} - {{ $experiance->updated_at }})</p>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fab fa-2x fa-android mx-auto mb-4"></i>
                            <h5 class="mb-2">Apps Development</h5>
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-search mx-auto mb-4"></i>
                            <h5 class="mb-2">SEO</h5>
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-edit mx-auto mb-4"></i>
                            <h5 class="mb-2">Content Creating</h5>
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div>
                    </div>
                </div>
                <!-- Services End -->


                <!-- Portfolio Start -->
                <div class="container bg-white pt-5 pb-3">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Portfolio</h2>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 text-center mb-2">
                                    <ul class="list-inline mb-4" id="portfolio-flters">
                                        <li class="btn btn-outline-primary active"  data-filter="*"><i class="fa fa-star mr-2"></i>All</li>
                                        <li class="btn btn-outline-primary" data-filter=".first"><i class="fa fa-laptop-code mr-2"></i>Design</li>
                                        <li class="btn btn-outline-primary" data-filter=".second"><i class="fa fa-mobile-alt mr-2"></i>Development</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row portfolio-container">
                                <div class="col-md-6 mb-4 portfolio-item first">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="{{ asset('assetswebsite/img/portfolio-1.jpg')}}" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="{{ asset('assetswebsite/img/portfolio-1.jpg')}}" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item second">
                                    <div class="position-relative overflow-hidden mb-2">
                                      <img class="img-fluid w-100" src="{{asset('assetswebsite/img/portfolio-2.jpg')}}" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="{{asset('assetswebsite/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item first">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="{{ asset('assetswebsite/img/portfolio-3.jpg')}}" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="{{ asset('assetswebsite/img/portfolio-3.jpg')}}" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <img class="img-fluid w-100" src="{{ asset('assetswebsite/img/portfolio-4.jpg')}}" alt="">
                                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="{{ asset('assetswebsite/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio End -->


                <!-- Testimonial Start -->
                <div class="container bg-white py-5">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Testimonial</h2>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel testimonial-carousel">
                                <div class="text-left">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" src="{{ asset('assetswebsite/img/testimonial-1.jpg')}}" style="width: 60px; height: 60px;">
                                        <div class="pl-3">
                                            <h5 class="text-primary m-0">Client Name</h5>
                                            <i>Profession</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" src="{{ asset('assetswebsite/img/testimonial-2.jpg')}}" style="width: 60px; height: 60px;">
                                        <div class="pl-3">
                                            <h5 class="text-primary m-0">Client Name</h5>
                                            <i>Profession</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" src="{{ asset('assetswebsite/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;">
                                        <div class="pl-3">
                                            <h5 class="text-primary m-0">Client Name</h5>
                                            <i>Profession</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->


                <!-- Contact Start -->
                <div class="container bg-white py-5" id="contact">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Contact Me</h2>
                        </div>
                        <div class="col-12">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="form-row">
                                        <div class="control-group col-sm-6">
                                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                                required="required" data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="control-group col-sm-6">
                                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                                required="required" data-validation-required-message="Please enter your email" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                            required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                            required="required"
                                            data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
                
                
                <!-- Footer Start -->
                <div class="container-fluid bg-white pt-5 px-0">
                    <div class="container bg-dark text-light text-center py-5">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a class="text-white" href="#">Privacy</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#">Terms</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#">FAQs</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#">Help</a>
                        </div>
                        <p class="m-0">&copy; All Rights Reserved. Designed by <a href="#">Nader .. {{date('Y')}}</a></p>
                    </div>
                </div>
                <!-- Footer End -->
                
                @foreach ($user as $user)   
        
        @endforeach
        @endforeach
            </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        
        <!-- JavaScript Libraries -->
        <script src="{{asset('assetswebsite/https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('assetswebsite/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assetswebsite/lib/typed/typed.min.js')}}"></script>
        <script src="{{asset('assetswebsite/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assetswebsite/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assetswebsite/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assetswebsite/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assetswebsite/lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Contact Javascript File -->
        <script src="{{asset('assetswebsite/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('assetswebsite/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assetswebsite/js/main.js')}}"></script>
    </body>
</html>
