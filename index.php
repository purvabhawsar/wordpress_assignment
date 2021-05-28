<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1 class="text-center">Custum theme</h1>
		
	<div id="div1">
		<h5 class="menu"><ul>
			<li ><a href="#" class="btn btn-danger btn-sm" role="button">Login</a></li>


			<li><a href="#"  class="btn btn-light btn-sm text-primary" role="button">About Us</a></li>

			<li ><a href="#"  class="btn btn-light btn-sm text-success active" role="button"> Subscribe</a></li>
		</ul></h5>


	</div>
	<div class="sl1">
		<img class="mySlides" src="http://localhost/wordpress/wordpress/wp-content/uploads/2021/05/a6-1.jpg">
		<div class="carousel-caption">
			<h3 class="slidetext"><kbd>Fresh | Positive | Nature</kbd></h3>
			</div>
			
		               

		<img class="mySlides" src="http://localhost/wordpress/wordpress/wp-content/uploads/2021/05/a11.jpg">


		<img class="mySlides" src="http://localhost/wordpress/wordpress/wp-content/uploads/2021/05/a14.jpg ">


	</div>

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
			setTimeout(carousel, 3000); 
		}
	</script>


	<div class="content">
		<center><h3 class=" text-light p-5">About Agriculture</h3></center>
		<h2 class="f">there are no posts to loop over. The other function, the_post() does not return anything.
			It’s job is to get WordPress ready to output posts.<br> Specifically, it retrieves the next post, 
			sets up the post, sets the in_the_loop property to true. So far, our page will still not output
			any information about our blog posts, but we can update that now
			there are no posts to loop over.<br> The other function, the_post() does not return anything.
			It’s job is to get WordPress ready to output posts. Specifically, it retrieves the next post, 
			sets up the post, sets the in_the_loop property to true.
			So far, <br>our page will still not output any information about our blog posts, but we can update that now</h2>
		</div>
		
	
		<div class="footer">
			<div class="footdiv"><h1 class="lh ">Our Story</h1>
				<h5 class="lc">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
					graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen 
					book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or 
					
					, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.
					The passage is attributed to 


				</h5>
				<center><button class="button btn-danger m-3 ">About Us</button></center>
				</div>

			</div>
			</div>
	
		
	</body>
	</html>