<style>
	
.BsO-Container {
	font-family: "Montserrat", "Kanit", sans-serif !important ;
	overflow: hidden;
}

.Bso-SubHead div {
	color: white;
	height: 20rem !important;
}

.Bso-SubHeadList {
	background-position: center;
	filter: grayscale(0.5);
	background-size: cover;
	transition: 
    /* scale 750ms ease-out, */ filter 250ms ease-in-out;
	text-align: center;
	font-size: 1.3rem;
	padding: 5rem 0.5rem 0 0.5rem;
	/* vertical-align: baseline !important; */
}

.Bso-SubHeadList:hover {
	/* scale: 1.15; */
	filter: grayscale(0);
}

.Bso-SubHead1 {
	background-image: url("https://cmo-group.com/investor-relations/assets/img/BO-img/business-overview-creative.jpg");
}

.Bso-SubHead2 {
	background-image: url("https://cmo-group.com/investor-relations/assets/img/BO-img/business-overview-equipment.jpg");
}

.Bso-SubHead3 {
	background-image: url("https://cmo-group.com/investor-relations/assets/img/BO-img/business-overview-visual.jpg");
}

.Bso-SubHead4 {
	background-image: url("https://cmo-group.com/investor-relations/assets/img/BO-img/business-overview-entertainment.jpg");
}

.Bso-SubHead5 {
	background-image: url("https://cmo-group.com/investor-relations/assets/img/business-overview/top-museum.jpg");
}

.Bso-SubHead6 {
	background-image: url("https://cmo-group.com/investor-relations/assets/img/BO-img/business-overview-utility.jpg");
}

.BsO1 {
	padding: 5% 5% 2% 5% !important;
}

.BsO1 h1 {
	color: #4a7ab5;
	font-size: 3rem !important;
	font-weight: 900;
}

.BsO1 p {
	padding: 1rem 10% 1rem 10%;
}

.BsO2 {
	display: flex;
	padding: 2% 5% 2% 5% !important;
	justify-content: center;
	gap: 5px;
}

.BsO2List {
	justify-content: center;
}

.BsO2List img {
	height: 20rem;
	width: auto;
}

.BsO3 {
	display: flex;
	justify-content: center;
	gap: 1rem;
}

.BsO3 img {
	width: 100%;
}

.BsO3 h4 {
	color: #4a7ab5;
	padding: 1rem 0 0 1rem;
	text-align: left;
}

.BsO3 p {
	padding: 1rem;
	text-align: left;
}

.BsO4 {
	display: flex;
	justify-content: center;
	gap: 1rem;
}

.BsO4 img {
	width: 100%;
}

.BsO4 h4 {
	color: #4a7ab5;
	padding: 1rem 0 0 1rem;
	text-align: right;
}

.BsO4 p {
	/* padding: 1rem; */
	text-align: right;
}

.BsO5 h2 {
	color: #4a7ab5;
	font-weight: 600;
}
.BsO5 h5 {
	color: #4a7ab5;
}

.BsO5 p {
	padding: 1rem 15% 1rem 15%;
}

.BsO6 {
	padding: 5% 10% 5% 10%;
	background-color: #e3e3e3;
	justify-content: center;
}

.BsO6 h2 {
	text-align: center;
	color: #4a7ab5;
	font-weight: 800;
}

.BsO6 p {
	text-align: center;
}

.sub-BsO6 {
	display: flex;
	padding: 2% 5% 2% 5% !important;
	justify-content: center;
	gap: 3px;
	text-align: center !important;
}

.sub-BsO6List {
	justify-content: center;
	padding: 1rem;
	color: #4a7ab5;
}

.sub-BsO6List img {
	height: 15rem;
	padding: 1rem;
}

.BsO7 {
	padding: 0% 10% 0% 10%;
	background-color: #cad5e9;
}

.BsO7 h2 {
	text-align: center;
	font-weight: 800;
	padding: 3% 15% 2% 15%;
}

