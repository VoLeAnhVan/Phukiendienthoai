<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
	<header class="sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu">
					<img src="uploads/logo.png">
				</div>
				<div class="col-2">
					
				</div>
				<div class="col-8 menu">
					<ul>
						<li><a href="">Trang chủ</a></li>
						<li><a href="">Sản phẩm</a>
							<ul class="menu_child">
								<li><a href="">Đồ gia dụng</a></li>
								<li><a href="">Đồ điện tử</a></li>
								<li><a href="">Đồ trang sức</a></li>
							</ul>
						</li>
						<li><a href="">Liên hệ</a></li>
						<li><a href="">Hướng dẫn</a></li>
					</ul>
					
				</div>
				
			</div>
		</div>
		<div><a href="form.php" class="admin" ><i class="fa-solid fa-user"></i></a></div>


	</header>
	<div class="container slider-margin">
		<div class="row">
			<div class="col-12">
					<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">
				1/3
			</div>
			<img src="uploads/logo1.png" style="width: 100%;">
			<div class="text">Caption</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">
				2/3
			</div>
			<img src="uploads/logo2.png" style="width: 100%;">
			<div class="text">Caption</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">
				3/3
			</div>
			<img src="uploads/logo3.png" style="width: 100%;">
			<div class="text">Caption</div>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<div style="text-align: center;">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot"onclick="currentSlide(3)"></span>
	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 title">
				<h3>Product</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/ip13pro.jpg">
					</div>
					<div class="name">
						<p>SAMSUNG GALAXY</p>
					</div>
					<div class="price">
						<p>23.000.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/ipxs.jpg">
					</div>
					<div class="name">
						<p>IPHONE 7</p>
					</div>
					<div class="price">
						<p>4.190.000  VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/ip14.jpg">
					</div>
					<div class="name">
						<p>IPHONE 8</p>
					</div>
					<div class="price">
						<p>20.000.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/ip13.jpg">
					</div>
					<div class="name">
						<p>IPHONE 13</p>
					</div>
					<div class="price">
						<p>26.000.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/ip7pl.png">
					</div>
					<div class="name">
						<p>IPHONEXS</p>
					</div>
					<div class="price">
						<p>8.590.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/12333.png">
					</div>
					<div class="name">
						<p>SAMSUNG GALAXY</p>
					</div>
					<div class="price">
						<p>23.090.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/smglnote.png">
					</div>
					<div class="name">
						<p>SAMSUNG GALAXY NOTE10</p>
					</div>
					<div class="price">
						<p>8.700.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/sm21s.png">
					</div>
					<div class="name">
						<p>SAMSUNG GALAXY A32</p>
					</div>
					<div class="price">
						<p>26,990,000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/sm21s.png">
					</div>
					<div class="name">
						<p>SM GLAYXY 21S</p>
					</div>
					<div class="price">
						<p>23.000.000 VNĐ</p>
					</div>
				</div>
			</div>
						<div class="col-2th">
				<div class="card">
					<div class="image">
						<img src="uploads/smglz.png">
					</div>
					<div class="name">
						<p>SAMSUNG GALAXYZ</p>
					</div>
					<div class="price">
						<p>4.474.350 VNĐ</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row footer">
				<div class="col-3">
					<h3>TITLE</h3>
					<ul class="menu_footer">
						<li><a href="">SANSUNG</a></li>
						
					</ul>
				</div>
				<div class="col-3">
					<h3>TITLE</h3>
					<ul class="menu_footer">
						<li><a href="">IPHONE</a></li>
						
					</ul>
				</div>
				<div class="col-3">
					<h3>TITLE</h3>
					<ul class="menu_footer">
						<li><a href="">MACBOOK</a></li>
						
					</ul>
				</div>
				
			</div>
		</div>
		 <div class="row"> 
			<div class="col-12 copy_right">
				<a href="">Design rights By 211ctt011_van@pyu.edu.vn</a>
			</div>
		</div> 
	</footer>
</body>
<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += "active";
		  setTimeout(showSlides, 1000);
		}
</script>
</html>