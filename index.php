<!doctype html>
<html>
<?php get_header(); ?>
<body>
<!-- Slides -->
<section class="slider">
<div class="slide-wrapper">
    <div id="homepage-feature" class="carousel slide"  style="background-image:url(<?php echo get_bloginfo( 'template_directory' );?>/img/banner1.png)">
		<!--logo and phone number-->
		<nav class="navbar navbar-fixed-top navbar-light">
		  <div class="container">
			 <a href="<?php echo get_bloginfo( 'template_directory' );?>/index.php">
				 <img class="navbar-brand" src="<?php echo get_bloginfo( 'template_directory' );?>/img/logo.png" alt="">
			 </a> 
			  <ul class="nav navbar-nav ml-auto">
				<li class="nav-item">
				  <a class="nav-link phone" href="#">+971 56 989 1667</a>
				</li>
			  </ul>
		  </div>
		</nav>
        <div class="container carousel-inner">
            <div class="item active carousel-item">
                <div class="carousel-caption">
                     <h1>REACH FOR THE SKIES</h1>
                     <p class="short_text">Bringing you exclusive serviced office spaces in the 
						hotspot of Dubai, to take your business to the next level
					</p>
					<div class="pay_key d-flex flex-row">
					<!-- key -->
						<div class="row">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/key.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>Move in and start </span>
								<span>working immediately </span>
							</p>
						  </div>
						</div>					
					<!-- payment -->				
						<div class="row">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/pay.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>No large </span>
								<span>upfront payments.</span>
							</p>
						  </div>
						</div>
					  </div>  
				</div>
            </div>
            <div class="item carousel-item">
                <div class="carousel-caption">
                     <h1>FOR THE SKIES REACH</h1>
                    <p>Bringing you exclusive serviced office spaces in the 
						hotspot of Dubai, to take your business to the next level
					</p>
					<div class="pay_key d-flex flex-row">
					<!-- key -->
					<div class="row">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/key.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>Move in and start </span>
								<span>working immediately </span>
							</p>
						  </div>
						</div>
					<!-- payment -->
						<div class="row">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/pay.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>No large </span>
								<span>upfront payments.</span>
							</p>
						  </div>    
				</div><!--pay ends-->
                </div>
				</div>
            </div>
            <div class="item carousel-item">
                <div class="carousel-caption">
                     <h1>SKIES REACH FOR THERE </h1>
                    <p>Bringing you exclusive serviced office spaces in the 
						hotspot of Dubai, to take your business to the next level
					</p>
                    <div class="pay_key d-flex flex-row">
					<!-- key -->
						<div class="row">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/key.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>Move in and start </span>
								<span>working immediately </span>
							</p>
						  </div>
						</div>
					<!-- payment -->
						<div class="row">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/pay.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>No large </span>
								<span>upfront payments.</span>
							</p>
						  </div>                    
				</div>
                </div>
            </div>
			</div>
        </div>
    </div>
    <div class="red">
        <div class="red-content">
			<form class="registerForm form-horizontal" action="<?php echo get_bloginfo( 'template_directory' );?>/thankyou.php" method="get">
			<fieldset>
			<legend class="leg text-center">Enquire <span class="ora">Now</span></legend>
			<p class="form-content-abv w-75 m-auto pb-2 text-center">
				<span>Your New Office in Dubai </span>
				<span>is just a Click away</span>
			</p>
			<div class="form-group">
			  <div class="col-lg-12">
			  <input id="textinput" name="username" type="text" placeholder="Your Name" class="form-control input-md">   
			  </div>
			</div>
			<div class="form-group"> 
			  <div class="col-lg-12">
			  <input id="textinput" name="email" type="text" placeholder="Email Address" class="form-control input-md">
			  </div>
			</div>
			<div class="form-group">
			  <div class="col-lg-12">
			  <input id="textinput" name="phone" type="text" placeholder="Phone Number" class="form-control input-md">   
			  </div>
			</div>
			<div class="form-group"> 
			  <div class="col-lg-12">
			  <input id="textinput" name="officetype" type="text" placeholder="Office Type" class="form-control input-md">  
			  </div>
			</div>
			<div class="form-group mb-0">
			  <div class="w-100 text-center btndiv">
				<button id="singlebutton" name="submit" class="btn">SUBMIT</button>
			  </div>
			</div>
			</fieldset>
			</form>
        </div>        
    </div>