.BsO7 p {
	text-align: center;
	padding: 0 3% 0 3%;
}

.sub-BsO7 {
	display: flex;
	padding: 2% 5% 2% 5% !important;
	justify-content: center;
	gap: 0;
}

.sub-BsO7List {
	justify-content: center;
}

.sub-BsO7List h5 {
	padding: 5% 5% 2% 5% !important;
	font-size: 1.2rem;
	font-weight: 500;
}

.sub-BsO7List h5 {
	padding: 5% 5% 2% 5% !important;
}

.sub-BsO7List img {
	height: 15rem;
}

.BsO8 {
	height: 50rem;
	padding: 10% 5% 2% 65% !important;
	background-image: url("https://cmo-group.com/investor-relations/assets/img/business-overview/bg-digital-and-technology-solutions.jpg");
	background-size: cover;
}

.BsO8 h1 {
	color: #9bd7f3;
	font-size: 3rem !important;
	font-weight: 900;
	text-align: left;
	text-shadow: 2px 2px 5px #000000;
}

.BsO8 p {
	color: white;
	text-align: left;
	text-shadow: 2px 2px 5px #000000;
}

.BsO9 {
	display: flex;
	justify-content: center;
	gap: 1rem;
	padding: 5% 5% 5% 5%;
}

.BsO9 img {
	width: 100%;
}

.BsO9 h2 {
	color: #4a7baa;
	padding: 1rem 0 0 1rem;
	text-align: right;
	font-weight: 900;
}

.BsO9 p {
	/* padding: 1rem; */
	text-align: right;
}

/* Media Queries */

@media only screen and (max-width: 1400px) {
	.Bso-SubHead div {
		color: white;
		height: 15rem !important;
	}

	.Bso-SubHeadList {
		font-size: 0.8rem;
		padding: 3rem 0.2rem 0 0.2rem;
	}

	.BsO1 h1 {
		font-size: 2rem !important;
	}

	.BsO2 {
		gap: 3px;
	}

	.BsO2List img {
		height: 15rem;
		width: auto;
	}

	.sub-BsO6List img {
		height: 8rem;
	}

	.BsO7 p {
		font-size: smaller;
		/* font-weight: bold; */
	}

	.sub-BsO7List img {
		height: 12rem;
	}

	.BsO8 {
		height: 40rem;
		padding: 10% 5% 2% 50% !important;
	}

	.BsO8 h1 {
		font-size: 2rem !important;
	}

	@media only screen and (max-width: 1050px) {
		.BsO2List img {
			height: 10rem;
		}
		.sub-BsO6List img {
			height: 5rem;
		}

		.BsO7 p {
			font-size: smaller;
		}

		.sub-BsO7List img {
			height: 10rem;
		}

		.BsO8-supbg {
			backdrop-filter: blur(10px);
			margin: 3%;
			padding: 3%;
			border-radius: 40px;
		}
	}

	@media only screen and (max-width: 950px) {
		.BsO2List img {
			height: 10rem;
		}
		.sub-BsO7List img {
			height: 7rem;
		}

		.BsO7 h5 {
			font-size: smaller;
		}

		.BsO7 p {
			font-size: smaller;
		}

		.BsO8 {
			height: 40rem;
			padding: 20% 10% 2% 10% !important;
		}

		.BsO8-supbg {
			backdrop-filter: blur(10px);
			margin: 3%;
			padding: 3%;
			border-radius: 40px;
		}

		.BsO8 h1 {
			font-size: 2rem !important;
			text-align: center;
		}

		.BsO8 p {
			text-align: center;
		}
	}

	@media only screen and (max-width: 600px) {
		.Bso-SubHead div {
			color: white;
			height: 10rem !important;
		}

		.Bso-SubHeadList {
			font-size: 0.7rem;
			padding: 2rem 0.1rem 0 0.1rem;
		}

		.BsO1 h1 {
			font-size: 1.6rem !important;
		}
		.BsO2List img {
			height: 8rem;
		}

		.BsO3 {
			display: block;
		}

		.BsO3 h4 {
			text-align: center;
		}

		.BsO3 p {
			text-align: center;
		}

		.BsO4 {
			display: block;
			background-color: #e3e3e3;
		}
		.BsO3 h4 {
			text-align: center;
		}

		.BsO3 p {
			text-align: center;
		}

		.BsO4 h4 {
			text-align: center;
		}

		.BsO4 p {
			text-align: center;
		}

		.sub-BsO6 {
			display: block;
		}

		.sub-BsO6List img {
			height: 5rem;
		}

		.sub-BsO6List {
			text-align: left;
		}

		.sub-BsO6List {
			font-size: smaller;
		}

		.BsO7 {
			padding: 3% 3% 3% 3%;
			background-color: #cad5e9;
		}

		.sub-BsO7 {
			display: block;
			padding: 2% 5% 2% 5% !important;
			gap: 0;
		}

		.BsO7 h5 {
			font-size: smaller;
			color: #4a7ab5;
			text-align: left;
		}

		.BsO7 p {
			font-size: smaller;
			text-align: left;
		}

		.sub-BsO7List {
			justify-content: center;
			border-block: none !important;
		}

		.sub-BsO7List img {
			height: auto;
		}

		.BsO9 {
			display: block;
		}

		.BsO9 h2 {
			text-align: center;
		}

		.BsO9 p {
			text-align: center;
		}
	}
}

