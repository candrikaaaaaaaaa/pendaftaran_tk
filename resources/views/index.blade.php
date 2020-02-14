<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Taman Kanak Kanak</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/jcarousel.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/flexslider.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/frontend/sekolah/sekolah/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/style.css')}}" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{-- <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/frontend/sekolah/sekolah/img/logo1.svg')}}" alt=""/></a> --}}
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="./">Home</a></li>
						<li><a href="./profil">Profile</a></li>
                        <li><a href="./galeri">Gallery</a></li>
                        <li><a href="./pendaftaran">Pendaftaran</a></li>
                        {{-- <li><a href="contact.html">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="featured">

	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{ asset('assets/frontend/sekolah/sekolah/img/slides/4.jpg')}}" alt="" />
                <div class="flex-caption">
                   {{-- <div class="item_introtext"> --}}
					{{-- <strong>Your Kids Buddy </strong>
					<p>The best educational template</p> </div> --}}
                </div>
              </li>
              <li>
                <img src="{{ asset('assets/frontend/sekolah/sekolah/img/slides/5.jpg')}}" alt="" />
                <div class="flex-caption">
                     {{-- <div class="item_introtext"> --}}
					{{-- <strong>All-round Growth</strong>
					<p>Get all courses with on-line content</p> </div> --}}
                </div>
              </li>
            <li>
                <img src="{{ asset('assets/frontend/sekolah/sekolah/img/slides/6.jpg')}}" alt="" />
                <div class="flex-caption">
                     {{-- <div class="item_introtext"> --}}
					{{-- <strong>All-round Growth</strong>
					<p>Get all courses with on-line content</p> </div> --}}
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->

	</section>
	<section class="hero-text">
	{{-- <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h1 class="aligncenter">
SmartKids...Your Kids Buddy</h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</div>
			</div>
		</div>
	</div> --}}
	</section>
	<section id="content">


	<div class="container">
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix">
		<div class="col-md-4 text-center">
		<span class="icons c1"><img src="http://tkistiqamah.com/wp-content/uploads/bfi_thumb/icon_horse_retina-315mclrz17j8mjveg011xc.png" alt=""></i></span> <div class="box-area">
		<h3>Tempat Bermain</h3> <p>Permainan yang baik yang akan meningkatkan kreatifitas anak dalam hal positif</p></div>
		</div>
		<div class="col-md-4 text-center">
		<span class="icons c2"><img src="http://tkistiqamah.com/wp-content/uploads/bfi_thumb/icon_abc_retina-315mclixcmgv2gdno9nqps.png" alt=""></i></span> <div class="box-area">
		<h3>Pendidikan</h3> <p>Pendidikan dalam ber-akhlah baik harus ditingkatkan untuk menciptakan generasi masa depan yang baik.</p></div>
		</div>
		<div class="col-md-4 text-center">
		<span class="icons c3"><img src="http://tkistiqamah.com/wp-content/uploads/bfi_thumb/icon_snake_retina-315mcm10pslm6nd57qed4w.png" alt=""></i></span> <div class="box-area">
		<h3>Permainan</h3> <p>Permainan yang baik adalah suatu hal yang mampu meningkatkan kreatifitas anak lebih baik lagi.</p></div>
		</div>
		{{-- <div class="col-md-3 text-center">
		<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
		<h3>User Experiance</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
		</div></div>
		</div></div> --}}
		</div>


	</div>
	</section>
	{{-- <div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Mark John -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Jaison Warner -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Tony Antonio -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Leena Doe -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section class="courses">
<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h2 class="aligncenter">Visi</h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span></div>
			</div>
		</div>
<div class="row">
            <div class="col-md-20">
			<div class="textbox clour1">
                <h3><center>“ Mencetak  generasi yang berkualitas dan religius melalui kegiatan bermain sambil belajar ”</center></h3>
				{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p> --}}
			</div> </div>
			<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h2 class="aligncenter">Misi</h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span></div>
			</div>
		</div>
            <div class="col-md-4">
			<div class="textbox clour2">
                  <h3>"Meningkatkan akhlak peserta didik yang sesuai dengan Al-Quran dan Sunnah"</h3>
				{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p> --}}
            </div> </div>
			<div class="col-md-4">
			<div class="textbox clour3">
                  <h3>"Menerapkan nilai-nilai keagamaan dalam pembelajaran"</h3>
				{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p> --}}
			</div> </div>
            <div class="col-md-4">
			<div class="textbox clour4">
                <h3>"Menerapkan pembelajaran aktif,inovatif,kreatif,efektif,dan menyenangkan"</h3>
				{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p> --}}
            </div> </div>
        </div>
			<center>
            <div class="col-md-4">
			<div class="textbox clour5">
                  <h3>"Meningkatkan kualitas pembelajaran dan pengembangan potensi anak secara optimal melalui kegiatan bermain sambil belajar"</h3>
				{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p> --}}
            </div> </div>
			<div class="col-md-4">
			<div class="textbox clour6">
                  <h3>"Menciptakan iklim dan lingkungan sekolah yang kondusif dengan melibatkan kerjasama dengan orang tua dan lingkungan sekitar"</h3>
				{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p> --}}
            </div> </div> </center>
        </div>
</div>
</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>TK ISTIQAMAH</strong><br>
					Jl. Taman Citarum Bandung</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Smart Kids Site All right reserved. Template By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/jquery.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/jquery.fancybox-media.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/Gallery/jquery.quicksand.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/Gallery/setting.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/jquery.flexslider.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/animate.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/custom.js')}}"></script>
<script src="{{ asset('assets/frontend/sekolah/sekolah/js/owl-carousel/owl.carousel.js')}}"></script>
</body>
</html>
