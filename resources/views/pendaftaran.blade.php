<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Taman Kanak Kanak</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />

<link href="{{ asset('assets/frontend/sekolah/sekolah/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/jcarousel.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/frontend/sekolah/sekolah/css/flexslider.css')}}" rel="stylesheet" />
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
                    {{-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a> --}}
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
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Pendaftaran</h2>
			</div>
		</div>
	</div>
	</section>

	<section id="content">
		<div class="container">

<section class="course">

		<div class="row">
			<div class="col-lg-12">
				<div class=""><h3>Pendaftaran tk al-istiqamah</h3><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></div>
			</div>
		</div>
<body>
<form action="{{ route('pendaftaran.store') }}" method="post">
    <center>
    <table>
        <tr><td> NO PENDAFTARAN </td>
        <td><input type="text" name="no_pendaftaran" placeholder="NO PENDAFTARAN"></td></tr>

        <tr><td> NAMA</td>
        <td><input type="text" name="nama" placeholder="NAMA" /></td></tr>
        <tr><td> ALAMAT</td>
        <td><input type="text" name="alamat" placeholder="ALAMAT" /></td></tr>
        <tr><td> TEMPAT LAHIR</td>
        <td><input type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" /></td></tr>
        <tr><td> TANGGAL LAHIR</td>
        <td><input type="date" name="tgl_lahir"  placeholder="TANGGAL LAHIR" /></td></tr>

        <tr><td> JENIS KELAMIN</td>
        <td><input type="radio" name="jns_kelamin" value="L"> LAKI-LAKI <br>
         <input type="radio" name="jns_kelamin" value="P"> PEREMPUAN </td></tr>
        <tr><td> NAMA AYAH</td>
        <td><input type="text" name="nama_ayah"  placeholder="NAMA AYAH" /></td></tr>
        <tr><td> PEKERJAAN AYAH</td>
        <td><input type="text" name="pekerjaan_ayah"  placeholder="PEKERJAAN AYAH" /></td></tr>
        <tr><td> NAMA IBU</td>
        <td><input type="text" name="nama_ibu" placeholder="NAMA IBU" /></td></tr>
        <tr><td> PEKERJAAAN IBU</td>
        <td><input type="text" name="pekerjaan_ibu" placeholder="PEKERJAAN IBU" /></td></tr>
        
        <tr><td> FOTO </td>
        <td><input type="file" name="image" />
        <tr> <td></td>

        <td><input type="submit" value="simpan"></input><input type="reset" value="kembali"></input></td></tr>
        </form>
    </table>
    </center>

</body>
    </div>
    </section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>TK ISTIQOMAH</strong><br>
					Jl. Taman Citarum, Rancamanyar Bandung</address>
					<p>
						<i class="icon-phone"></i> 0895344583308 <br>
						<i class="icon-envelope-alt"></i> candrikadwi152@gmail.com
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
</body>
</html>
