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
	background-image: url("https://cmo-group.com/investor-relations/assets/img/BO-img/business-overview-digital.jpg");
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
	padding: 1rem;
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
	padding: 5% 10% 5% 10%;
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
	background-image: url("http://localhost/ir.cmo-group.com/assets/img/BO-img/business overview-digital.jpg");
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
	padding: 1rem;
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



  <div class="d-flex Bso-SubHead">
	<div class="col Bso-SubHeadList Bso-SubHead1 text-center centered"><a href="#BsO-01" style="color: white;">CREATIVE EVENT AGENCY<a/></div>
	<div class="col Bso-SubHeadList Bso-SubHead2 text-center centered"><a href="#BsO-02" style="color: white;">EQUIPMENT SERVICE</a></div>
	<div class="col Bso-SubHeadList Bso-SubHead3 text-center centered"><a href="#BsO-03" style="color: white;">VISUAL CREATOR & PRODUCTION HOUSE</a></div>
	<div class="col Bso-SubHeadList Bso-SubHead4 text-center centered"><a href="#BsO-04" style="color: white;">ENTERTAINMENT AGENCY</a></div>
	<div class="col Bso-SubHeadList Bso-SubHead5 text-center centered"><a href="#BsO-05" style="color: white;">DIGITAL & TECHNOLOGY<BR>SOLUTION</a></div>
	<div class="col Bso-SubHeadList Bso-SubHead6 text-center centered"><a href="#BsO-06" style="color: white;">UTILITY SERVICE</a></div>
	
  </div>


  <div class=" BsO1 text-center" id="BsO-01">
	<h1>Creative Event Agency</h1>
	<p> The company is a leader in Event Management Business integrated with marketing communication for creative experiences (Turnkey Event Management). There are various types of events such as Corporate & Marketing Event, Meetings Incentive Convention & Exhibition: MICE, and Entertainment & Lifestyle business. The company focuses on creativity mixed with innovation & technology. Five companies work as Creative Event businesses, namely:  CMO Public Company Limited, Muse Corporation Co., Ltd and Momentum S Co., Ltd.,</p> 
  </div>

  <div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 01.jpg" ></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 02.jpg" ></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 03.jpg" ></div>
  </div>


  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 04.jpg"></div>
    <div class="col-md-4  p-3 BsO3List"><h4>Corporate & Marketing Event</h4><p>The Company focuses on creative and marketing promotion management to create brand awareness such as making product launch events, doing online marketing, using various social media, organizing seminar and important festival etc. All of these are marketing strategies that create experience for the customers’ target group in order to bring out positive emotion and brand recall. As the result, brand experience is establish in the customer mind in the forms of liking, preference, desire and need to possess which will finally lead to the purchase decision, increasing sales value and brand value.</p></div>
  </div>

  <div class="BsO4">
	<div class="col-md-4  p-3 BsO4List"><h4>National & Public Event</h4><p>The National and Public event is set for the campaign of each customer which has special campaign in their product. This event will set in a short time period and need participation of people. Almost, the National and Public event will set for a special occasion or annually. </p></div>
    <div class="col-md-4  p-3 BsO4List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 05.jpg"></div>
  </div>




  <div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 06.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 07.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 08.jpg"></div>
  </div>



  <div class=" BsO5 text-center">
	<h5>Meetings Incentive Convention & Exhibition: MICE</h5>
	<p>The Meeting Incentive Convention & Exhibition industry is the one of event service that constantly expanding that MICE team’s full functional service from create and brainstorm idea till organize meeting. Moreover, the Company’s MICE team is equipped with instrument, technology and potential that is sufficient to fully accommodate the business opportunities. For the Example of MICE; welcoming party, education seminar, farewell party and public relations’ meeting.</p> 
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 09.jpg"></div>
    <div class="col-md-4  p-3 BsO3List"><h4>Corporate & Private Lifestyle Service</h4><p>Providing the Private Lifestyle Event services such as birthday parties, weddings, or private parties. The company service since giving advice, suggesting ideas, proposing interesting ideas or concepts, designing and providing equipment and organizing events to come out modern and unique. The highlight of the Private Lifestyle Event of the companies is bringing interesting fashion styles in everywhere to blend with each person’s lifestyle.</p></div>
  </div>

  <div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 10.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 11.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 12.jpg"></div>
  </div>

  <div class=" BsO5 text-center">
	<h5>Creative & Entertainment Production  Agency</h5>
	<p>Creative & Entertainment Production Agency is operated in full service of Music Entertainment business including organizing concert parties, all type of showbiz. The company emphasize on different creative concepts via creating tailor-made events with identity for each client that serves clients as one-stop-service.</p> 
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 13.jpg"></div>
    <div class="col-md-4  p-3 BsO3List"><h4>Digital & Hybrid Event</h4><p>Since 2020 the Coronavirus (COVID-19) pandemic impacted to people around the world. So the Company’s market strategy has changed by focusing on opening of 3 integrated live streaming studios of variety scales, fully with visual, lighting, sound and live streaming system to support digital event. The digital event is not only just an event which is broadcast via live streaming, it also covers the utilization of digital technology such as Augmented Reality (AR), computer graphic (CG), interactive media, online registration, lucky draw system, product purchase system, and   Virtual Museum Exhibition. The digital event has become increasingly popular in every industry.</p></div>
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 14.jpg"></div>
    <div class="col-md-4  p-3 BsO3List"><h4>Museum & Exhibition</h4><p>Exhibition fair both permanent and temporary are the marketing communication tools by convey difference purpose depends on project’s objective. Whether for education or commercial proposes, the Company has a professional team who are expert every step of the operating process as concept, theme, interior, exterior, building or maintenance. Furthermore, there is a complete range of services of unique techniques and equipment which meet museum and exhibition to be modern and digital and attract new gen people.</p></div>
  </div>


  <div class=" BsO6" id="BsO-02">
	
	<h2>Equipment Service</h2>
	<p>Event equipment rental service is operated under PM Center Company Limited (Abbreviation as PM). PM center is an all-in-one service supply that PM serves the market by providing equipment rental service along with installation and technician service, as well as production consulting service.</p> 
	<p>Currently, PM’s service is categorized by system in 5 categories as following;</p> 
	<div class=" sub-BsO6"> 
		<div class=" sub-BsO6List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 01.png">Image or Visual System</div>
		<div class=" sub-BsO6List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 02.png">Lighting System</div>
		<div class=" sub-BsO6List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 03.png">Audio System</div>
		<div class=" sub-BsO6List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 04.png">Special Effect</div>
		<div class=" sub-BsO6List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 05.png">Rooftop & Structure System</div>
	  </div>