</div>
</section>
<!--Banner Bottom-->
<section class="container banner_bottom pt-5 pb-4">
<h6>Dubai - the perfect launch pad to take your business to a global level. </h6>
 <div class="hot_infra_trade d-flex flex-row">
					<!-- hotspot -->
						<div class="row mr-3">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/hotspot.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">		
								<span>Business hotspot of </span>
								<span>global proportions.</span>
							</p>
						  </div>
						</div>
					<!-- infrastructure -->
						<div class="row  mr-3">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/infra.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>Impressive infrastructure</span>
								<span>with future ready technology</span>
							</p>
						  </div>                    
						</div>
					<!-- trade -->
						<div class="row mr-3">
						  <div class="col-lg-3 text-lg-left text-center">
							<img src="<?php echo get_bloginfo( 'template_directory' );?>/img/trade.png">
						  </div>
						  <div class="col-lg-9 text-lg-left text-center">
							<p class="lead w-100 d-flex flex-column">
								<span>Trade versatility</span>
							</p>
						  </div>                    
						</div>
    </div>
</section>
<!--Business Centers -->
<section class="business_centers">
  <div class="container">
	<div class="text-center py-4">
	<h2>Satguru Business Centre for your Business</h2>
    <h6 class="w-75 m-auto">Satguru Business Center (SBC) is an exquisite solution provider for prestigious furnished offices, conference and meeting rooms
		along with the ultimate business packages, business setup services and concierge services.
	</h6>
	</div>
    <div class="card">
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="card-img-bottom">
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
		  <div class="card-block">
            <h4 class="card-title">Exclusive Offices</h4>			
			<div class="card-body">
			<p class="initial_card_text font-weight-bold">We provide an array of enhanced facilities for 
your business experience :</p>
			<div class="w-100 d-flex xs-flex-column align-items-center">
				<div class="col-lg-6 col-xs-12">           
				   <p class="card-text"><span></span>Cutting edge technology</p>
					<p class="card-text"><span></span>Stylish visitors reception</p>
					<p class="card-text"><span></span>IT support in-house</p>
					<p class="card-text"><span></span>High-speed Wi-Fi</p>
					<p class="card-text"><span></span>Parking facility</p>
				</div>
				<div class="col-lg-5 col-xs-12">           
				   <p class="card-text"><span></span>Maintenance and Management</p>
					<p class="card-text"><span></span>Stylish visitors reception</p>
					<p class="card-text"><span></span>Management & Housekeeping Support</p>
					<p class="card-text"><span></span>Kitchen Amenities</p>
					<p class="card-text"><span></span>Printing & Stationery</p>
				</div>
			</div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--4 items slides -->
<section class="four_items_Carousel">	
	<div class="text-center my-3">
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
                <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/1.png">
					<div class="overlay1">
						<p>Personal spaces to nurture 
						your brainstorming</p>
					 </div>
                </div>
                 <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/2.png">
					<div class="overlay2">
						<p>Compact rooms to drive 
						your startup discussions</p>
					 </div>
				</div>
                <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/3.png">
					<div class="overlay3">
						<p>Conference facilities to 
						accommodate exchange of ideas.</p>
					 </div>
				</div>
                 <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/4.png">
						<div class="overlay4">
						<p>Startup cells for you to work 
						collaboratively as a team</p>
					 </div>
				</div>
            </div>
            <div class="carousel-item row no-gutters">
                 <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/1.png">
					<div class="overlay1">
						<p>Personal spaces to nurture 
						your brainstorming</p>
					 </div>
                </div>
                  <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/2.png">
					<div class="overlay2">
						<p>Compact rooms to drive 
						your startup discussions</p>
					 </div>
				</div>
              <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/3.png">
					<div class="overlay3">
						<p>Conference facilities to 
						accommodate exchange of ideas.</p>
					 </div>
				</div>
               <div class="inner_item col-3 float-left">
					<img class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' );?>/img/4.png">
						<div class="overlay4">
						<p>Startup cells for you to work 
						collaboratively as a team</p>
					 </div>
				</div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</section>
