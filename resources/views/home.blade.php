@extends('layouts.homelayout')

@section('contents')        
    <div class="container">
        <div class="head-section pb-2">
			<h4 class="text-theme head-text">Our Courses</h4>
			<p class="dt" style="margin-top: -5px; font-weight:500; font-size:13px">Lorem ipsum dolor sit amet</p>
		</div>

		<div class="row mb-5 g-2">
			<div class="col-lg-2 col-md-3 col-sm-4 col-6">
				<div class="card pt-2 course-card h-100">
					<div class="card-body p-1 ">
						<img src="{{asset('images/course/1639911906.jpg')}}" class="mx-auto mb-3 rounded-circle d-flex" alt="" style="height: 100px; width:100px">
						<div class="border-top card-body border-1 course-card-body">
							<h5 class="h6 text-center">Python With Data Structure</h5>
						</div>
						<div class="clearfix"></div>
						
					</div>
					<div class="duration card-footer border-0 mb-1 text-center mx-auto"><h6>Duration : 2 months</h6></div>
				</div>
    		</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-6">
				<div class="card pt-2 course-card h-100">
					<div class="card-body p-1 ">
						<img src="{{asset('images/course/1639915439.jpg')}}" class="mx-auto mb-3 rounded-circle d-flex" alt="" style="height: 100px; width:100px">
						<div class="border-top card-body border-1 course-card-body">
							<h5 class="h6 text-center">Web Development with Django &amp; Sqlite</h5>
						</div>
						<div class="clearfix"></div>
					
					</div>
					<div class="duration card-footer border-0 mb-1 text-center mx-auto"><h6>Duration : 3 months</h6></div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-6">
				<div class="card pt-2 course-card h-100">
					<div class="card-body p-1 ">
						<img src="{{asset('images/course/1639916039.jpg')}}" class="mx-auto mb-3 rounded-circle d-flex" alt="" style="height: 100px; width:100px">
						<div class="border-top card-body border-1 course-card-body">
							<h5 class="h6 text-center">MangoDB, ExpressJS, ReactJS, Nodejs full stack Development</h5>
						</div>
						<div class="clearfix"></div>
						
					</div>
					<div class="duration card-footer border-0 mb-1 text-center mx-auto"><h6>Duration : 4 months</h6></div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-6">
				<div class="card pt-2 course-card h-100">
					<div class="card-body p-1 ">
						<img src="{{asset('images/course/1639916450.jpg')}}" class="mx-auto mb-3 rounded-circle d-flex" alt="" style="height: 100px; width:100px">
						<div class="border-top card-body border-1 course-card-body">
							<h5 class="h6 text-center">Laravel Web Development with Php</h5>
						</div>
						<div class="clearfix"></div>
						
					</div>
					<div class="duration card-footer border-0 mb-1 text-center mx-auto"><h6>Duration : 4 months</h6></div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-6">
				<div class="card pt-2 course-card h-100">
					<div class="card-body p-1 ">
						<img src="{{asset('images/course/1639916867.jpg')}}" class="mx-auto mb-3 rounded-circle d-flex" alt="" style="height: 100px; width:100px">
						<div class="border-top card-body border-1 course-card-body">
							<h5 class="h6 text-center">ReactJs with Postman API</h5>
						</div>
						<div class="clearfix"></div>
						
					</div>
					<div class="duration card-footer border-0 mb-1 text-center mx-auto"><h6>Duration : 2 months</h6></div>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-6">
				<div class="card pt-2 course-card h-100">
					<div class="card-body p-1 ">
						<img src="{{asset('images/course/1654318489.png')}}" class="mx-auto mb-3 rounded-circle d-flex" alt="" style="height: 100px; width:100px">
						<div class="border-top card-body border-1 course-card-body">
							<h5 class="h6 text-center">Android Development with React Native</h5>
						</div>
						<div class="clearfix"></div>
						
					</div>
					<div class="duration card-footer border-0 mb-1 text-center mx-auto"><h6>Duration : 3 months</h6></div>
				</div>
    		</div>
    	</div>

		<div class="head-section pb-2">
			<h4 class="text-theme head-text">Our Students In Industry</h4>
			<p class="dt" style="margin-top: -5px; font-weight:500; font-size:13px">Contributing Nation Development</p>
		</div>

		<div class="owl-carousel mb-4">
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1639898141.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Jay Kumar Bharti </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Full Stack Developer</p>
				<p class="cname">@ EnR Consultancy Services</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1639898753.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Dhritesh kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Backend devloper</p>
				<p class="cname">@ The Renal Project</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1639915410.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Shubham Kr. Ghosh </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Backend Developer</p>
				<p class="cname">@ Quantum IT Innovation</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1639918531.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Alok kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Backend developer</p>
				<p class="cname">@ Uipro</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1639922975.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Manas Das </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Full Stack Developer</p>
				<p class="cname">@ DVG Soft</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1639927046.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Piyush Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Full Stack Developer</p>
				<p class="cname">@ Uipro Corporation Pvt. Ltd</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640065387.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Sanjiv Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Software Developer</p>
				<p class="cname">@ eTechCube LLP</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640138632.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Rishi </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Software Engineer</p>
				<p class="cname">@ Capgemini, Cognizant</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640426510.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Akhilesh Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Associate Software Engineer</p>
				<p class="cname">@ BIPL</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640427948.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Vikas Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Python Developer / Node JS Developer</p>
				<p class="cname">@ Codebucket Solutions Pvt Ltd.</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640441958.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Kamana Kumari </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Python / Node Js Developer</p>
				<p class="cname">@ Hyperreality Technologies</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640512921.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Ajit Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Php developer</p>
				<p class="cname">@ EnR Consultancy services</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640513068.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Suraj kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Python developer</p>
				<p class="cname">@ GREAT FUTURE TECHNOLOGY PRIVATE  LIMITED</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640513395.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Raja kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Laravel Developer Intern</p>
				<p class="cname">@ Quantum IT invoation</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640513747.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Md Danish Alam </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Software Engineer</p>
				<p class="cname">@ Mapmyindia</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640514647.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Md Faiyyaj Alam </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Laravel developer</p>
				<p class="cname">@ Uipro Corporation Private Limited.</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640516019.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Ayush Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Software Engineer</p>
				<p class="cname">@ Techealerz Solutions Private Limited, Gurugram</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640526007.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Pratik Sah </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Solutions Engineer</p>
				<p class="cname">@ Deqode</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1640590472.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Gautam Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Frontend developer</p>
				<p class="cname">@ Wiftcap solution Pvt Ltd</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1645242960.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Piyush Kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Developer</p>
				<p class="cname">@ Samsung SDS</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1647018689.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Mujahid Alam </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Django Development</p>
				<p class="cname">@ Droid7 Technolabs</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1654448633.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Chhotu kumar </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Intrenship</p>
				<p class="cname">@ Codingbhasha</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1654449717.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Jatin Choudhary </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Full Stack Developer</p>
				<p class="cname">@ Quantum IT Innovation</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1654450836.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Pushpesh Pujan </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Graduate Engineer</p>
				<p class="cname">@ Alight Solutions</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1654452033.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Jayant Raj </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Python Developer</p>
				<p class="cname">@ NamaSys Consultancy Pvt. Ltd.</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1654461038.webp" style="height:200px" alt="">
				<h5 class='mt-2'>Manisha kumari </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Software Engineer</p>
				<p class="cname">@ Virtusa Consulting Services Pvt Ltd Pune India.</p>
			</div>
			<div class="outer-div text-center mx-2">
				<img class="img-fluid oject-fit-cover" src="public/images/placement/1654531611.jpg" style="height:200px" alt="">
				<h5 class='mt-2'>Supriya Kumari </h5>
				<!--<div class="connect">-->
				<!--    <a href="#github"><i class='bx bxl-github text-theme' ></i></a>-->
				<!--    <a href="#"><i class='bx bxl-linkedin-square ms-2 text-theme'></i></a>-->
				<!--    <a href="#"><i class='bx bxl-twitter ms-2 text-theme' ></i></a>-->
				<!--</div>-->
				<p>Laravel Developer</p>
				<p class="cname">@ Srchout Software</p>
			</div>
    	</div>
    </div>
@endsection