</div>





<div class=" BsO7 text-center" id="BsO-03">
	<h2>Visual Creator & Production House</h2>
	<p>Visual Creator & Production House is related to virtual creation, designing, controlling, and production of VIDEO & Cinema Production, TVC, Multimedia, Interactive, CG, Virtual & Digital Content, Animation, and New Media that operate under Nerve Creative Co., Ltd.</p> 
	<p>Our four Core Services are:</p> 
	<div class=" sub-BsO7 justify-content-center">
		<div class=" sub-BsO7List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-visual 01.jpg">
			<h5>Video & Cinema Production</h5>	<p>  Video & Cinema Production: one-stop service of video production from creative & script development, shooting production, computer graphic development, sound recording and mixing and video editing. Our types of video production ranges from corporate video, promotional video, product.</p> </div>
		<div class=" sub-BsO7List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-visual 02.jpg">
			<h5>Virtual Experience</h5>	<p>  Using media production techniques through technology such as Live Streaming, Virtual Reality (VR), and Augmented Reality (AR).</p> </div>
		<div class=" sub-BsO7List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-visual 03.jpg">
			<h5>Multimedia</h5>	<p>  A presentation made by multi-media including video, images, graphic, light & sound to use for marketing event, conferences, exhibitions and museum. </p> </div>
		<div class=" sub-BsO7List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-visual 04.jpg">
			<h5>Interactive Media</h5>	<p>  Interactive Media: This kind of media is used to coloring the events, exhibitions or museums to draw clients or participants’ attractions as they can interact with the media to get into the details or information of the products and services by a more entertaining way. Our interactive media includes photo booth, interactive shadow, Kinect interactive program, multi-touch table, reactable, transparent display and augmented reality.</p> </div>

	  </div>
</div>


<div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-entertainment 01.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-entertainment 02.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-entertainment 03.jpg"></div>
  </div>

  <div class=" BsO5 text-center" id="BsO-04">
	<h2>Entertainment Agency</h2>
	<p>Entertainment Agency operates under “CM Live Co., Ltd. (“CM Live”)” which is a Concert & Fanmeet promoter from South Korea, Thai, Europe, and USA. CM Live aims to be a leader of In-bound Live Entertainment Experience, fully stepping into the Entertainment Business. To entertain Asia and Global and bring world festivals into Thailand.</p> 
</div>


  <div class=" BsO8 text-center" id="BsO-05">
	<div class="BsO8-supbg">
	<h1>Digital and Technology Solutions</h1>
	<p>Digital and Technology Solutions is a new business of the company. The goal is to develop and reach the company into the technology business efficiently. As part of expanding the technology business, the company has to spend a long time learning meticulously to create full solution service for both regular and new customers. Also, helping organizations and brands to transform business in web 3.0.</p> 
	</div>
	</div>



	<div class="BsO9" id="BsO-06">
		<div class="col-md-4  p-3 BsO4List"><h2>Utility Service</h2><p>	Utilities Service is operated under Exposition Technology Company Limited (Abbreviation as Expo Tech) which is a subsidiary that the Company is a shareholder holding 40% of the paid registered capital.
			Expo Tech is a provider of utility service systems such as electrical connecting system, water piping system, air duct system and signal wiring system that are essential to event organizing. Furthermore, Expo Tech is the official operator of utility service for the Challenger Hall of Muang Thong Thani.
			</p></div>
		<div class="col-md-4  p-3 BsO4List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 05.jpg"></div>
	  </div>
  

	  

  




</section>
