<?php 

	//include header file
	include ('include/header.php');
	session_start();
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
</style>
 <div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">
		
		<!-- Erorr Messages -->

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
				<div class="form-group">
					<label for="email">Email/Phone no.</label>
					<input type="text" name="email" class="form-control" placeholder="Email Or Phone" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
				</div>
				<div class="form-group">
					<input class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn" />
				</div>
			</form>

		</div>
	</div>
</div>
<?php 
include ('include/footer.php' );
$host = "localhost";
$user = "root";
$pass = "";
$db = "donate_blood";
$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}
if(isset($_POST['SignIn'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE email = '$email' OR phone = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) == 1){
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['blood_group'] = $row['blood_group'];
		echo "<script>alert('successfully signin')</script>";
		var_dump($_SESSION);
		echo "<script>window.open('user/index.php','_self')</script>";
		exit();
	}
	else{
		echo "<script>alert('Email Or Password Is Incorrect')</script>";
	}
}

?>
