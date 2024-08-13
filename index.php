<?php

include 'component/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	
  <!-- <div style="margin-left: 75%;font-size:20px;">
			<a href="https://maps.app.goo.gl/NNuatMps4J5WhQn38" style="text-decoration: none;"><i class="fa-solid fa-location-dot"></i> Location</a>
		</div> -->
</head>

<body>
	<br><br>
  <div class="container fluid">
    <div id="carouselExampleCaptions" class="carousel slide" style="height: 500px;" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="fp/大船/387030793_10220239429290816_125265003866104975_n.jpg" style="height: 500px;" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="fp/大船/387030793_10220239429290816_125265003866104975_n.jpg" style="height: 500px;" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="fp/大船/387120463_10220239428890806_7036265817091873135_n.jpg" style="height: 500px;" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <br><br>
    <div class="container my-4">
        <div class="row g-3 text-center">
            <div class="col-12 col-md-6 col-lg-3">
                <button class="btn btn-secondary w-100" style="background-color: #EF9C9C; padding: 20px;">About Us</button>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <button class="btn btn-secondary w-100" style="background-color: #88B9E6; padding: 20px;">Category</button>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <button class="btn btn-secondary w-100" style="background-color: #8DDF8C; padding: 20px;">Contact Us</button>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <button class="btn btn-secondary w-100" style="background-color: #E6DA70; padding: 20px;">Product List</button>
            </div>
        </div>
    </div>
  </div>

</body>
</html>