@media only screen and (max-width: 450px) {
	.Bso-SubHead div {
		color: white;
		height: 7rem !important;
	}

	.Bso-SubHeadList {
		font-size: 0.6rem;
		padding: 1.5rem 0.1rem 0 0.1rem;
	}

	.BsO1 h1 {
		font-size: 1.4rem !important;
	}

	.BsO2List img {
		height: 5rem;
	}
	.sub-BsO6List {
		font-size: smaller;
		padding-left: 0;
		padding-right: 0;
	}

	.BsO7 h5 {
		font-size: smaller;
	}

	.BsO7 p {
		font-size: smaller;
	}

	.sub-BsO7List img {
		width: 15rem;
	}
}

/* ir-footer end */

/* Business Overview end */
	</style>


<section class="BsO-Container">

  <div class="d-flex Bso-SubHead upper" style="color: white;">
  	<div class="col Bso-SubHeadList Bso-SubHead1 text-center centered" onclick="window.location='<?php echo BASE_URL . 'business-overview#content4-i9'?>';">CREATIVE EVENT AGENCY</div>
	<div class="col Bso-SubHeadList Bso-SubHead2 text-center centered" onclick="window.location='<?php echo BASE_URL . 'business-overview#BsO-02'?>';">EQUIPMENT SERVICE</div>
	<div class="col Bso-SubHeadList Bso-SubHead3 text-center centered" onclick="window.location='<?php echo BASE_URL . 'business-overview#content4-n0'?>';">Digital Content Agency</div>
	<div class="col Bso-SubHeadList Bso-SubHead4 text-center centered" onclick="window.location='<?php echo BASE_URL . 'business-overview#BsO-04'?>';">ENTERTAINMENT AGENCY</div>
	<div class="col Bso-SubHeadList Bso-SubHead5 text-center centered" onclick="window.location='<?php echo BASE_URL . 'business-overview#BsO-05'?>';">Museum Creator</div>
	<div class="col Bso-SubHeadList Bso-SubHead6 text-center centered" onclick="window.location='<?php echo BASE_URL . 'business-overview#extHeader23-mm'?>';">UTILITY SERVICE</div>
  </div>

  <section class="mbr-section content4 cid-uqHJlOnROm" id="content4-i9">
    <div class="container" >
        <div class="media-container-row">
            <div class="title col-12 col-md-12">
                <h2 class="align-center pb-3 mbr-fonts-style display-2 upper" ><strong>Creative Event Agency</strong></h2>
                <p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
				The company is a leader in Event Management Business integrated with marketing communication for
