<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | Selective Coffee Roaster</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="shortcut icon" href="/template/edulab/images/logoatas.png">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/all.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="/css/jquery.mmenu.all.css" /> 
	<link rel="stylesheet" type="text/css" href="/css/meanmenu.min.css"> 
	<link rel="stylesheet" type="text/css" href="/template/edulab/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="/template/edulab/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	
	
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		{{-- <header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i> info@educationpro.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<a href="">Login /</a>
							<a href="">Register</a>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<hr>
						<img src="/template/edulab/images/logo-selective.png" alt="Logo Image" height="200px" width="150px">
						<hr>
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						{{-- <br> --}}
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="/home">Home</a></li>
								<li class="menu-parent">Product
									<ul class="sub-menu">
										<li><a href="/makanan">Makanan</a></li>
										<li><a href="/minuman">Minuman</a></li>
                                        <li><a href="/bijih_kopi">Bijih Kopi</a></li>
										{{-- <li class="menu-parent">Child
											<ul class="sub-menu">
												<li><a href="">Grand-child</a></li>
												<li><a href="">Grand-child</a></li>
											</ul>
										</li> --}}
									</ul>
								</li>
								{{-- <li class="menu-parent">News
									<ul class="sub-menu">
										<li><a href="#">Child</a></li>
										<li><a href="#">Child</a></li>
									</ul>
								</li> --}}
								<li><a href="/career">Career</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/testimoni">Testimoni</a></li>
								<li><a href="/dash_pelamar"><b>LOGIN</b></a></li>
							</ul>
						</nav>
						{{-- <div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div> --}}
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		@yield('content')
		<!-- End of Query Section -->
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugit ipsa doloribus voluptas quia corporis ad necessitatibus doloremque consectetur praesentium voluptatem perspiciatis eius amet cum cupiditate, adipisci repellat vel id.</p>

						<h4><a href="tel:+6281219713449"><i class="fas fa-phone"></i> 6281219713449</a></h4>
						<h4><a href="mailto:Selectiv.coffee@gmail.com"><i class="fas fa-envelope"></i> Selectiv.coffee@gmail.com</a></h4>
						<h4></h4>
					</div>

					<div class="box-wrap">
						<header>
							<h1>links</h1>
						</header>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Makanan</a></li>
							<li><a href="#">Minuman</a></li>
							<li><a href="#">Bijih Kopi</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Testimoni</a></li>
							<li><a href="#">About</a></li>
						</ul>
					</div>

					{{-- <div class="box-wrap">
						<header>
							<h1>recent courses</h1>
						</header>
						<div class="recent-course-wrap">
							<img src="edulab/images/ui-ux.jpg" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>$50</span> $40</p>
							</div></a>
						</div>
						<div class="recent-course-wrap">
							<img src="edulab/images/ui-ux.jpg" alt="Ui/Ux Designing">
							<a href=""><div class="course-name">
								<h3>UI/UX Designer courses</h3>
								<p><span>$50</span> $40</p>
							</div></a>
						</div>
					</div> --}}

					<div class="box-wrap">
						<header>
							<h1>locations</h1>
						</header>
						<h4><i class="fas fa-map-marker-alt"></i>
							<div>
								<a href="https://www.google.com/maps/place/selective+coffee/@-6.1535722,106.9094351,15z/data=!4m2!3m1!1s0x0:0x593608a94bb76613?sa=X&ved=2ahUKEwius5bjn7b3AhWb8XMBHfcfC7cQ_BJ6BAhTEAU"><strong>Kelapa Gading, Jakarta</strong> </a> 
								<p>Terra Haus, Blok PA, Ruko Kelapa Gading, Jl. Boulevard Raya No.1, RT.2/RW.14, Pegangsaan Dua, Kelapa Gading, North Jakarta City, Jakarta 14240</p>
								<br>
								<a href="https://www.google.com/maps/place/Selective+Coffee+Roasters/@-6.2471703,106.8173998,15z/data=!4m2!3m1!1s0x0:0xd5a5d03ac3096168?sa=X&ved=2ahUKEwjt162ln7b3AhXO63MBHfbpAPQQ_BJ6BAheEAU"><strong>Bangka, Jakarta</strong> </a>
								<p>Jl. Bangka IIIA No.18, RT.17/RW.3, Pela Mampang, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12720</p>
							</div>
						
						</h4>
						<h4><i ></i>
							
						
						</h4>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Selective Coffee Roaster <span> </p>
				</div>
			</div>
		</footer>

		<!-- <nav id="menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li>
					<span>COURSES</span>
					<ul>
						<li><a href="#/courses/child">Child</a></li>
						<li><a href="#/courses/child">Child</a></li>
						<li>
							<span>Child</span>
							<ul>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">gallery</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li>
					<a href="#">news</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav> -->

	</div>
	<script type="text/javascript" src="/template/edulab/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/template/edulab/js/lightbox.js"></script>
	<script type="text/javascript" src="/template/edulab/js/all.js"></script>
	<script type="text/javascript" src="/template/edulab/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="/template/edulab/js/owl.carousel.js"></script>
	<script type="text/javascript" src="/template/edulab/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="/template/edulab/js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="/template/edulab/js/custom.js"></script>
</body>
</html>