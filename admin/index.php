<?php
 
//  include "component/header.php"

include '../../component/dbfun.php';

// $class = new event;
// if (isset($_POST['sub'])) {
// 	$email = $_POST['email'];
// 	$pass = $_POST['pwd'];
// 	$data = mysqli_fetch_array($qry);
// 	$id = $data[0];
// 		if (password_verify($pass,$data["password"])) {
// 			$_SESSION["user"]="$email";
// 			$_SESSION["id"]="$id";
// 			echo "<script>window.location.href='/Final-Project/src/admin/src/dashboard/index.php'</script>";
// 		}else{
// 			echo "<script>alert('Wrong password or Username');window.location.href='index.php'</script>";
// 		}
// 	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body id="page-top">
<div class="container-fluid">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card p-4 border-0 shadow-sm mt-5">
                <form action="index.php" method="post">
                    <h1 class="h3 mb-3 fw-normal text-center">Admin</h1>
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <br>
                    <label for="floatingInput">Username</label>
                    <input type="email" name="text" class="form-control" id="floatingInput" placeholder="Username" required>
                    <br>
                    <label for="floatingPassword">Password</label>
                    <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <br><br>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="sub">Login</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<br><br><br>
<?php include "component/footer.php"?>    
</body>
</html>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/23267dcdd3.js" crossorigin="anonymous"></script>