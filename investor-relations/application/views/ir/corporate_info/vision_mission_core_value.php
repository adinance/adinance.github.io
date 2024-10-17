<style>
	/* ir-corp02-section  start*/

	.ir-corp02-section {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.ir-corp02-1 {
		background-image: url("https://cmo-group.com/investor-relations/assets/img/ir-corp/vision bg.jpg");
		background-size: cover;
		/* height: 100vh; */
		/* width: 100vw; */
		justify-content: center;
		align-items: center;
		vertical-align: middle;
		font-family: "Montserrat", "Kanit", sans-serif !important;
		display: flex;
		color: white;
		text-shadow: 4px 4px 8px #000000;
	}

	.ir-corp02-1-con {
		padding: 10% 10% 10% 50%;
	}

	.ir-corp02-1 h1 {
		font-weight: 800;
		font-size: 4.5rem;
	}

	.ir-corp02-2 {
		background-image: url("https://cmo-group.com/investor-relations/assets/img/ir-corp/vision mission bg.jpg");
		background-size: cover;
		/* height: 100vh; */
		/* width: 100vw; */
		justify-content: center;
		align-items: center;
		vertical-align: middle;
		font-family: "Montserrat", "Kanit", sans-serif !important;
		display: flex;
	}

	.ir-corp02-2-con {
		padding: 10% 50% 10% 10%;
	}

	.ir-corp02-2 h1 {
		font-weight: 800;
		font-size: 4.5rem;
		color: black;
	}

	.ir-corp02-3 h3 {
		font-weight: 800;
		font-size: 3rem;
		color: #5f656d;
	}

	.ir-corp02-3 {
		background-color: white;
		background-size: cover;
		/* height: 100vh; */
		/* width: 100vw; */
		justify-content: center;
		align-items: center;
		vertical-align: middle;
		font-family: "Montserrat", "Kanit", sans-serif !important;
		display: flex;
		list-style: none;
	}

	.ir-corp02-3-con {
		padding: 10% 10% 10% 10%;
	}

	.ir-corp02-3 h1 {
		font-weight: 800;
		font-size: 5rem;
		color: #4a7ab5;
	}

	.ir-corp02-3-list {
		display: flex;
		text-align: left;
	}

	.ir-corp02-3-list div {
		padding: 5% 3% 5% 3%;
	}

	@media only screen and (max-width: 600px) {
		.ir-corp02-1-con {
			padding: 10% 0% 10% 10%;
		}

		.ir-corp02-1 h1 {
			font-weight: 800;
			font-size: 3rem;
		}

		.ir-corp02-2-con {
			padding: 10% 10% 10% 10%;
		}

		.ir-corp02-2 h1 {
			font-weight: 800;
			font-size: 3rem;
		}

		.ir-corp02-3 h1 {
			font-size: 3rem;
		}

		.ir-corp02-3-list {
			display: block;
			text-align: left;
		}

		.ir-corp02-3 h3 {
			font-size: 2rem;
		}

		.ir-corp02-3-list div {
			padding: 1% 3% 1% 3%;
		}
	}

	@media only screen and (max-width: 450px) {
		.ir-corp02-3 h1 {
			font-size: 2.5rem;
		}
	}
</style>

<section class="ir-corp02-section">

	<div class="ir-corp02-1">

		<div class="ir-corp02-1-con">
			<h1><?php echo isset($this->session->vision) ? $this->session->vision : 'Vision'; ?></h1>
			<h4>Sustainable Creative Experience Creator<br></h4>
			<p><?php echo isset($this->session->vision_text) ? $this->session->vision_text : 'CMO is a creative experience creator combined with technology to create a new experience that meets the requirements of clients and customers in the AI era for building sustainable growth'; ?></p>

		</div>
	</div>

	<div class="ir-corp02-2">

		<div class="ir-corp02-2-con">
			<h1><?php echo isset($this->session->mission) ? $this->session->mission : 'Vision'; ?></h1>
			<h3>Back to the Basics but not the Same</h3>
			<p><?php echo isset($this->session->mission_text) ? $this->session->mission_text : 'Strengthen the Event Business, which was originally a strong point of the company, by providing equipment services and technology in full under good governance and sustainability';?></p>

		</div>
	</div>

	<div class="ir-corp02-3">

		<div class="ir-corp02-3-con text-center">

			<h3><?php echo isset($this->session->core_vaue) ? $this->session->core_vaue : 'CORE VALUE'; ?></h3>
			<h1 style="font-size: 10em;">CMORE</h1>

			<div class="ir-corp02-3-list">
				<div class="ir-corp02-3-list1">
					<li style="color:  #4a7ab5;"><strong>C - Creaivity</strong></li>
					<li><?php echo isset($this->session->core_vaue_c) ? $this->session->core_vaue_c : 'Driving with creativity and create a creative culture in the organization'; ?></li>

				</div>

				<div class="ir-corp02-3-list3">
					<li style="color:  #4a7ab5;"><strong>M - Mastery</strong></li>
					<li><?php echo isset($this->session->core_vaue_m) ? $this->session->core_vaue_m : 'Sharing the superior experience through creative projects as a professional'; ?></li>

				</div>

				<div class="ir-corp02-3-list2">
					<li style="color:  #4a7ab5;"><strong>O - Optimistic</strong></li>
					<li><?php echo isset($this->session->core_vaue_o) ? $this->session->core_vaue_o : 'Opening to Teamwork and collaboration and sending positive energy.'; ?></li>

				</div>
				<div class="ir-corp02-3-list4">
					<li style="color: #4a7ab5;"><strong>R - Resilience</strong></li>
					<li><?php echo isset($this->session->core_vaue_r) ? $this->session->core_vaue_r : 'Learning and adapt, keep up with every change'; ?></li>

				</div>
				<div class="ir-corp02-3-list5">
					<li style="color:  #4a7ab5;"><strong>E - Extreme</strong></li>
					<li><?php echo isset($this->session->core_vaue_e) ? $this->session->core_vaue_e : 'Increasing potential to push the limits to achieve the biggest goals.'; ?></li>

				</div>
			</div>

		</div>
	</div>

	</div>

	</div>

	</div>

</section>