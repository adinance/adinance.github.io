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
                <h2 class="align-center pb-3 mbr-fonts-style display-2 upper" ><strong>ธุรกิจการให้บริการบริหารจัดการอีเวนต์ทุกรูปแบบ<br> ด้วยความคิดสร้างสรรค์ผสานเทคโนโลยี (Creative Event Agency)</strong></h2>
                <p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
				บริษัทฯ เป็นผู้นำธุรกิจให้บริการบริหารจัดการอีเวนต์ด้วยการสื่อสารการตลาดด้านการสร้างประสบการณ์ด้วยความคิดสร้างสรรค์แบบครบวงจร โดยครอบคลุมงานทุกรูปแบบ  โดยให้ความสำคัญกับความคิดสร้างสรรค์ ผสมผสานเทคโนโลยี โดยมีบริษัทในเครือที่ให้บริการในกลุ่ม Creative Event  ทั้ง 3 บริษัท ได้แก่ บริษัท ซีเอ็มโอ จำกัด (มหาชน), บริษัท มิวส์ คอร์ปอเรชั่น จำกัด และบริษัท โมเมนตัม เอส จำกัด 
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
		<h4 class="pb-3 mbr-fonts-style display-5 upper"><br><br><strong>การจัดกิจกรรมทางการตลาด และการส่งเสริมการขาย (Corporate & Marketing Event)</strong></h4>
		<!-- <h4>Corporate & Marketing Event</h4> -->
		<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">บริษัทฯ เน้นการให้บริการการจัดกิจกรรมทางการตลาดและส่งเสริมการขายแบบสร้างประสบการณ์ (Experiential Marketing) อย่างเช่น การทำ Launching Event สินค้า, การทำ Online Marketing, การใช้ Social Media ต่างๆ และการจัดสัมมนาและงานบันเทิงตามเทศกาลสำคัญ เป็นต้น ล้วนเป็นกลยุทธ์ทางการตลาดที่สร้างประสบการณ์ให้ผู้บริโภคมีปฏิสัมพันธ์กับสินค้าในเชิงลึก ทำให้ผู้บริโภคอยากมีส่วนร่วมกับสินค้า หรือแบรนด์นั้นๆ นอกจากนี้ทำให้ผู้บริโภคเข้าใจถึง Brand Value ได้อย่างชัดเจนมากขึ้น</p>
	</div>
  </div>

  <div class="BsO4">
	<div class="col-md-4  p-3 BsO4List">
		<h4 class="pb-3 mbr-fonts-style display-5 upper"><br><br><br><br><strong>การจัดกิจกรรมประเภทงานบันเทิงสาธารณะ และกิจกรรมพิเศษ (Public Event)</strong></h4>
	<p  class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">เป็นการจัดกิจกรรมเพื่อส่งเสริมการขายในรูปแบบเฉพาะของแต่ละประเภทสินค้า ที่ต้องการกลุ่มผู้เข้าร่วมเป็นจำนวนมาก โดยส่วนมากจะเป็นการจัดงานขนาดใหญ่ และมีจำนวนวันจัดงานหลายวัน ซึ่งกิจกรรมประเภทนี้อาจเป็นได้ทั้งกิจกรรมพิเศษเฉพาะช่วงหรือในเทศกาล หรือกิจกรรมที่มีการจัดเป็นประจำทุกปี เช่น งานเคาต์ดาวน์, งานมหกรรมสงกรานต์ เป็นต้น </p></div>
    <div class="col-md-4  p-3 BsO4List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 05.jpg"></div>
  </div>




  <div class=" BsO2 justify-content-center">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 06.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 07.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 08.jpg"></div>
  </div>



  <div class="BsO5 text-center">
  <h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;"><strong>การจัดประชุมสัมมนา (Meetings Incentive Convention & Exhibition: MICE)</strong></h4>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
	อุตสาหกรรมการจัดประชุมสัมมนา (MICE) ถือเป็นหนึ่งในธุรกิจการให้บริการที่กำลังขยายตัวขึ้นอย่างต่อเนื่อง อย่างไรก็ดี บริษัทฯ ซึ่งมีทีมงานมากประสบการณ์ในด้านนี้คอยช่วยเหลือและดูแลในทุกๆ ด้านให้กับลูกค้า โดยจะให้บริการครบวงจรตั้งแต่การรับฟังแนวคิดแล้วนำมาพัฒนาเพื่อนำเสนอการจัดงานที่เหมาะสมแก่ลูกค้า โดยงานสัมมนาที่จัดส่วนมากจะเป็น การจัดเลี้ยงต้อนรับ การจัดหางานแสดงประเภทต่างๆ งานเลี้ยงอำลาสำหรับผู้มาร่วมงาน รวมไปถึงการประชาสัมพันธ์งานประชุม </p> 
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 09.jpg"></div>
    <div class="col-md-4  p-3 BsO3List">
		<h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;"><br><br><strong>การจัดอีเวนต์ส่วนตัว (Private Lifestyle Service) </strong></h4>
		<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">เป็นบริการจัดงานด้าน Private Lifestyle อาทิ จัดงานครบรอบวันเกิด, งานแต่งงาน หรือ งานปาร์ตี้สังสรรค์ เป็นต้น ซึ่งครอบคลุมตั้งแต่การให้คำแนะนำ เสนอแนวความคิด และคอนเซ็ปของงาน รวมถึงออกแบบ จัดหาอุปกรณ์และควบคุมการผลิตทุกองค์ประกอบ ติดตั้ง ตกแต่ง ดูแลความเรียบร้อยของทุกส่วนภายในงาน ให้ออกมาอย่างทันสมัยและไม่เหมือนใคร  </p></div>
  </div>

  <div class=" BsO2 ">
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 10.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 11.jpg"></div>
	<div class=" BsO2List"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 12.jpg"></div>
  </div>

  <div class=" BsO5 text-center">
	<h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;">การจัดงานอีเวนต์ในรูปแบบคอนเสิร์ต ปาร์ตี้คอนเสิร์ต โชว์บิซทุกประเภท <br> (Creative & Entertainment Production  Agency)</h4>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">เป็นบริการจัดงานอีเวนต์ งานด้าน Music Entertainment แบบครบวงจร ครอบคลุมถึงการจัดปาร์ตี้คอนเสิร์ต โชว์บิซทุกประเภท โดยจะเน้นการนำเสนองานด้วยแนวคิดสร้างสรรค์ที่แตกต่างผ่านรูปแบบการสร้างงานที่มีเอกลักษณ์เฉพาะให้แก่ลูกค้า (Tailor-made) ทำให้สามารถรองรับบริการลูกค้าได้แบบ one stop service </p> 
  </div>

  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><br><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 13.jpg"></div>
    <div class="col-md-4  p-3 BsO3List">
		<h4 class="pb-3 mbr-fonts-style display-5 upper" style="color: #4a7ab5;"><strong>การจัดกิจกรรมในรูปแบบดิจิทัล อีเวนต์ (Digital Event)</strong></h4>
		<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">จากการแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา 19 (COVID-19) ทั่วโลก ตั้งแต่ปี 2563 บริษัทฯ ได้ทำการปรับ    กลยุทธ์มาสู่แพลตฟอร์มดิจิทัลมากขึ้น โดยเปิดสตูดิโอสตรีมมิ่งครบวงจรทั้งหมด 3 สตูดิโอ ที่มีขนาดพื้นที่จัดงานที่หลากหลายพร้อมทั้งครบครันด้วยระบบภาพ แสง เสียง และระบบ Live Streaming เพื่อรองรับการจัดงาน ดิจิทัล อีเวนต์ (Digital Event) ทุกประเภท ไม่เพียงเท่านี้ แต่ยังมีการนำเทคโนโลยีดิจิทัลเข้ามาใช้ในการจัดงานอีกด้วย เช่น การใช้เทคนิค Augmented Reality (AR), การออกแบบคอมพิวเตอร์กราฟฟิค (CG), การทำ Interactive Media, ระบบการลงทะเบียนออนไลน์, ระบบ Lucky Draw, ระบบซื้อสินค้า และ การทำ Virtual Museum Exhibition เป็นต้น ซึ่งบริษัทฯ สามารถจัดงานดิจิทัล อีเวนต์ได้ครอบคลุมหลายประเภท ไม่ว่าจะเป็นงานเปิดตัวสินค้า, งานประชุมวิชาการนานาชาติ, งานสัมมนา, งาน Fan Meeting และอีกหลากหลายประเภทงาน</p></div>
  </div>
