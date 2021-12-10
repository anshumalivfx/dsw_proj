<!-- 
    signup user and insert into database donate_blood.user with values (id AUTOINCREMENT, name, email, password, phone, address, blood_group) 
 -->
 
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Raleway", sans-serif
                
                
            }
        </style>
    </head>
    <body class="w3-light-grey">
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">
                    <!-- red color h1 Signup -->
                    <h1 class="w3-center w3-text-red w3-padding-32">Signup</h1>
                    <form action="signup.php" method="post">
                        <div class="w3-section">
                            <label>Name</label>
                            <input class="w3-input w3-border" type="text" name="name" required>
                        </div>
                        <div class="w3-section">
                            <label>Email</label>
                            <input class="w3-input w3-border" type="email" name="email" required>
                        </div>
                        <div class="w3-section">
                            <label>Password</label>
                            <input class="w3-input w3-border" type="password" name="password" title="minimum 6 characters" required pattern="[^ ]{6,16}" required>
                        </div>
                        <div class="w3-section">
                            <label>Phone</label>
                            <input class="w3-input w3-border" type="text" name="phone" required pattern="^\d{10}$" title="10 numeric characters only" required>
                        </div>
                        <div class="w3-section">
                            <label>Address</label>
                            <select class="w3-select w3-border" name="address" required >
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
                        <div class="w3-section">
                            <label>Blood Group</label>
                            <select class="w3-select w3-border" name="blood_group" required>
                                <option value="" disabled selected>Choose your option</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <div class="w3-section">
                            <!-- Red color Submit Button -->
                            <button class="w3-button w3-block w3-red w3-round-large w3-right w3-margin-bottom" type="submit" name="submit">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>

<?php
$host="localhost";
$user="root";
$password="";
$db="donate_blood";
$conn=mysqli_connect($host,$user,$password,$db);


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $blood_group=$_POST['blood_group'];
        $query="INSERT INTO user(name,email,password,phone,address,blood_group) VALUES ('$name','$email','$password','$phone','$address','$blood_group')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "<script>alert('Signup Successful')</script>";
            echo "<script>window.open('signin.php','_self')</script>";
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }
    }
?>