<!--Concierge Services-->
<section class="Concierge_Services">
  <div class="container">
    <div class="card">
      <div class="row">
		   <div class="col-lg-6 col-xs-12 left_grey">
		  <div class="card-block">
            <h4 class="card-title text-center">Concierge Services</h4>			
			<div class="card-body">
			<p class="initial_card_text font-weight-bold">Your clients will appreciate Hospitality. We make 
your Business more premium with concierge services.
</p>
			<div class="w-100 pb-3 d-flex align-items-center">
				<div class="col-lg-12">  
					<h5>An in-house team to assist with:</h5>    
				   <p class="card-text"><span></span>Receptionist</p>
					<p class="card-text"><span></span>Secretarial service</p>
					<p class="card-text"><span></span>Personalized telephone answering in English & Arabic</p>
					<p class="card-text"><span></span>Access to Business Lounge</p>
				</div>
				
			</div>
          </div>
          </div>
        </div>
        <div class="col-lg-6 col-xs-12 right_img">
          <div class="card-img-bottom">
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>
<!--Business Setup -->
<section class="business_centers b_setup">
  <div class="container">
    <div class="card">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-img-bottom">
          </div>
        </div>
        <div class="col-lg-6 col-xs-12">
		  <div class="card-block">
            <h4 class="card-title">Business Setup Services</h4>			
			<div class="card-body">
			<p class="initial_card_text font-weight-bold">Expert Assistance to setup your company in U.A.E

</p>
			<div class="w-100 d-flex xs-flex-column align-items-center">
				<div class="col-lg-6 col-xs-12">           
					<p class="card-text"><span></span>Local Sponsor/ 
Local Service Agent</p>
					<p class="card-text"><span></span>Trade Name reservation</p>
					<p class="card-text"><span></span>IT support in-house</p>
					<p class="card-text"><span></span>MOU Attestation in 
Dubai court</p>
					<p class="card-text"><span></span>Trade license issuance</p>
				</div>
				<div class="col-lg-5 col-xs-12">         
					<p class="card-text"><span></span>Establishment card</p>
					<p class="card-text"><span></span>Immigration card</p>
					<p class="card-text"><span></span>Medical & FingerPrinting </p>
					<p class="card-text"><span></span>Visa Stamping</p>
				</div>
			</div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Business Setup -->
<section class="book_address">
	<div class="container">
		<div class="row">
			  <div class="col-lg-8">
				<div class="col-lg-8">
					  <h5>
					  A setup in this bustling city surrounded by your client hub can give your business the wings it needs to make an impact. 
					  </h5>
					 <div class="d-flex py-2">
						  <span style="w-50 font-size: 14px;">Move in and start working immediately No large upfront payments.</span>
						  <button type="button" class="mt-5 w-25 btn float-right book_a_visit btn-block">Book A Visit</button> 
					  </div>
				</div>
			  </div>
			  <div class="col-lg-4 off_address">
				  <h2>OFFICE ADDRESS</h2>
				  <address>
						<span>Suite 1501 - 1508, XL Tower,</span>
						<span>Al Abraj Street,</span>
						<span>Business Bay, Dubai, UAE.</span>
				  </address>
			  </div>
		</div>
	</div>
</section>

<div class="footer">
<!-- Footer -->
<?php get_footer(); ?>
</div>
</body>
</html>