creative experiences (Turnkey Event Management). There are various types of events such as Corporate &amp;
Marketing Event, Meetings Incentive Convention &amp; Exhibition: MICE, and Entertainment &amp; Lifestyle
business. The company focuses on creativity mixed with innovation &amp; technology. Three companies work
as Creative Event businesses, namely: CMO Public Company Limited, Muse Corporation Company Limited,
and Momentum S Company Limited.
                </p>

            </div>
        </div>
    </div>
</section>


<section class="features3 cid-us6nG2L8MG" id="extFeatures68-mk">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="card col-12 col-md-8 col-lg-4 p-0">
                <div class="card-wrapper card1">
                    <div class="card-box">
                        

                        <h4 class="card-title align-center mbr-bold mbr-white mbr-fonts-style display-5"></h4>
                        <p class="mbr-text align-center mbr-white mbr-fonts-style display-7"><br><br></p>
                        
                    </div>

                </div>
            </div>

            <div class="card col-12 col-md-8 col-lg-4 p-0">
                <div class="card-wrapper card2">
                    <div class="card-box">
                        
                        <h4 class="card-title align-center mbr-bold mbr-white mbr-fonts-style display-5"></h4>
                        <p class="mbr-text align-center mbr-white mbr-fonts-style display-7"><br><br></p>
                        
                    </div>

                </div>
            </div>

            <div class="card col-12 col-md-8 col-lg-4 p-0">
                <div class="card-wrapper card3">
                    <div class="card-box">
                        
                        <h4 class="card-title align-center mbr-bold mbr-white mbr-fonts-style display-5"></h4>
                        <p class="mbr-text align-center mbr-white mbr-fonts-style display-7"><br><br></p>
                        
                    </div>

                </div>
            </div>

            
        </div>
    </div>
</section>


  <!-- <div class=" BsO1 text-center" id="BsO-01">
	<h1>Creative Event Agency</h1>
	<p> The company is a leader in Event Management Business integrated with marketing communication for creative experiences (Turnkey Event Management). There are various types of events such as Corporate & Marketing Event, Meetings Incentive Convention & Exhibition: MICE, and Entertainment & Lifestyle business. The company focuses on creativity mixed with innovation & technology. Five companies work as Creative Event businesses, namely:  CMO Public Company Limited, Muse Corporation Co., Ltd and Momentum S Co., Ltd.,</p> 
  </div> -->

  <!-- <div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 01.jpg" ></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 02.jpg" ></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 03.jpg" ></div>
  </div> -->


  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 04.jpg"></div>
    <div class="col-md-4  p-3 BsO3List" >
		<h4 class="pb-3 mbr-fonts-style display-5 upper"><br><br><strong>Corporate & Marketing Event</strong></h4>
		<!-- <h4>Corporate & Marketing Event</h4> -->
		<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">The company is a leader in Event Management Business integrated with marketing communication for
	creative experiences (Turnkey Event Management). There are various types of events such as Corporate &amp;
	Marketing Event, Meetings Incentive Convention &amp; Exhibition: MICE, and Entertainment &amp; Lifestyle
	business. The company focuses on creativity mixed with innovation &amp; technology. Three companies work
	as Creative Event businesses, namely: CMO Public Company Limited, Muse Corporation Company Limited,
	and Momentum S Company Limited.</p>
	</div>
  </div>

  <div class="BsO4">
	<div class="col-md-4  p-3 BsO4List">
		<h4 class="pb-3 mbr-fonts-style display-5 upper"><br><br><br><br><strong>Public Event</strong></h4>
	<p  class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">The National and Public event is set for the campaign of each customer which has special
