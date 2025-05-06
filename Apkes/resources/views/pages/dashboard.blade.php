
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="pragma" content="no-cache">
		<meta name="robots" content="all">

		<title> "APKES"</title>
		<link rel="shortcut icon" href="{{ asset('lanpagesassets/images/favicon.png')}}" type="image/png">
		<!-- Bootstrap -->
		<link href="{{ asset('lanpages/assets/css/bootstrap.min.css')}}" rel="stylesheet"  />
		<!-- Icons -->
		<link href="{{ asset('lanpages/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
		<!-- Main Css -->
		<link href="{{ asset('lanpages/assets/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
		<link href="{{ asset('lanpages/assets/css/colors/orange.css')}}" rel="stylesheet" id="color-opt">
		<!-- Social JS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
		<link rel="stylesheet" href="{{ asset('lanpages/assets/js/jssocials-1.4.0/jssocials.css')}}">
		<link rel="stylesheet" href="{{ asset('lanpages/assets/js/jssocials-1.4.0/jssocials-theme-flat.css')}}">
    <!-- websheet.js -->
		<script src="https://cdn.jsdelivr.net/gh/pierreavn/websheetjs/dist/websheet.min.js"></script>
		<!-- Google Font -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Abel&family=Righteous&display=swap" rel="stylesheet">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('lanpages/assets/css/custom.css')}}">
	</head>

	<body>
		<!-- Websheet Template -->
		<div data-websheet-template="winner-template">
			<div data-websheet-on:loading>
				<p class="mb-0 text-center text-white">Loading...</p>
			</div>
			<div data-websheet-on:error>
				<p class="mb-0 text-center text-white">An error occured</p>
			</div>
			<div data-websheet-on:loaded>
				<h3 class="text-white text-center mt-2 mb-0" data-websheet-text="name"></h3>
				<p class="text-center mb-0"><a  target="_blank" target="_blank" class="text-white" data-websheet-text="website_link"></a></p>
				<div class="d-flex justify-content-end">
					<div class="badge-pts"><span data-websheet-text="point"></span> pts</div>
				</div>
			</div>
		</div>
	
		
		<!-- Navbar Start -->
		<header id="topnav" class="defaultscroll sticky">
			<div class="container">
				<!-- Logo container-->
				<div>
					<a class="logo" href="#">
						<img src="{{ asset('lanpages/assets/images/re-cloud/re-cloud_white.png')}}" class="l-light" alt="re-cloud" height="30">
						<img src="{{ asset('lanpages/assets/images/re-cloud/re-cloud.png')}}" class="l-dark" alt="re-cloud" height="30">
					</a>
				</div>
				<div class="buy-button logo d-none d-md-block">
					<a href="/login" class="btn btn-light l-light">LOGIN / REGISTER</a>
					<a href="/login" class="btn btn-primary l-dark">LOGIN / REGISTER</a>
				</div>
				<!-- End Logo container-->
				<div class="menu-extras">
					<div class="menu-item">
						<!-- Mobile menu toggle-->
						<a class="navbar-toggle">
							<div class="lines">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
						<!-- End mobile menu toggle-->
					</div>
				</div>

				<div id="navigation">
					<!-- Navigation Menu-->
					<div class="d-md-none m-4 text-center">
                        <a href="#" class="btn btn-primary">LOGIN / REGISTER</a>
						<!-- <a onclick="toLeaderBoard()" class="btn btn-primary">LIHAT LEADERBOARD</a> -->
					</div>
					
					</ul>
				</div><!--end navigation-->
			</div><!--end container-->
		</header><!--end header-->
		<!-- Navbar End -->

		<!-- Jumbotron Start -->
		<section class="pt-4 border-0 bg-registration">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 offset-md-2" style="z-index: 10;">
						<h1 class="text-center heading mb-3 text-white text-shadow mt-100">SELAMAT DATANG DI APLIKASI KESEHATAN MASYARAKAT INDONESIA</h1>
						<h3 class="text-center text-white text-shadow mb-100">Terimakasih telah berpartisipasi dan berkembang bersama AP-KES Indonesia 2025. <br> Anda Sehat Kami Pun Sehat</h3>
						<div class="text-center mb-100">
							<a class="btn btn-primary btn-lg animate__animated animate__pulse animate__infinite" onclick="toLeaderBoard()">LIHAT LEADERBOARD</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pt-4 border-0 bg-registration bg-image-registration-updated">
		</section>
    <!--end section-->

		<div style="position: relative; top: -100px">
			<!-- Brands Header Start -->
			<section class="pb-2">
				<div class="container my-4">
					<div class="row">
						<div class="col-12">
							<p class="text-center text-muted mb-0">Organized by:</p>
						</div>
						<div class="col-12 d-flex align-items-center justify-content-center">
								<a class="d-block p-4" href="#" target="_blank" rel="noopener noreferrer">
									<img class="img-fluid" src="{{ asset('lanpages/assets/images/alibaba-cloud-small.png')}}" alt="alibaba-cloud-small.png">
								</a>
								<a class="d-block p-4" href="https://www.codepolitan.com/" target="_blank" rel="noopener noreferrer">
									<img class="img-fluid" src="{{ asset('lanpages/assets/images/codepolitan_logo-small.png')}}" alt="codepolitan_logo-small.png">
								</a>
						</div>
					</div>
				</div><!--end container-->
			</section><!--end section-->
			<!-- Brands Header End -->
			<!-- Leaderboard List Header End -->
		</div>
		<!-- Megatron Start -->
		<section id="leaderboard" class="pt-4 pb-2 border-0 bg-rewards pyro">
			<div class="before"></div>
			<div class="after"></div>
			<div class="container mt-100">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6 offset-lg-3 mb-3">
						<div class="title-heading mt-4 text-center">
							<h1 class="heading mb-3 text-primary text-shadow">Selamat Bagi Pemenang <br> Re-Cloud Challenges Indonesia</h1>
						</div>
					</div><!--end col-->
				</div><!--end row-->
				<div class="row d-none d-lg-flex">
					<div class="col-md-4">
						<div class="text-center mb-3">
							<img src="{{ asset('lanpages/assets/images/re-cloud/1.png')}}" alt="first winner icon">
						</div>
						<div class="bg-primary p-2 rounded shadow mb-3" data-websheet="data-first-winner">
							<div data-websheet-render="winner-template"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center mb-3">
							<img src="{{ asset('lanpages/assets/images/re-cloud/2.png')}}" alt="second winner icon">
						</div>
						<div class="bg-primary p-2 rounded shadow mb-3" data-websheet="data-second-winner">
							<div data-websheet-render="winner-template"></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center mb-3">
							<img src="{{ asset('lanpages/assets/images/re-cloud/3.png')}}" alt="second winner icon">
						</div>
						<div class="bg-primary p-2 rounded shadow mb-3" data-websheet="data-third-winner">
							<div data-websheet-render="winner-template"></div>
						</div>
					</div>
				</div>
				<div class="row d-lg-none">
					<div class="col-md-12 text-center">
						<div class="text-center">
							<a href="#" target="_blank" rel="noopener noreferrer"><img src="{{ asset('lanpages/assets/images/alibaba-cloud.png')}}" alt="alibaba-cloud.png" height="20px" data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"></a>
							
							<br>
							<img class="img-fluid aos-init aos-animate" src="{{ asset('lanpages/assets/images/re-cloud/juara.png')}}" alt="juara.png" data-aos="fade-up" data-aos-delay="350">
						</div>
					</div>
				</div>
			</div><!--end container-->
		</section><!--end section-->
		<!-- Megatron End -->

		<!-- Leaderboard List Header Start -->
		<section class="pb-2 mt-5">
			<div class="container my-4">
				<div class="row">
					<div class="col-12">
                        <h2 class="section-title text-center">Kriteria Penjurian</h2>
            </div>
        </div>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card border-0 shadow" style="border-radius:20px; height:100%;">
                    <div class="card-header text-center text-white" style="border-radius: 20px 20px 0 0; background-color: #E5640C;">
                        <h5 class="m-0">Fungsionalitas</h5>
                    </div>
                    <div class="card-body text-muted">
                        <ul>
                            <li>Seberapa besar solusi yang dihadirkan untuk kategori industri yang dipilih? Apakah solusi yang dihadirkan pada website dapat digunakan oleh banyak orang?</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card border-0 shadow" style="border-radius:20px; height:100%;">
                    <div class="card-header text-center text-white" style="border-radius: 20px 20px 0 0; background-color: #E5640C;">
                        <h5 class="m-0">Inovasi</h5>
                    </div>
                    <div class="card-body text-muted">
                        <ul>
                            <li>Apakah solusi yang dihadirkan memiliki keunikan atau pendekatan baru dalam menyelesaikan masalah?</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card border-0 shadow" style="border-radius:20px; height:100%;">
                    <div class="card-header text-center text-white" style="border-radius: 20px 20px 0 0; background-color: #E5640C;">
                        <h5 class="m-0">Desain & UX</h5>
                    </div>
                    <div class="card-body text-muted">
                        <ul>
                            <li>Apakah tampilan dan pengalaman pengguna pada website nyaman dan mudah digunakan?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>

						
						

		<!-- Footer Start -->
		<footer class="footer bg-white pb-0 mb-4">
				<div class="container pb-4">
					<div class="row pb-4">
							<div class="col-lg-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
								<h1 class="heading text-primary">Talk to us</h1>
								<p>
									<strong>Email</strong>
									<br>
									<a href="mailto:info@codepolitan.com" class="text-primary">info@apkes.com</a>
								</p>
								<p>
									<strong>Phone</strong>
									<br>
									<a href="tel:+628999488990" class="text-primary">+62 1112 0190 12040</a>
								</p>
								<p class="mb-0">
									<strong>Social Media</strong>
								</p>
								<ul class="list-unstyled social-icon social mb-0">
									<li class="list-inline-item">
										<a href="#" target="_blank" class="rounded">
											<i data-feather="instagram" class="fea icon-sm"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#" target="_blank" class="rounded">
											<i data-feather="twitter" class="fea icon-sm"></i>
										</a>
									</li>
							</ul>
							</div><!--end col-->
							<div class="col-lg-6 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
								<a class="logo-footer" href="https://re-cloud.id">
									<img src="{{ asset('lanpages/assets/images/re-cloud/re-cloud.png')}}" alt="re-cloud" height="30">
								</a>
								<p class="mt-4">
									<strong>Re-Cloud Challenge Indonesia</strong> adalah challenges pertama dari <a href="https://int.alibabacloud.com/m/1000229842/" target="_blank" rel="noopener noreferrer" class="text-primary">AlibabaCloud di Indonesia</a> dengan misi edukasi masyarakat agar terbiasa menggunakan Layanan Awan (Cloud Service) dan juga sertifikasi yang disediakan.
								</p>
							</div><!--end col-->
					</div><!--end row-->
				</div><!--end container-->
		</footer><!--end footer-->
		<!-- Footer End -->

		<!-- Back to top -->
		<a href="#" class="btn btn-icon btn-primary back-to-top mb-4"><i data-feather="arrow-up" class="icons"></i></a>
		<!-- Back to top -->

		<!-- javascript -->
		<script src="{{ asset('lanpages/assets/js/jquery-1.10.2.min.js')}}"></script>
		<script src="{{ asset('lanpages/assets/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Icons -->
		<script src="{{ asset('lanpages/assets/js/feather.min.js')}}"></script>
		<!-- Main Js -->
		<script src="{{ asset('lanpages/assets/js/app.js')}}"></script>
		<!-- Smooth Scroll -->
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
		<!-- AOS -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<!-- Social JS -->
		<script src="{{ asset('lanpages/assets/js/jssocials-1.4.0/jssocials.min.js')}}"></script>
		<!-- Scroll & Counter Up -->
		<script src="{{ asset('lanpages/assets/js/waypoints.min.js')}}"></script>
		<script src="{{ asset('lanpages/assets/js/jquery.counterup.min.js')}}"></script>
		<!-- Custom JS -->
		<script src="{{ asset('lanpages/assets/js/custom.js')}}"></script>
   
	</body>
</html>