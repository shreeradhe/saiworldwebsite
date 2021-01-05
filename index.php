<?php
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sai World City</title>

	<link rel="icon" type="image/ico" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/vendors/bootstrap-4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/slick-1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/vendors/slick-1.8.1/slick/slick-theme.css"/>
	<link rel="stylesheet" href="assets/styles/main.css">
	<link rel="stylesheet" href="assets/styles/responsive.css">
	<link rel="stylesheet" href="assets/styles/custom-scrollbar.css">

</head>
<body>
	<div id="wrapper">
		<div id="mobile-header" class="mobile-header">
			<div class="mobile-header-logo-block">
                <img src="assets/images/logo.png" class="header-logo">
            </div>

			<div id="mobile-header-icon" class="mobile-header-icon">
		        <span class="mobile-header-icon-bar"></span>
		    </div>

		    <div id="mobile-menu" class="mobile-menu">
		        <nav class="smooth-scroll">
		            <ul class="mobile-menu-list"> 
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#home">Home</a>
		                </li>
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#overview">Overview</a>
		                </li>
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#amenities">Amenities</a>
		                </li>
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#location">Location Map</a>
		                </li>
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#floor">Floor Plans</a>
		                </li>
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#contact-us">Contact Us</a>
		                </li>
		                <li class="mobile-menu-list-item">
		                    <a class="menu-item-link" href="#" data-toggle="modal" data-target="#enquiryModal">Download Brochure</a>
		                </li>
		            </ul>
		        </nav>
		    </div>
		</div>

		<div id="header" class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 logo">
						<a href="#"><img src="assets/images/logo.png" alt=""></a>
					</div>
					<div class="col-md-8">
						<nav class="header-navbar">
							<ul id="navbar-list" class="header-navbar-list">
								<a href="#home" class="link">
									<li class="header-navbar-list-item current">Home</li>
								</a>
								<a href="#overview" class="link">
									<li class="header-navbar-list-item">Overview</li>
								</a>
								<a href="#amenities" class="link">
									<li class="header-navbar-list-item">Amenities</li>
								</a>
								<a href="#location" class="link">
									<li class="header-navbar-list-item">Location Map</li>
								</a>
								<a href="#floor" class="link">
									<li class="header-navbar-list-item">Floor Plans</li>
								</a>
								<a href="#" class="link">
									<li class="header-navbar-list-item" data-toggle="modal" data-target="#enquiryModal">Brochure</li>
								</a>
								<a href="#contact-us" class="link">
									<li class="header-navbar-list-item">Contact Us</li>
								</a>
							</ul>
						</nav>	
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>	

		<section id="home">
			<div id="homeCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				    <div class="carousel-item active">
					    <img class="d-block w-100" src="assets/images/home/web-slide-1.jpg" alt="First slide">
					</div>
				    <div class="carousel-item">
				    	<img class="d-block w-100" src="assets/images/home/web-slide-2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				    	<img class="d-block w-100" src="assets/images/home/web-slide-3.jpg" alt="Third slide">
				    </div>
				    <div class="carousel-item">
				    	<img class="d-block w-100" src="assets/images/home/web-slide-4.jpg" alt="Fourth slide">
				    </div>
				</div>
  				<a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
		</section>

		<section id="overview">
			<div class="row">
				<div class="col-md-3">
					<div class="details">
						<h3>Project Hallmarks</h3>
						<ul>
							<li>
								A MAGNIFICENT TOWNSHIP WITH WORLD-CLASS LIFESTYLE
							</li>
							<li>
								PHASE 1 - FEATURING 4 HIGH-RISE TOWERS (TOWER1 – MARINA, TOWER 2 – OPERA, TOWER3- ACROPOLIS, TOWER 4 - MANHATTAN
							</li>
							<li>
								A SUPERLATIVE COMMUNITY LIFESTYLE INSPIRED BY FAMOUS WORLD CITIES
							</li>
							<li>
								2 ,3 & 4 BHK COSMO-LUXURY HOMES WITH ADVANCED LUXURY FEATURES
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div id="overviewCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						    <div class="carousel-item active">
							    <img class="d-block w-100" src="assets/images/overview/1.jpg" alt="First slide">
							</div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/overview/2.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/overview/3.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/overview/4.jpg" alt="Second slide">
						    </div>
						</div>
		  				<a class="carousel-control-prev" href="#overviewCarousel" role="button" data-slide="prev">
		    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    				<span class="sr-only">Previous</span>
		  				</a>
		  				<a class="carousel-control-next" href="#overviewCarousel" role="button" data-slide="next">
		    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    				<span class="sr-only">Next</span>
		  				</a>
					</div>
				</div>
			</div>
		</section>

		<section id="amenities">
			<div class="row">
				<div class="col-md-3">
					<div class="details">
						<h3>EXTRAVAGANT CLUBHOUSE. EXTRAORDINARY INDULGENCES.</h3>
						<ul class="overflow-y ">
							<li class="list-sub-heading">
								CLUB VEGAS HALLMARKS
							</li>
							<li>
								MAGNIFICENT G+5 STORIED, THEMED FAMILY CLUBHOUSE
							</li>
							<li>
								PEACEFUL SAI BABA MANDIR
							</li>
							<li>
								DESIGNER LANDSCAPED RECREATIONS
							</li>
							<li>
								WORLD-CLASS LEISURE AVENUES
							</li>
							<li>
								LIFE-SIZED LANDMARK STATUES ACROSS LANDSCAPED GARDEN
							</li>
							<li>
								UNIQUE ARCHITECTURE WITH SKY POOL INSPIRED BY MARINA BAY (SINGAPORE)
							</li>
							<li>
								HOST OF INDOOR & OUTDOOR LIFESTYLE AMENITIES
							</li>

							<li>
								LANDSCAPED AMENITIES
							</li>
							<li>
								STATUE OF LIBERTY
							</li>
							<li>
								GREEN WALKWAYS
							</li>
							<li>
								PALMS AVENUE
							</li>
							<li>
								MUSICAL FOUNTAIN
							</li>
							<li>
								EIFFEL TOWER
							</li>
							<li>
								SWING IN FLOWER BED
							</li>
							<li>
								TEMPLE PLAZA & GARDEN
							</li>
							<li>
								PARTY LAWN
							</li>
							<li>
								TREE PLANTATIONS
							</li>
							<li>
								SENIOR CITIZENS GARDEN
							</li>
							<li>
								KIDS PLAY AREA
							</li>
							<li>
								ROCK CLIMBING
							</li>
							<li>
								BIG BEN CLOCK TOWER
							</li>

							<li>
								GROUND FLOOR LEVEL
							</li>
							<li>
								DOUBLE HEIGHT AIR-CON DESIGNER ENTRANCE LOBBY
							</li>
							<li>
								WAITING LOUNGE
							</li>
							<li>
								PRE FUNCTION AREA FOR PARTIES
							</li>
							<li>
								DJ & KARAOKE ROOM
							</li>
							<li>
								MINI THEATRE
							</li>

							<li>
								FIRST FLOOR LEVEL
							</li>
							<li>
								HOBBY STUDIO WITH PAINTING, POTTERY, ETC
							</li>
							<li>
								CHILDREN’S GAMING ARENA
							</li>
							<li>
								VIRTUAL GAMING LOUNGE
							</li>
							<li>
								CHILDREN'S CRECHE
							</li>
							<li>
								3 TUITION ROOMS
							</li>
							<li>
								DECK LOUNGE
							</li>

							<li>
								SECOND FLOOR LEVEL
							</li>
							<li>
								MUSIC AND DANCE STUDIO
							</li>
							<li>
								2 INDOOR BADMINTON COURTS
							</li>
							<li>
								2 SQUASH COURTS
							</li>

							<li>
								THIRD FLOOR LEVEL - SPA
							</li>
							<li>				
								RECEPTION AND WAITING LOUNGE
							</li>
							<li>
								CONSULTATION ROOM
							</li>
							<li>
								MASSAGE ROOMS
							</li>
							<li>
								HOT JACUZZI
							</li>
							<li>
								STEAM & SAUNA BATH
							</li>
							<li>
								FOOT MASSAGE
							</li>
							<li>
								DESIGNER SALON FOR WOMEN
							</li>

							<li>
								FOURTH FLOOR LEVEL
							</li>
							<li>
								FULLY EQUIPPED AIR-CON GYMNASIUM WITH TRAINERS
							</li>
							<li>
								INDOOR GAME ARCADE
							</li>

							<li>
								FIFTH FLOOR LEVEL
							</li>
							<li>
								LIBRARY
							</li>
							<li>
								DESIGNER SALON FOR MEN
							</li>
							<li>
								MEDITATION ROOM
							</li>
							<li>
								AEROBICS & ZUMBA ROOM
							</li>
							<li>
								CARD ROOM
							</li>
							<li>
								FOOD COURT & CAFÉ
							</li>

							<li>
								TERRACE FLOOR LEVEL
							</li>
							<li>
								SWIMMING POOL WITH PARTY DECK
							</li>
							<li>
								KIDS POOL
							</li>
							<li>
								MERLION STATUE WITH SUNKEN BAR
							</li>
						</ul>
					</div>
				</div>
			
				<div class="col-md-9">
					<div id="amenitiesCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						    <div class="carousel-item active">
							    <img class="d-block w-100" src="assets/images/amenities/amenities-1.jpg" alt="First slide">
							</div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/amenities/amenities-2.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/amenities/amenities-3.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/amenities/amenities-4.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/amenities/amenities-5.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/amenities/amenities-6.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/amenities/amenities-7.jpg" alt="Second slide">
						    </div>
						</div>
		  				<a class="carousel-control-prev" href="#amenitiesCarousel" role="button" data-slide="prev">
		    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    				<span class="sr-only">Previous</span>
		  				</a>
		  				<a class="carousel-control-next" href="#amenitiesCarousel" role="button" data-slide="next">
		    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    				<span class="sr-only">Next</span>
		  				</a>
					</div>
				</div>
			</div>
		</section>

		<section id="location">
			<div class="row">
				<div class="col-md-6 mobile-details">
					<div class="details">
						<h3>LOCATION MAP</h3>
						<p>5 MINS. FROM NAVI MUMBAI INTERNATIONAL AIRPORT</p>
						<h4>LOCATION ADVANTAGES</h4>
						<ul>
							<li>
								Sewri Nhava-Sheva Sea Link - 20 Mins.
							</li>
							<li>
								Mumbai - Pune Expressway - 2 Mins.
							</li>
							<li>
								Upcoming Navi Mumbai SEZ - 15 Mins.
							</li>
							<li>
								Jawaharlal Nehru Port Trust (JNPT) - 20 Mins.
							</li>
							<li>
								Panvel Railway Station - 7 Mins.
							</li>
							<li>
								Close proximity to Schools, Malls, Hotels & Banks - 5 Mins
							</li>
						</ul>
						<a href="https://www.google.com/maps/place/Paradise+Sai+World+City/@18.9687993,73.1306122,16z/data=!4m5!3m4!1s0x0:0xac5aabc977e71c6d!8m2!3d18.9685462!4d73.1301843" target="_blank" class="map-btn">Google Map</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="assets/images/loc.png" class="location-map">
				</div>
				<div class="col-md-6 web-details">
					<div class="details">
						<h3>LOCATION MAP</h3>
						<p>5 MINS. FROM NAVI MUMBAI INTERNATIONAL AIRPORT</p>
						<h4>LOCATION ADVANTAGES</h4>
						<ul>
							<li>
								Sewri Nhava-Sheva Sea Link - 20 Mins.
							</li>
							<li>
								Mumbai - Pune Expressway - 2 Mins.
							</li>
							<li>
								Upcoming Navi Mumbai SEZ - 15 Mins.
							</li>
							<li>
								Jawaharlal Nehru Port Trust (JNPT) - 20 Mins.
							</li>
							<li>
								Panvel Railway Station - 7 Mins.
							</li>
							<li>
								Close proximity to Schools, Malls, Hotels & Banks - 5 Mins
							</li>
						</ul>
						<a href="https://www.google.com/maps/place/Paradise+Sai+World+City/@18.9687993,73.1306122,16z/data=!4m5!3m4!1s0x0:0xac5aabc977e71c6d!8m2!3d18.9685462!4d73.1301843" target="_blank" class="map-btn">Google Map</a>
					</div>
				</div>
			</div>
		</section>
		
		<section id="floor">
			<div class="details-wrapper">
				<div class="details">
					<h3>Floor Plans</h3>
					<div class="floor-plan-carousel">
						<div class="box">
							<a href="assets/images/floor-plans/2bhk_Unit_plan_popup.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/2bhk_Unit_plan_th.jpg">
								</div>
								<h4 class="overlay-heading">2 BHK UNIT Plans Phase 2</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>
						<div class="box">
							<a href="assets/images/floor-plans/2.5bhk_Unit_plan_popup.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/2.5bhk_Unit_plan_th.jpg">
								</div>
								<h4 class="overlay-heading">2.5 BHK - UNIT PLANS Phase 2</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>
						<div class="box">
							<a href="assets/images/floor-plans/3bhk_Unit_plan_popup.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/3bhk_Unit_plan_th.jpg">
								</div>
								<h4 class="overlay-heading">3 BHK - UNIT PLANS Phase 2</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>		
						<div class="box">
							<a href="assets/images/floor-plans/pop-plans-3.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/plans-3.jpg">
								</div>
								<h4 class="overlay-heading">2 BHK UNIT PLAN (2D) - TYPE 1</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>
						<div class="box">
							<a href="assets/images/floor-plans/pop-plans-4.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/plans-4.jpg">
								</div>
								<h4 class="overlay-heading">3 BHK UNIT PLAN (2D) - TYPE 1</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>
						<div class="box">
							<a href="assets/images/floor-plans/pop-plans-5.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/plans-5.jpg">
								</div>
								<h4 class="overlay-heading">4 BHK UNIT PLAN (2D)</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>
						<div class="box">			
							<a href="assets/images/floor-plans/pop-plans-2.jpg" target="_blank">				
								<div class="image-scale">
									<img src="assets/images/floor-plans/plans-2.jpg">
								</div>
								<h4 class="overlay-heading">Typical Floor Plan - (Marina & Acropolis)</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>
						<div class="box">
							<a href="assets/images/floor-plans/pop-plans-1.jpg" target="_blank">
								<div class="image-scale">
									<img src="assets/images/floor-plans/plans-1.jpg">
								</div>
								<h4 class="overlay-heading">TYPICAL FLOOR PLAN - (Manhattan)</h4>
								<div class="overlay-details">
									<div class="align-middle">
										<i class="fa fa-search-plus d-block zoom-icon"></i>
									</div>
								</div>
							</a>
						</div>	
					</div>
				</div>
			</div>
		</section>

		<section id="contact-us">
			<div class="row">
				<div class="col-md-12">
					<h3>Contact Us</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 left-part">
					<div class="text-left">
						<h4>About Paradise Group</h4>
						<p>
							With 2 decades of experience, Paradise Group had a very long yet fruitful journey. With their clear aim of providing a lavish and appealing space for all to dwell. They have constructed more than 100 successful projects across Navi Mumbai covering 2.5 million sq. ft till date. This rendezvous of more than 30 years have not only made them a team of highly experienced construction experts but also a perfect specimen of 'beauty with quality'.
						</p>
					</div>
				</div>

				<div class="col-md-4 center-part">
					<div class="text-left">
						<h4>Schedule A Visit</h4>
						<p>
							Grab your chance to visit the site for Free! And explore more with the property experts. Come and get amused by the luxury and nature amenities in one place. Call now and Book your comfort corner.
						</p>
						<a href="#" class="btn btn-info" role="button" data-toggle="modal" data-target="#enquiryModal">Schedule A Visit</a>
					</div>
				</div>
				
				<div class="col-md-4 right-part">
					<div class="text-left">
						<h4>Site Address</h4>
						<p class="border-btm">
							Sai World City, National Highway 4B, Palaspe Phata,Panvel, Navi Mumbai, Maharashtra,410221
						</p>
						<h4>MahaRERA Registration No.</h4>
						<p>P52000006318</p>
					</div>
				</div>
			</div>
			<!-- Button trigger modal -->
			<button type="button" id="modalBtn" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal" hidden="true">
			  Launch demo modal
			</button>
		</section>


		<footer>
			<div id="mobile-footer">
				<div class="container">
					<div class="row">
						<div class="col">
							<a href="https://api.whatsapp.com/send?phone=919004527554" class="btn-wp">
								<img src="assets/images/social-icons/wp-mobile.png">
								<span>Whatsapp</span>
							</a>
						</div>
						<div class="col">
							<a href="" class="btn-enquiry" data-toggle="modal" data-target="#enquiryModal">
								<img src="assets/images/social-icons/enq.png">
								<span>Enquir now</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="footer" class="container">
				<div class="row">
					<div class="col-md-2">
						<a href="https://api.whatsapp.com/send?phone=919004527554" class="btn-wp"><img src="assets/images/social-icons/wp-desktop.png"></a>
					</div>
					<div class="col-md-10">
						<form id="contact-form" action="email.php" method="POST" class="form-inline footer-form">
				          	<div class="form-group name">
				            	<input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
				          	</div>
				          	<div class="form-group phone">
				            	<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*" required minlength="10" maxlength="10">
				          	</div>
				          	<div class="form-group email">
				            	<input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
				          	</div>
				          	<input type="submit" class="btn-footer-send" name="contact-info" value="Send">
				        </form>
					</div>
				</div>
			</div>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<img src="assets/images/worldcity_popup.jpg">
					<a href="" type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</a>
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">PLEASE FILL THE ENQUIRY FORM IF YOU HAVE ANY QUESTION. WE WILL GET BACK TO YOU AT THE EARLIEST.</h5>
					</div>
					<div class="modal-body">
			        	<form id="contact-form" action="email.php" method="POST">
				          	<div class="form-group name">
				            	<input type="text" class="form-control" name="name" id="modal-name" placeholder="Name*" required>
				          	</div>
				          	<div class="form-group phone">
				            	<input type="text" class="form-control" name="phone" id="modal-phone" placeholder="Phone*" required minlength="10" maxlength="10">
				          	</div>
				          	<div class="form-group email">
				            	<input type="email" class="form-control" name="email" id="modal-email" placeholder="Email*" required>
				          	</div>
				          	<input type="submit" class="btn-modal-send" name="contact-info" value="Send">
				        </form>
					</div>
				</div>
			</div>
		</div>
	</div>	

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/vendors/bootstrap-4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.statically.io/gh/kswedberg/jquery-smooth-scroll/3948290d/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="assets/vendors/slick-1.8.1/slick/slick.min.js"></script>

<script src="assets/scripts/main.js"></script>

</body>

</html>