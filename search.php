<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<form class="form-inline text-center" style="padding: 40px 0px 0px 5px;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">-- Select --</option><optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh"></optgroup><option value="Noida" >Noida</option>
								<option value="Ghaziabad">Ghaziabad</option>
								<option value="Gorakhpur">Gorakhpur</option>
								<option value="Agra">Agra</option>
								<option value="Aligarh">Aligarh</option>
								<option value="Allahabad">Allahabad</option>
								<option value="Mathura">Mathura</option>
								<option value="Firozabad">Firozabad</option>
								<option value="Etawah">Etawah</option>

								<optgroup title="Rajasthan" label="&raquo; Rajasthan"></optgroup><option value="Jaipur">Jaipur</option>
								<option value="Jodhpur">Jodhpur</option>
								<option value="Udaipur">Udaipur</option>
								<option value="Bikaner">Bikaner</option>
								<option value="Ajmer">Ajmer</option>
								<option value="Jaisalmer">Jaisalmer</option>
								<option value="Jhalawar">Jhalawar</option>
								<option value="Sikar">Sikar</option>

								<optgroup title="Madhya Pradesh" label="&raquo; Madhya Pradesh"></optgroup><option value="Bhopal">Bhopal</option>
								<option value="Indore">Indore</option>
								<option value="Gwalior">Gwalior</option>

								<optgroup title="Maharashtra" label="&raquo; Maharashtra"></optgroup><option value="Mumbai">Mumbai</option>
								<option value="Pune">Pune</option>
								<option value="Nagpur">Nagpur</option>
								<option value="Aurangabad">Aurangabad</option>
								<option value="Nashik">Nashik</option>
								<option value="Solapur">Solapur</option>
								<option value="Satara">Satara</option>

								<optgroup title="Gujarat" label="&raquo; Gujarat"></optgroup><option value="Surat">Surat</option>
								<option value="Rajkot">Rajkot</option>
								<option value="Vadodara">Vadodara</option>
								<option value="Gandhinagar">Gandhinagar</option>

								<optgroup title="Haryana" label="&raquo; Haryana"></optgroup><option value="Gurgaon">Gurgaon</option>
								<option value="Faridabad">Faridabad</option>
								<option value="Ambala">Ambala</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
</form>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
		<?php
		$host = "localhost";
		

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