campaign in their product. This event will set in a short time period and need participation of
people. Almost, the National and Public event will set for a special occasion or annually such as
countdown event or Songkran Festival. </p></div>
    <div class="col-md-4  p-3 BsO4List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 05.jpg"></div>
  </div>




  <div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 06.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 07.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 08.jpg"></div>
  </div>



  <div class="BsO5 text-center">
  <h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;"><strong>Meetings Incentive Convention & Exhibition: MICE</strong></h4>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
	The Meeting Incentive Convention &amp; Exhibition industry is the one of event service that
constantly expanding that MICE team’s full functional service from create and brainstorm idea till
organize meeting. Moreover, the Company’s MICE team is equipped with instrument, technology
and potential that is sufficient to fully accommodate the business opportunities. For the Example
of MICE; welcoming party, education seminar, farewell party and public relations’ meeting.</p> 
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 09.jpg"></div>
    <div class="col-md-4  p-3 BsO3List">
		<h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;"><br><br><strong>Private Lifestyle Service</strong></h4>
		<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Providing the Private Lifestyle services such as birthday parties, weddings, or private parties. The
company service since giving advice, suggesting ideas, proposing interesting ideas or concepts,
designing and providing equipment and organizing events to come out modern and unique. The
highlight of the Private Lifestyle Event of the companies is bringing interesting fashion styles in
everywhere to blend with each person’s lifestyle.</p></div>
  </div>

  <div class=" BsO2 ">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 10.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 11.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 12.jpg"></div>
  </div>

  <div class=" BsO5 text-center">
	<h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;">Creative &amp; Entertainment Production Agency</h4>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Creative &amp; Entertainment Production Agency is operated in full service of Music Entertainment
business including organizing concert parties, all type of showbiz. The company emphasize on
different creative concepts via creating tailor-made events with identity for each client that
serves clients as one-stop-service.</p> 
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><br><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 13.jpg"></div>
    <div class="col-md-4  p-3 BsO3List">
		<h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;"><strong>Digital Event</strong></h4>
		<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Since 2020 the Coronavirus (COVID-19) pandemic impacted to people around the world. So the
Company’s market strategy has changed by focusing on opening of 3 integrated live streaming
studios of variety scales, fully with visual, lighting, sound and live streaming system to support
digital event. The digital event is not only just an event which is broadcast via live streaming, it
also covers the utilization of digital technology such as Augmented Reality (AR), computer graphic
(CG), interactive media, online registration, lucky draw system, product purchase system, and
Virtual Museum Exhibition. The digital event has become increasingly popular in every industry.</p></div>
  </div>
<!-- 
  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 14.jpg"></div>
    <div class="col-md-4  p-3 BsO3List"><h4>Museum & Exhibition</h4><p>Exhibition fair both permanent and temporary are the marketing communication tools by convey difference purpose depends on project’s objective. Whether for education or commercial proposes, the Company has a professional team who are expert every step of the operating process as concept, theme, interior, exterior, building or maintenance. Furthermore, there is a complete range of services of unique techniques and equipment which meet museum and exhibition to be modern and digital and attract new gen people.</p></div>
  </div> -->


  <div class=" BsO6" id="BsO-02">
	
	<h2 class="align-center pb-3 mbr-fonts-style display-2 upper">Equipment Service</h2>
	<p  class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Event equipment rental service is operated under PM Center Company Limited (Abbreviation as PM). PM
center is an all-in-one service supply that PM serves the market by providing equipment rental service
along with installation and technician service, as well as production consulting service.</p> 
	<p  class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Currently, PM’s service is categorized by system in 5 categories as following;</p> 
	<div class=" sub-BsO6"> 
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 01.png">Image or Visual System</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 02.png">Lighting System</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 03.png">Audio System</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 04.png">Special Effect</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 05.png">Rooftop & Structure System</div>
	  </div>
</div>

</section>





