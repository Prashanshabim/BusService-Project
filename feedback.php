
			   <!--start feedback-->

               <div class="container mt-4" id="feedback">  <!-- start feedback container -->
                <h2 class="text-center mb-4" style="text-decoration: underline;">Feedback</h2> <!--feedback heading -->
                <div class="row">  <!--start feedback Row-->		
                   <div class="col-md-8"> <!--start feedback 1st column--> 
                       <form name="contact us" action="" method="POST">
                            <input type="text" class="form-control" name="name" placeholder="Name" >
                               <br>
                               <br>
                            <input type="email" class="form-control" name="email" placeholder=".........@gmail.com">
                               <br>
                               <br>
                            <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;">
                            </textarea>
                               <br>
                               <br>
                            <input class="btn btn-primary" type="submit" value="send" name="submit"> 
                               <br>
                               <br>
                       </form>
                   </div> <!--End feedback 1st column-->
                   <?php
                   include('database/db_feedback.php');
                   ?>
    
                 <div class="col-md-4 stripe text-white text-center"> 
              
                   <!--Start Contacy us 2nd column-->
                   <h4 style="text-decoration: underline;">BusService</h4>
                   <p>Shikshadeep H.S. School,Near traffic-Chowk,<br>
                    Main Road, Biratnagar-14<br>
                    Phone: 9805334446/9805334447<br>
                    info@shikshadeep.edu.np</p>
                    </div> <!--End contact us 2nd column-->
                 </div>  <!--End contact us Row -->
              <div> <!--End Contact us container -->	
    
              <!--End Contact Us -->