<!-- 
  <div class="BsO3">
    <div class="col-md-4  p-3 BsO3List "><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-creative 14.jpg"></div>
    <div class="col-md-4  p-3 BsO3List"><h4>Museum & Exhibition</h4><p>Exhibition fair both permanent and temporary are the marketing communication tools by convey difference purpose depends on project’s objective. Whether for education or commercial proposes, the Company has a professional team who are expert every step of the operating process as concept, theme, interior, exterior, building or maintenance. Furthermore, there is a complete range of services of unique techniques and equipment which meet museum and exhibition to be modern and digital and attract new gen people.</p></div>
  </div> -->


  <div class=" BsO6" id="BsO-02">
	
	<h2 class="align-center pb-3 mbr-fonts-style display-2 upper">ธุรกิจให้บริการระบบภาพ แสง เสียง เทคนิคพิเศษ <br> (Equipment Service)</h2>
	<p  class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">เป็นธุรกิจให้บริการอุปกรณ์ในกลุ่มบริษัทที่อยู่ภายใต้การดำเนินงานของ “บริษัท พีเอ็ม เซ็นเตอร์ จำกัด (“พีเอ็ม”)” ซึ่งให้บริการระบบภาพ แสง เสียง เทคนิคพิเศษต่างๆ ที่ครอบคลุมตั้งแต่การออกแบบทั้งด้านสุนทรียภาพและด้านวิศวกรรม  จนถึงการติดตั้งและให้เช่าอุปกรณ์ เพื่อตอบสนองความต้องการของโชว์ คอนเสิร์ต และอีเวนต์ทุกรูปแบบ ด้วยมาตรฐานการทำงานระดับสากล</p> 
	<p  class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">ปัจจุบันมีการให้บริการอุปกรณ์อยู่ 5 ประเภทหลัก ดังนี้</p> 
	<div class=" sub-BsO6"> 
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 01.png">บริการอุปกรณ์ระบบภาพ (Image System or Visual System)	</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 02.png">บริการอุปกรณ์ระบบแสง  (Lighting System)</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 03.png">บริการอุปกรณ์ระบบเสียง (Audio System)</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 04.png">บริการอุปกรณ์เทคนิคพิเศษ (Special Effect)</div>
		<div class=" sub-BsO6List mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><img src="<?php echo BASE_URL; ?>assets/img/BO-img/business overview-equipment 05.png">บริการอุปกรณ์โครงสร้างในรูปแบบต่างๆ (Rooftop & Structure System) </div>
	  </div>