<section class="mbr-section content4 cid-us7z6autO6" id="content4-n0">

    

    <div class="container-fluid">
        <div class="media-container-row">
            <div class="title col-12 col-md-10">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>Digital Content Agency</strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><div>We are a digital marketing service provider focused on comprehensive digital marketing management, brand experience design, and multimedia production, covering both online and offline marketing, operating under Nerve Creative Co., Ltd. ('Nerve').</div></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="extFeatures cid-us7O60cQOh" id="extFeatures22-n4">

    

    

    <div class="container-fluid">
        <!-- <h4 class="main-title pb-5 align-left mbr-regular mbr-fonts-style display-2"><strong>Digital Content Agency</strong></h4> -->
        
        <!-- <h3 class="main-title align-center mbr-light mbr-fonts-style display-5"><div>We are a digital marketing service provider focused on comprehensive digital marketing management, brand experience design, and multimedia production, covering both online and offline marketing, operating under Nerve Creative Co., Ltd. ('Nerve').<br></div></h3> -->

        <div class="row justify-content-center">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-video-cinema-production-506x369.jpg" alt="" title="">
                    </div>
                    <div class="card-box align-left">
                        <h4 class="card-title align-left pb-3 mbr-fonts-style display-5">Digital Marketing</h4>
                        <p class="mbr-text align-left mbr-fonts-style display-7">• Market Research 
<br>• Brand Communication Strategy 
<br>• Campaign Strategy 
<br>• Digital Strategy Planning 
<br>• Content Strategy Planning 
<br>• Media Strategy &amp; Buying 
<br>• Influencer Management 
<br>• Graphic Design (Logo / Packaging / Online Materials) 
<br>• Web Design, Coding and Application</p>

                        

                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-interactive-media-506x369.jpg" alt="" title="">
                    </div>
                    <div class="card-box align-left">
                        <h4 class="card-title pb-3 align-left mbr-fonts-style display-5">Multimedia Production</h4>
                        <p class="mbr-text align-left mbr-fonts-style display-7">• Interactive Media / Display Media 
<br>• Immersive Projection Mapping/ 
<br>• Hologram 
<br>• Metaverse / VR/ AR / XR 
<br>• Hyper Realistic Ads / CGI / VFX 
<br>• Program &amp; Application Development</p>

                        
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-video-film-production-506x369.jpg" alt="" title="">
                    </div>
                    <div class="card-box align-left">
                        <h4 class="card-title align-left pb-3 mbr-fonts-style display-5">Video &amp; Film<br>Production</h4>
                        <p class="mbr-text align-left mbr-fonts-style display-7">• Pre-Production / Production / 
<br>Post-production 
<br>• 2D &amp; 3D Animation / Motion Graphic
<br>• Unreal Engine</p>

                        
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-multimedia-506x369.jpg" alt="" title="">
                    </div>
                    <div class="card-box align-left">
                        <h4 class="card-title align-left pb-3 mbr-fonts-style display-5">Creative Brand<br>Experience Design</h4>
                        <p class="mbr-text align-left mbr-fonts-style display-7">• IP Event , IP Attraction 
<br>• Event Online 
<br>• Tourist Attraction 
<br>• Theme Park</p>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
<section class="mbr-section content4 cid-us7z6autO6" id="content4-n0">

    

    <div class="container-fluid">
        <div class="media-container-row">
            <div class="title col-12 col-md-10">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>Digital Content Agency</strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-7"><div>We are a digital marketing service provider focused on comprehensive digital marketing management, brand experience design, and multimedia production, covering both online and offline marketing, operating under Nerve Creative Co., Ltd. ('Nerve').</div></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-us7wVTN49W" id="features2-mx">
    <div class="container-fluid">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-video-cinema-production-872x636.jpg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5"><strong>Digital Marketing</strong><strong><br></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7">• Market Research
