<!--start include header-->
<?php
include('mainInclude/header.php');
?>
<!--End include footer-->

		    <!--Start Video Background -->
		    <?php
		        include('video.php');
		    ?>
		    <!--End Video Background -->

		    <!--Start Text Banner -->
		    
	       
		   <div class="container-fluid bg-danger txt-banner" >
			    <div class="row bottom-banner mx-auto text-center" >
			        <div class="col-sm">
				        <h5><i class="fa-solid fa-bus-simple"></i> Well-maintained Vehicles</h5>
                    </div>
                    <div class="col-sm">
				        <h5><i class="fas fa-users mr-3"></i> Experienced Drivers</h5>
			        </div>
			        <div class="col-sm">
				        <h5><i class="fas fa-keyboard mr-3"></i> Easy Access</h5>
                    </div>
		            <div class="col-sm">
			            <h5><i class="fa-solid fa-phone-volume mr-3"></i> Call on Delay</h5>
                    </div>
                </div>
            </div>
			<!-- End Text Banner -->

		    <!--Start Packages card-->
			<?php
			   include('package.php');
			?>
		
		    <!--End ofpackages Card -->

		    <!--start feedback-->
			<?php
	            include('feedback.php');
			?>

		    <!--End feedback -->

			 <!--For image-->
			 <?php
		        include('image.php');
		    ?>
		    <!--End of image-->  
            
            <!--For Testimonial-->
		    <?php
		     //   include('testimonial.php');
		    ?>
		    <!--Endof Testimonial-->  

			<!--for map-->
			<?php
			include('map.php');
			?>
			<!--End of map-->

            <!--Start Social Media follow -->
			<br>
			<br>
            <div class="container-fluid bg-danger" style="color: #fff;padding: 10px;font-size:5px;">
	            <div class= "row text-white mx-auto text-center p-1">
		            <div class="col-sm">
			            <a class="text-white social hover" href="#" >
			            <h5><i class="fab fa-facebook-f"></i>  Facebook</a></h5>
		            </div>
		            <div class="col-sm">
			            <a class="text-white social hover" href="#" >
			            <h5><i class="fab fa-twitter"></i>  Twitter</a></h5>
		            </div>
		            <div class="col-sm">
			            <a class="text-white social-hover" href="#" >
			            <h5> <i class="fab fa-whatsapp"></i>  Whatsapp </a></h5>
		            </div>
		            <div class="col-sm">
			            <a class="text-white social-hover" href="#" >
			            <h5><i class="fab fa-instagram"></i>  Instagram </a></h5>
		            </div>
	                <!--</div>-->
                </div>
            </div>
               <!--End social Follow-->
				
			   <!--Start About Section -->
			    <?php
			    include('about.php');
			    ?>
				<!--End about section -->

				<!--start including footer -->
                
				<?php
				    include('mainInclude/footer.php');
				?>
                
				<!--End including Footer -->
