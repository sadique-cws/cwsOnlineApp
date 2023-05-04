
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codewithsadiq.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 05:05:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code With SadiQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://unpkg.com/boxicons%402.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
    <body class="light-theme ">            
        <div class="header-div vh-100 ">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container">
                    
                    <a href="index.html" class="navbar-brand">CodeWithSadiQ</a>
                    <ul class="navbar-nav w-100 d-none d-lg-flex d-sm-none d-md-none">
                        <div class="navbar-nav mx-auto">
                            <li class="nav-item ms-5 nav-btn nav-btn-active "><a href="index.html" class="nav-link">Home</a></li>
                            <li class="nav-item ms-2 nav-btn "><a href="courses.html" class="nav-link ">Courses</a></li>
                            <li class="nav-item ms-2 nav-btn "><a href="v2/gallery.html" class="nav-link ">Gallery</a></li>
                        </div>
                        <li class="nav-item ms-auto nav-btn "><a href="payment.html" class="nav-link ">Online Payment</a></li>
                        <li class="nav-item"><a href="apply.html" class="ms-3 px-3 nav-link btn btn-apply">Apply For Admission</a></li>
                        <li class="nav-item ms-3">
                            <a class="nav-link btn-apply d-lg-block d-none fs-5 px-3 bx bxs-moon" style="cursor:pointer" id="theme-toggle"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-lg-none d-block">
                        <li class="nav-item"><a href="payment.html" class="nav-link btn btn-apply px-3 me-2 ">₹ Online Payment</a></li>
                    </ul>
                </div>
            </nav>
            
            @section('banner')
              <div class="container main-container pt-lg-5">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <h5 class="display-4 mt-5 heading-text">
                                Skill hai, <br> Toh Future Hai!
                            </h5>
                            <p class="paragraph">"CWS is an on-demand marketplace for top Programming engineers, developers, consultants, architects, programmers, and tutors. Get your projects built by vetted web programming freelancers or learn from expert mentors with team training & coaching experiences in Project based training."</p>
                            <a href="apply.html" class="btn-apply mt-3 btn px-4 justify-content-center align-items-center d-inline-flex"><i class='bx bx-spreadsheet me-2 fs-3'></i> Join now</a>
                        </div>
                        <div class="col-lg-6  px-3">
                            <div class="d-lg-block d-none justify-content-center align-items-center">
                                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_n9ounqpx.json"  background="transparent.html"  speed="0.3"  style="width: 500px; height: 500px;" autoplay></lottie-player>
                            </div>

                            <div class="card mt-5 bg-transparent d-lg-none d-block" style="border-radius: 16px">
                                <div class="card-body d-flex">
                                    <!--<div class="w-100  ">-->
                                    <!--    <a href="https://codewithsadiq.com" class="d-flex justify-content-center align-items-center d-flex nav-btn btn-apply p-2 text-decoration-none">-->
                                    <!--        <i class="bx bxs-home fs-2 me-2"></i>Home-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <div class="w-100 ">
                                        <a href="v2/gallery.html" class="d-flex justify-content-center align-items-center d-flex nav-btn btn-apply p-2 text-decoration-none">
                                            <i class="bx bx-book fs-2 me-2"></i>Course
                                        </a>
                                    </div>
                                    <div class="w-100 ms-4 ">
                                        <a href="v2/gallery.html" class="d-flex justify-content-center align-items-center d-flex nav-btn btn-apply p-2 text-decoration-none">
                                            <i class="bx bx-image fs-2 me-2"></i>Gallery
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            @show
        </div>
         
        @section('contents')
        
        @show

        <footer class=" text-light footer pt-5 mt-5 ">
            <div class="container py-2 mb-4">
               <div class="row gy-4 row-cols-1 row-cols-lg-4 row-cols-md-4 row-cols-sm-2">
                    <div class="cols">
                        <div class="d-flex">
                            <img src="https://avatars.githubusercontent.com/u/32757358?v=4" style="height: 80px; width:80px; border-radius:16px" alt="sadique-hussain">
                            <h6 class="mt-2 ms-2">Sadique Hussain
                                <br> <p class="small fw-bold mt-2">Tutor</p>
                            </h6>
                        </div>
                        <ul class="footer-ul mt-2">
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bxl-linkedin-square me-2'> </i> linkedIn</a></li>
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bxl-github me-2'> </i>github</a></li>
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bxl-facebook-square me-2'> </i>facebook</a></li>
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bxl-instagram me-2'> </i>instagram</a></li>
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bxl-twitter me-2'> </i>twitter</a></li>
                        </ul>
                    </div>
                    <div class="cols">
                        <h4 class="h6">Quick Links</h4>
                        <ul class="footer-ul">
                            <li class="f-item"><a href="#" class="f-link">Home</a></li>
                            <li class="f-item"><a href="#" class="f-link">About</a></li>
                            <li class="f-item"><a href="#" class="f-link">Gallery</a></li>
                            <li class="f-item"><a href="#" class="f-link">Projects</a></li>
                            <li class="f-item"><a href="#" class="f-link">Workshops</a></li>
                            <li class="f-item"><a href="#" class="f-link">Hire Us</a></li>
                        </ul>
                    </div>
                    <div class="cols">
                        <h4 class="h6">About Class</h4>
                        <ul class="footer-ul">
                            <li class="f-item"><a href="#" class="f-link">About Instructor</a></li>
                            <li class="f-item"><a href="#" class="f-link">MileStones</a></li>
                            <li class="f-item"><a href="#" class="f-link">Vision</a></li>
                            <li class="f-item"><a href="#" class="f-link">Community</a></li>
                            <li class="f-item"><a href="#" class="f-link">Our Team</a></li>
                        </ul>
                    </div>
                    <div class="cols">
                        <h4 class="h6">Location</h4>
                        <p class="small">
                            <i class='bx bxs-map me-2'> </i> Ramavtar Market, Near Dog Hospital,
                            Thana Chowk, Gandhinagar, Madhubani, Purnea - 854301
                        </p>
                        <ul class="footer-ul">
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bxs-phone me-2'></i>+91 95 4680 5580</a></li>
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bx-envelope me-2'></i> cwspurnea@gmail.com</a></li>
                            <li class="f-item"><a href="#" class="f-link"><i class='bx bx-world me-2'></i> www.codewithsadiq.com</a></li>
                        </ul>
                    </div>
               </div>
            </div>
            <div class="container d-flex justify-content-center border-top border-1 border-dark align-items-center p-2">
                <p class="small text-light mt-3">© Code with SadiQ, All rights reserved</p>
            </div>
        </footer>

        {{--  --}}
        <script>
            var toggle_icon = document.getElementById('theme-toggle');
            var body = document.getElementsByTagName('body')[0];
            var sun_class = 'bxs-sun';
            var moon_class = 'bxs-moon';
            var dark_theme_class = 'dark-theme';
            var dark_text_class = 'dark-theme-text';
            var asdf = document.getElementsByClassName("testing")[0];
    
            toggle_icon.addEventListener('click', function() {
                // alert('hello')
                if (body.classList.contains(dark_theme_class)) {
                    toggle_icon.classList.add(moon_class);
                    toggle_icon.classList.remove(sun_class);
                    // asdf.classList.remove(dark_text_class)
    
                    body.classList.remove(dark_theme_class);
                    setCookie('theme', 'light');
                }
                else {
                    toggle_icon.classList.add(sun_class);
                    toggle_icon.classList.remove(moon_class);
                    // asdf.classList.add(dark_text_class)
    
                    body.classList.add(dark_theme_class);
                    setCookie('theme', 'dark');
                }
            });
    
            function setCookie(name, value) {
                var d = new Date();
                d.setTime(d.getTime() + (365*24*60*60*1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = name + "=" + value + ";" + expires + ";path=/";
            }
    
        </script>
        <script>
            var $owl = $('.owl-carousel');
    
            $owl.children().each( function( index ) {
                $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
            });
    
            $owl.owlCarousel({
                center: true,
                loop: true,
                items: 5,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
    
            $(document).on('click', '.owl-item>div', function() {
                // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
                var $speed = 300;  // in ms
                $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
            });
        </script>
        <script src="../unpkg.com/%40lottiefiles/lottie-player%401.7.1/dist/lottie-player.js"></script>
        <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    </body>
</html>
    