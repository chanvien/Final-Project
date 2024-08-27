<?php
include '../../component/dbfun.php';

$class = new event;
// register funtion
if (isset($_POST['sub'])) {
	$user = $_POST['user'];
	$pass = $_POST['pwd'];
	$cpwd = $_POST['cpwd'];
	$ema = $_POST['email'];
	$qry0 = $class->check($user);
	$qry2 = $class->checkema($ema);
	if ($qry2 == 1) {
		echo "<script>alert('this email has been used');window.location.href='index.php'</script>";
	}elseif ($cpwd != $pass) {
		echo "<script>alert('Comfirm password not match')</script>";
	}elseif ($qry0 == 1) {
		echo "<script>alert('This Username has been used by other')</script>";
	}elseif ($qry0 == 0) {
		$qry  = $class->reg($user,$pass,$ema);
		if ($qry == 1) {
			echo "<script>alert('Successfully Register');window.location.href='../login/index.php'</script>";
		}else{
			echo "<script>alert('Register Error')</script>";
		}
	}		
}

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
	  <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1eeb591e79.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<?php include '../../component/header.php';?>
<body>
<div class="content">

<main>

<div class="container text-center">
		<br><br>
		<div class="card p-5" style="margin:auto;width: 30%;border: none;">
		  <form action="index.php" method="post">
		    
		    <h1 class="h3 mb-3 fw-normal">Register</h1>

		    <div class="form-floating">
		      <input type="input" name="user" class="form-control" id="floatingInput" placeholder="name@example.com" require>
		      <label for="floatingInput">Username</label>
		    </div>
        <div class="form-floating">
		      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" require>
		      <label for="floatingInput">Email</label>
		    </div>
		    <div class="form-floating">
		      <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password" require>
		      <label for="floatingPassword">Password</label>
		    </div>
        <div class="form-floating">
		      <input type="password" name="cpwd" class="form-control" id="floatingPassword" placeholder="Password" require>
		      <label for="floatingPassword">Confirm Password</label>
		    </div>

		    <div class="checkbox mb-3">
<!-- 		      <label>
		        <input type="checkbox" value="remember-me"> Remember me
		      </label> -->
		    </div>
		    <button class="w-100 btn btn-lg btn-primary" type="submit" name="sub">Register</button><br><br>
		    <p>Already have an account ? Click <a href="/Final-Project/src/login" style="color:blue;text-decoration: underline;">Here</a> to Login</p>
		  </form>			
		</div>
	</div>
</main>

</div>
<br><br>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>
</html>
<?php include '../../component/footer.php'; ?>