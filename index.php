<?php 

	//include header file
	include ('include/header.php');

?>

<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-inline text-center" style="padding: 40px 0px 0px 5px;" >
							<div class="form-group text-center justify-content-center">
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

							
								</div>
								<div class="form-group text-center justify-content-center">
									<select style="width: 220px; height: 45px;" name="blood_group" id="blood_group" class="form-control demo-default" required>
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
								<input type="submit" class="btn btn-lg btn-danger" name="Search"/>
							</div>
						</form>
						<div class="result">
							
</div>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						One of the biggest challenges to blood safety particularly is accessing safe and adequate quantities of blood and blood products. Safe supply of blood and blood components is essential, to enable a wide range of critical care procedures to be carried out in hospitals.
						"There is a hope of life to someone in your blood donation.”
						Come join hands with us in our mission to provide safe blood transfusion services to those in need.
						
							</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores a inventore ex voluptates, rerum vero soluta mollitia commodi quo nihil molestias, nam laboriosam harum nemo nesciunt esse temporibus illo accusantium?		
							</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit consectetur, non ab odio sint nisi, quas neque ipsum tempore eius explicabo earum ad illum? In, quo. Mollitia dolores repellendus quaerat.
							</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo natus assumenda autem neque minus est cumque harum eveniet quis exercitationem, esse repellendus numquam, nam odio voluptatem rerum maxime dolor nobis.								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
	include ('include/footer.php');
	$host = "127.0.0.1:3306";
	$user = "root";
	$pass = "root";
	$db = "donate_blood";
	$conn = mysqli_connect($host, $user, $pass, $db);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST['submit'])){
		$blood_group = $_POST['blood_group'];
		$sql = "SELECT * FROM `user` WHERE `blood_group` = '$blood_group'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<script> alert(".$row['name'].") </script>";
			}
		}

	}



 ?>