<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tracking page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
	<div id="headerAlert" class="alert bg-warning d-none-anm m-0 p-0">
		<div class="container d-none">
			<div class="row">
				<div class="col-3">
					<p class="p-0 m-0">1 of 1</p>
				</div>
				<div class="col-6">
					<p class="p-0 m-0">UPS is open for business: Service impacts related to Coronavirus</p>
				</div>
				<div class="col-3">
					<p id="headerAlertCloseAction" class="text-right cursor-pointer m-0 p-0">&#10006;</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="header">
			<div class="desktop-header">
				<div class="header-top-section clearfix py-3">
					<div class="left-side float-left ">
						<img src="images/logo.svg" alt="site logo">
					</div>
					<div class="right-side float-right mt-3">
						<ul class="list-unstyled d-flex float-right" id="topNavbar">
							<li class="mx-3"><a id="headerAlertAction" href=""><i class="fa fa-exclamation-circle"></i> Alerts (1)</a></li>
							<li class="mx-3"><a href=""><i class="fa fa-map-marker"></i> Locations</a></li>
							<li class="dropdown mx-3"><a onclick="return false;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="dropdown-toggle" href=""><i class="fa fa-globe"></i> United States - English <i class="fa fa-angle-down"></i></a>
								<div class="languge-submenu-box dropdown-menu" aria-labelledby="dropdownLanguageSubmenu">
									<a class="dropdown-item" href="">Estados Unidos - Espanol</a>
									<a class="dropdown-item" href="">United States - English</a>
									<p class="dropdown-item font-weight-bold">Select Another Country or Territory</p>
								</div>
							</li>
							<li class="mx-3"><a href=""><i class="fa fa-user"></i> Sign up / Log in</a></li>
							<li class="mx-3 position-relative"><a id="topbarSearchAction" href=""><i class="fa fa-search"></i> Search or Track</a>
								<div id="topbarSearchFormBox" class="serch-form-box d-none">
									<form action="">
										<input type="text"><button><i class="fa fa-search"></i></button>
										<span class="cursor-pointer" id="topbarSearchFormBoxCloseAction">&#10006;</span>
									</form>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="header-bottom-section clearfix">
					<div class="left-side float-left">
						<nav>
							<ul class="list-unstyled d-flex mb-0">
								<li id="quickStartAction" class="mx-4 quick-start" id=""><a href="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="dropdown-toggle font-weight-bold text-dark onfocus-border-action-true pb-4">Quick Start</a>
									<div id="quickStartBox" class="quick-start-submenu-box dropdown-menu">
										<h3 class="p-3 m-0">Hello. Get Started with UPS</h3>
										<div class="quich-track-submenu-form p-3 bgcstm2 w-100">
											<h3 class="p-0 m-0"><i class="fa fa-search"></i> Track</h3>
											<input class="w85" type="text" placeholder="Tracking Numbers">
											<button class="w10"><i class="fa fa-angle-right"></i></button>
										</div>
										<ul class="list-unstyled mt-0">
											<li class="py-2 px-3 border-bottom"><a href=""><i class="fa fa-cube"></i> Ship</a></li>
											<li class="py-2 px-3 border-bottom"><a href=""><i class="fa fa-truck"></i> Find a Services</a></li>
											<li class="py-2 px-3 border-bottom"><a href=""><i class="fa fa-calculator"></i> Find a Services</a></li>
											<li class="py-2 px-3 border-bottom"><a href=""><i class="fa fa-map-marker"></i> Locations</a></li>
											<li class="py-2 px-3 border-bottom"><a href=""><i class="fa fa-file-alt"></i> View & Pay Bill</a></li>
										</ul>
									</div>
								</li>
								<li class="mx-4"><a href="" class="font-weight-bold text-dark pb-4">Tracking</a></li>
								<li class="mx-4"><a href="" class="font-weight-bold text-dark pb-4">Shipping</a></li>
								<li class="mx-4"><a href="" class="font-weight-bold text-dark pb-4">Services</a></li>
							</ul>
						</nav>
					</div>
					<div class="right-side float-right">
						<button class="btn btn-primary rounded-circle-cstm">Customer Support</button>
					</div>
				</div>
			</div>
			<div id="mobile-header">
				<div class="top-header">
					<div class="clearfix py-3">
						<div class="float-left">
							<img src="images/logo.svg" alt="" class="mobile-logo">
						</div>
						<div class="float-right">
							<div class="responsive-menu-button">
								<ul class="list-unstyled d-flex m-0 line-height-40p">
									<li class="mx-3"><span class="fa fa-user"></span></li>
									<li class="mx-3"><span id="mobileViewSeachBarAction" class="fa fa-search"></span>
									</li>
									<li class="ml-3"><span class="fa fa-bars"></span></li>
								</ul>
								<div class="mobile-header-search-form">
									<input type="text"><button><span class="fa fa-search"></span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<hr class="m-0">
	<div class="main">
		<div class="container">
			<div class="breadcrumb-cstm">
				<h1 class="py-3 mb-0">Tracking</h1>
			</div>
		</div>
		<div class="bgcstm">
			<div class="container">
				<div class="mainbody">
					<div class="row">
						<div class="col-12 col-md-8">
							<div class="card p-5 mt-5">
								<h3 class="p-0 m-0"><img src="images/icon.png" class="img-fluid w-20p" alt=""> Track</h3>
								<p class="font-italic p-0 m-0">Enter up to 50 tracking numbers, one per line.</p>
								<div class="mt-2">
									<form action="packageDetails.php" method="POST">
										<input id="trackingCode" name="trackingCode" type="text" class="form-control">

										<br>
										<input id="trackingCodeSubmit" type="submit" value="Track" class="btn btn-primary">
									</form>
									<br>
									<div id="trackingDeatils"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="card p-3 mt-5">
								<ul class="list-unstyled mb-0">
									<li class="my-2"><a class="text-underline" href="">Track by Reference Number</a></li>
									<li class="my-2"><a class="text-underline" href="">Import Tracking Numbers</a></li>
									<li class="my-2"><a class="text-underline" href="">Other Tracking Services</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>