</div>

</section>





<section class="mbr-section content4 cid-us7z6autO6" id="content4-n0">

    

    <div class="container-fluid">
        <div class="media-container-row">
            <div class="title col-12 col-md-10">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>ธุรกิจให้บริการผลิตสื่อ ประเภทวิดีโอ ภาพยนตร์ แอนิเมชัน และอินเตอร์แอคทีฟมีเดีย <br>(Visual Creator & Production House) </strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><div>เป็นธุรกิจให้บริการด้านการตลาดดิจิทัลที่มุ่งเน้นการจัดการการตลาดดิจิทัลแบบครงวงจร การออกแบบประสบการณ์แบรนด์ และการผลิตสื่อมัลติมีเดีย ครอบคลุมการตลาดออนไลน์และออฟไลน์ ในกลุ่มบริษัทที่อยู่ภายใต้การดำเนินงานของ “บริษัท เนิร์ฟ ครีเอทีฟ จำกัด (“เนิร์ฟ”)” ซึ่งมีการให้บริการอยู่ 4 ประเภท ได้แก่</div></h3>
                
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
	<h2 class="align-center pb-3 mbr-fonts-style display-2 upper">ธุรกิจให้บริการด้านเอ็นเตอร์เทนเม้นต์ทุกรูปแบบ เป็นโปรโมเตอร์จัดงานคอนเสิร์ต <br>แฟนมีตติ้ง และโชว์บิซนำเข้าจากต่างประเทศ (Entertainment Agency)</h2>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5" >เป็นธุรกิจให้บริการด้านเอ็นเตอร์เทนเม้นต์ ในกลุ่มบริษัทที่อยู่ภายใต้การดำเนินงานของ “ ซี เอ็ม ไลฟ์” เป็นผู้จัดคอนเสิร์ต แฟนมีตติ้ง ทั้งเกาหลีใต้ และไทย เพื่อสร้างความบันเทิงเต็มรูปแบบ </p> 
