@extends('layouts.master')

@section('title', 'Welcome To Swap Product World')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
      background-color: rgb(48, 48, 48);
  }
  .carousel-control-prev-icon,
.carousel-control-next-icon {
  /* turn off bootstrap default svg chevrons */
  background-image: none;

  /* override bootstraps fixed size */
  width: auto;
  height: auto;

  /* set the size and color of the FontAwesome chevrons */
  font-size: 1.5rem;
  color: $carousel-control-color;

  /* extend FontAwesome */
  @extend .fa;
}
.carousel-control-prev-icon,
.carousel-control-next-icon,
.carousel-caption {
  /* add a text shadow to the chevrons and caption (inner text) to make them visible on white backgrounds */
  text-shadow: 0 0 0.8rem black;
}
.carousel-control-prev-icon {
  /* extend FontAwesome left chevron*/
  @extend .fa-chevron-left;
}
.carousel-control-next-icon {
  /* extend FontAwesome right chevron*/
  @extend .fa-chevron-right;
}
.carousel-indicators li {
  /* add a box shadow to the indicators to make them visible on white backgrounds */
  box-shadow: 0 1px 0.4rem rgba(1, 1, 1, 0.5);
}
  
  </style>
@section('content')
    		<div class="content">
				<div class="main">
				<table>
					<br>
						<tr>
							<td>
								<table>
									<!-- <tr style="border-radius: 100px;">
										<td align="left">
											<div class="slideshow-container">
												<div class="mySlides fade">
						  							<div class="numbertext">1 / 2</div>
						 					 			<img src="/assets/images/imageThree_400x400.jpg" alt="image_one" height="400" width="400">
						  							<div class="text">Swap Hand to Hand</div>
												</div>

												<div class="mySlides fade">
						  							<div class="numbertext">2 / 2</div>
						  								<img src="/assets/images/imageTwo_400x400.jpg" alt="image_two" height="400" width="400">
						  							<div class="text">Swap Product</div>
												</div>

												<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
												<a class="next" onclick="plusSlides(1)">&#10095;</a>

											</div>

											<br>
										</td>
									</tr>
									<tr>
										<td>
											<div style="text-align:center">
					  								<span class="dot" onclick="currentSlide(1)"></span> 
					  								<span class="dot" onclick="currentSlide(2)"></span> 
											</div>
										</td>
									</tr> -->


									<div id="demo" class="carousel slide" data-ride="carousel">

									  <!-- Indicators -->
									  <ul class="carousel-indicators">
									    <li data-target="#demo" data-slide-to="0" class="active"></li>
									    <li data-target="#demo" data-slide-to="1"></li>
									    <li data-target="#demo" data-slide-to="2"></li>
									  </ul>
									  
									  <!-- The slideshow -->
									  <div class="carousel-inner">
									    <div class="carousel-item active">
									      <img src="/assets/images/sp_800x400.png" alt="image_three" width="1100" height="500">
									    </div>
									    <div class="carousel-item">
									      <img src="/assets/images/imageOne_800x400.jpg" alt="Image_two" width="1100" height="500">
									    </div>
									    <div class="carousel-item">
									      <img src="/assets/images/imageThree_800x400.jpg" alt="image_four" width="1100" height="500">
									    </div>
									  </div>
									  
									  <!-- Left and right controls -->
									  <a class="carousel-control-prev" href="#demo" data-slide="prev">
									    <span class="carousel-control-prev-icon"></span>
									  </a>
									  <a class="carousel-control-next" href="#demo" data-slide="next">
									    <span class="carousel-control-next-icon"></span>
									  </a>
									</div>
								</table>
							</td>
							<td colspan="2">
								<table>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Dhaka'])}}">Dhaka</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Chattogram'])}}">Chattogram</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Khulna'])}}">Khulna</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Jessore'])}}">Jessore</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Barishal'])}}">Barishal</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Rajshahi'])}}">Rajshahi</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Sylhet'])}}">Sylhet</a></td></tr>
									<tr><td><a href="{{route('Ad.searchByLocation',['location_name'=>'Rangpur'])}}">Rangpur</a></td></tr>
								</table>
							</td>
						</tr>
				</table>
				
					<table>
						<tr>
							<td>
								<tr><img src="{{URL::to('/assets/images/mobile.png')}}" height="100" width="100"></tr>
								<tr><a href="{{route('Ad.searchByCategory',['category_name'=>'electronics'])}}"> Electronics</a></tr>
								<tr><p>Find great deals for your electronics.
								You can easily swap your product
								with others products.</p></tr>
							</td>
						</tr>

						<tr>
							<td>
								<tr><img src="{{URL::to('/assets/images/books.jpg')}}" height="100" width="100"></tr>
								<tr><a href="{{route('Ad.searchByCategory',['category_name'=>'books'])}}"> Books</a></tr>
								<tr><p>Find great deals for your books.
								You can easily swap your product
								with others products.</p></tr>
							</td>
						</tr>
						<tr>
							<td>
								<tr><img src="{{URL::to('/assets/images/car.png')}}" height="100" width="100"></tr>
								<tr><a href="{{route('Ad.searchByCategory',['category_name'=>'vehicles'])}}"> Cars</a></tr>
								<tr><p>Find great deals for your cars.
								You can easily swap your product
								with others products.</p></tr>
							</td>
						</tr>
						<tr>
							<td>
								<tr><img src="{{URL::to('/assets/images/furniture.png')}}" height="100" width="100"></tr>
								<tr><a href="{{route('Ad.searchByCategory',['category_name'=>'furniture'])}}"> Furniture</a></tr>
								<tr><p>Find great deals for your furnitures.
								you can easily swap your product
								with others products.</p></tr>
							</td>
						</tr>
						<!-- <tr>
							<td>
								<tr><img src="{{URL::to('/assets/images/property.jpg')}}" height="100" width="100"></tr>
								<tr><a href="{{route('Ad.searchByCategory',['category_name'=>'property'])}}"> Property</a></tr>
								<tr><p>Find great deals for your properties.
								You can easily swap your product
								with others products.</p></tr>
							</td>
						</tr> -->
					</table>
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
	  		 		// alert(dots.length);
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
				</div>
			</div>

@stop


@section('footer')
    @parent
@stop
