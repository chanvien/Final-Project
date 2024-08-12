<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1eeb591e79.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div style="margin-left: 75%;font-size:20px;">
			<a href="https://maps.app.goo.gl/NNuatMps4J5WhQn38" style="text-decoration: none;"><i class="fa-solid fa-location-dot"></i> Location</a>
		</div>
		<div class="menulink">
			<a href="dashboard.php"><img class="img" src="https://media.licdn.com/dms/image/C5116AQGUAera167B6A/profile-displaybackgroundimage-shrink_200_800/0/1540375745609?e=2147483647&v=beta&t=yx646ZdgCiYjcoSb44JLvdxC2ya7GYn-hZGeKL8A4GQ" alt=""></a>
			<a href="#">Category</a>	
			<a href="#">Product List</a>
			<a href="#">Contact Us</a>
		</div>
	</header>
	<br><br>
	<div class="w3-content w3-section" style="max-width:500px;margin-left: 6%;">
		<img class="mySlides" src="fp/大船/387030793_10220239429290816_125265003866104975_n.jpg" style="width:1300px;height:550px;">
		<img class="mySlides" src="fp/大船/387828897_10220239428490796_4252796094018347937_n.jpg" style="width:1300px;height:550px;">
		<img class="mySlides" src="fp/大船/387120463_10220239428890806_7036265817091873135_n.jpg" style="width:1300px;height:550px;">
	</div>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <div class="line">
    <button class="line_category">Category</button>
    <button class="line_contact">Contact Us</button>
    <button class="line_product">Product List</button>
    <button class="line_product">Product List</button>
  </div>
</body>
</html>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500); // Change image every 2 seconds
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>