<!DOCTYPE html>
<html>
<head>
	<title>Shree Deep Narayan Adarsha Ma Vi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- A grey horizontal navbar that becomes vertical on small screens -->
	<nav class="navbar navbar-expand-sm  navbar-dark" id="cust-nav">

		<div class="container">
			
			<a class="navbar-brand" href="#">
				<img src="img/logo2.png" alt="Logo" style="width:80px;">
				<div class="sc-name-ctr">
					<p class="sc-name">Shree Deep Naryan</p>
					<p class="sc-name">Adarsha Ma Vi</p>
				</div>
			</a>

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <!-- <span class="navbar-toggler-icon"></span> -->
			    <span class="btn-toggler-icon"></span>
			    <span class="btn-toggler-icon"></span>
			    <span class="btn-toggler-icon"></span>
			  </button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
						  <a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">About Us</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Gallery</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Alumnai</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Notice</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">News & Events</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#">Contact</a>
						</li>
						<!-- Dropdown -->
<!-- 						<li class="nav-item dropdown">
						  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						    Dropdown link
						  </a>
						  <div class="dropdown-menu cust-drop">
						    <a class="dropdown-item" href="#">Link 1</a>
						    <a class="dropdown-item" href="#">Link 2</a>
						    <a class="dropdown-item" href="#">Link 3</a>
						  </div>
						</li> -->
					</ul>
				</div>
			
		</div>

	</nav>

    <section class="slider-sec">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide1.jpg" alt="School Pic">
			  <div class="carousel-caption">
			    <h3>Shree Deep Narayan School</h3>
			    <p>Assembly</p>
			  </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide2.png" alt="School Pic">
			  <div class="carousel-caption">
			    <h3>Shree Deep Narayan School</h3>
			    <p>Ground</p>
			  </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <div id="slider-overlay">
      </div>
    </section>
    <!-- about section -->
    <section class="general-sec about-sec">
      <section class="sec-head-ctr sec-blue-bac">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="sec-title">About Us</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="inner-abt-sec">
	      <div class="container">
	        <div class="row">
	          <div class="col-12 col-sm-6">
	          	<div class="text-center">
		            <div class="profile-img-ctr">
		              <img class="abt-img" src="img/head sir.jpg">
		            </div>	          		
	          	</div>
	          	<div class="text-center">
		          	<div class="profile-caption">
			          	<h3 class="profile-name">Mr Shivanath Prashad Tharu</h3>
			          	<p class="post">Principal</p>
		          	</div>
		          	<div class="profile-msg">
			            <p class="text-center">
			              I feel blessed to welcome all those who wish to be a part of our TRANSCEND TO TRANSFORM journey.I feel blessed to welcome all those who wish to be a part of our TRANSCEND TO TRANSFORM journey.
			            </p>	
		          	</div>

	          	</div>
	          </div>
	          <div class="col-12 col-sm-6">
	          	<div class="text-center">
	          		<div class="abt-school-ctr">
				        <h3 class="school-name">Shree Deep Narayan Adarsh Ma Vi</h3>

			            <p class="abt-school">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			            cillum dolore eu fugiat nulla pariatur.
			            <br><br>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        	cillum dolore eu fugiat nulla pariatur.</p>
	          		</div>
	          	</div>
	          </div>
	        </div>
	        <div id="seperator"></div>
	      </div>
      </section>
    </section>
    <section class="general-sec gallery-sec">
    	<section class="sec-head-ctr">
	        <div class="container">
	          <div class="row">
	            <div class="col-12">
	              <h2 class="sec-title">Gallery</h2>
	            </div>
	          </div>
	        </div>
    	</section>
    	<section class="inner-gal-sec">
    		<div class="container">
    			<div class="row">
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    				<div class="col-6 col-sm-4 col-md-3">
    					<div class="gal-img-ctr">
    						<img src="img/slide2.png">
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    </section>
</body>
</html>