<br>• Brand Communication Strategy
<br>• Campaign Strategy
<br>• Digital Strategy Planning
<br>• Content Strategy Planning
<br>• Media Strategy &amp; Buying
<br>• Influencer Management
<br>• Graphic Design (Logo / Packaging / Online Materials)
<br>• Web Design, Coding and Application</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-interactive-media-872x636.jpg" alt="" title="">
                    </div>
                    <div class="card-box ">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5"><strong>Multimedia Production</strong><strong><br></strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7">• Interactive Media/ Display Media
<br>• Immersive Projection Mapping&nbsp;<br>• Hologram
<br>• Metaverse / VR / AR / XR
<br>• Hyper Realistic Ads / CGI / VFX
<br>• Program &amp; Application Development</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-video-film-production-872x636.jpg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5"><strong>Video &amp; Film </strong><br><strong>Production</strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7">• Pre-Production / Production /
Post-production
<br>• 2D &amp; 3D Animation <br>• Motion Graphic<br>• Unreal Engine</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/-multimedia-872x636.jpg" alt="" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-5"><strong>Creative Brand </strong><br><strong>Experience Design</strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7">• IP Event , IP Attraction
<br>• Event Online
<br>• Tourist Attraction
<br>• Theme Park</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->






<section  id="BsO-04">

<div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-entertainment 01.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-entertainment 02.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-entertainment 03.jpg"></div>
</div>

  <div class=" BsO5 text-center">
	<h2 class="align-center pb-3 mbr-fonts-style display-2 upper">Entertainment Agency</h2>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5" >Entertainment Agency operates under “CM Live” which is a Concert &amp; Fanmeet promoter from South
	Korea, Thai, Europe, and USA.</p> 
</div>

</section>


<section>

<div class=" BsO8 text-center" id="BsO-05">
	<div class="BsO8-supbg">
	<h1  class="align-center pb-3 mbr-fonts-style display-1 upper">Museum Creator</h1>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5" >
	Exhibition fair both permanent and temporary are the marketing communication tools by convey
difference purpose depends on project’s objective. Whether for education or commercial proposes, the
Company has a professional team who are expert every step of the operating process as concept, theme,
interior, exterior, building or maintenance. Furthermore, there is a complete range of services of unique
techniques and equipment which meet museum and exhibition to be modern and digital and attract new
gen people with a format that is more like a Digital Museum, whether it be using RFID Card scanning
techniques to record data, presenting data combined with Projection Mapping, using AR technology to
present exhibitions, and hologram techniques, etc.</p> 
	</div>
</div>


</section>





















<section class="extHeader cid-us6nVjE4rq" id="extHeader23-mm">
    <div class="animated-text-background display-5" style="color: rgb(66, 132, 223); opacity: 0.2; font-size: 13rem;">
        <span class="animated-element" data-word="Utility Service" data-speed="50"></span>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="mbr-white py-md-0 col-md-6 pb-3">
                <h1 class="mbr-section-title mbr-white mbr-bold mbr-fonts-style align-left display-1">Utility Service<br></h1>
                <h2 class="mbr-section-subtitle pb-3 mbr-fonts-style mbr-white align-left mbr-regular display-5">Utilities Service is operated under Exposition Technology Company Limited (Abbreviation as Expo Tech) which is a subsidiary that the Company is a shareholder holding 40% of the paid registered capital. Expo Tech is a provider of utility service systems such as electrical connecting system, water piping system, air duct system and signal wiring system that are essential to event organizing. Furthermore, Expo Tech is the official operator of utility service for the Challenger Hall of Muang Thong Thani.</h2>
            </div>
            <div class="col-md-6 align-left img-block">
                <div class="mbr-figure">
                    <img src="<?php echo BASE_URL . PATH_MOBIRISE ;?>assets/images/business-overview-utility-1074x721.jpg" alt="" title="">
                </div>
            </div>
        </div>
    </div>
</section>