</div>

</section>


<section>

<div class=" BsO8 text-center" id="BsO-05">
	<div class="BsO8-supbg">
	<h1  class="align-center pb-3 mbr-fonts-style display-2 upper">การจัดผลงานแสดงนิทรรศการถาวรประเภทพิพิธภัณฑ์และงานนิทรรศการชั่วคราว</h1>
	<p class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-7" >การจัดนิทรรศการถาวรและนิทรรศการชั่วคราวนั้น ถือเป็นการจัดประชาสัมพันธ์ทางด้านการตลาดรูปแบบหนึ่ง โดยงานแต่ละประเภทก็จะมีการตั้งวัตถุประสงค์แตกต่างกันไป ไม่ว่าจะเป็นเพื่อการศึกษาหรือเพื่อการค้า ทั้งนี้ บริษัทฯ มีทีมงานที่ประกอบวิชาชีพโดยตรงและเป็นผู้เชี่ยวชาญซึ่งจะเป็นผู้ดำเนินงานทุกขั้นตอน ตั้งแต่การออกแบบเนื้อหานิทรรศการ การออกแบบบรรยากาศภายในและภายนอกอาคาร งานก่อสร้าง หรืองานวางแผนบำรุงรักษาและบริหารจัดการ เป็นต้น ตลอดจนบริษัทฯ มีความครบวงจรในเรื่องของเทคนิคพิเศษต่างๆ รวมถึงอุปกรณ์ระบบภาพแสงเสียง ที่จะมาช่วยตอบโจทย์ให้พิพิธภัณฑ์มีความทันสมัย เข้าถึงคนรุ่นใหม่ ด้วยรูปแบบที่มีความเป็น Digital Museum มากขึ้น ไม่ว่าจะเป็นเทคนิค RFID Card scan เพื่อเก็บบันทึกข้อมูล , การนำเสนอข้อมูลผสมผสานกับ Projection Mapping, การใช้เทคโนโลยี AR นำเสนอนิทรรศการ และ เทคนิคโฮโลแกรม เป็นต้น</p> 
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
                <h1 class="mbr-section-title mbr-white mbr-bold mbr-fonts-style align-left display-2">ธุรกิจให้บริการระบบสาธารณูปโภค <br></h1>
                <h2 class="mbr-section-subtitle pb-3 mbr-fonts-style mbr-white align-left mbr-regular display-5">เป็นธุรกิจให้บริการระบบสาธารณูปโภคที่อยู่ภายใต้การดำเนินงานของ “บริษัท เอ็กซ์โปซิชั่น เทคโนโลยี จำกัด           (“เอ็กซ์โป เทค”)” ซึ่งเป็นบริษัทย่อยที่บริษัทฯ ถือหุ้นในสัดส่วนร้อยละ 40 ของทุนจดทะเบียนที่ชำระแล้วของบริษัทดังกล่าว  ซึ่งถือเป็นผู้ให้บริการระบบสาธารณูปโภค อาทิเช่น บริการต่อระบบไฟฟ้า ระบบท่อน้ำ ระบบท่อลม และระบบการเดินสายส่งสัญญาณต่างๆ ที่จำเป็นสำหรับการจัดงานอีเวนต์ นอกจากนี้ยังเป็นผู้ให้บริการด้านระบบสาธารณูปโภคทุกประเภทอย่างเป็นทางการในส่วนของอาคารชาเลนเจอร์ เมืองทองธานี </h2>
            </div>
            <div class="col-md-6 align-left img-block">
                <div class="mbr-figure">
                    <img src="<?php echo BASE_URL . PATH_MOBIRISE ;?>assets/images/business-overview-utility-1074x721.jpg" alt="" title="">
                </div>
            </div>
        </div>
    </div>
</section>
