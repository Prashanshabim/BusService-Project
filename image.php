<!DOCTYPE html>
 <html>
 <head>
 	<title>Image Gallery</title>
 	<link rel="stylesheet" href="css/image.css">
 	<link rel="stylesheet" href="js/jquery.flipster.min.css">
 </head>
 <body>
    <h2 style="text-decoration: underline; text-align:center;" id='gallery'>Gallery</h2>
 	<div class="hero">
 		<div class="carousel">
 			<ul>
 				<!--<li><img src="images/bus1.jpg"></li>-->
 				<li><img src="images/bus2.jpg"></li>
 				<li><img src="images/bus3.jpg"></li>
 				<li><img src="images/bus4.jpg"></li>
 				<li><img src="images/bus5.jpg"></li>
 				<li><img src="images/bus6.jpg"></li>
 			</ul>
 		</div>
 	</div>
 


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="js/jquery.flipster.min.js"></script>

 <script>
    $('.carousel').flipster({
    	style:'carousel',
    	spacing: -0.3,

    });
</script>
 
 </body>
 </html>