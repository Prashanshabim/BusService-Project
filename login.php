<?php
//    if (!isset($_SESSION['email']) && !isset($_SESSION['sn'])) {   
 //   if (!isset($_SESSION['email'])) {   ?>
<!--start Login Modal-->
		    <!-- Modal -->
            <div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="loginformLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginformLabel">Login Here</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
							<!--Login form starts here-->
						<form name="myloginform" action="" method="POST" id="stuloginForm">
						    <div class="form-group">
								<i class="fas fa-envelope"></i><label for="email" class="pl-2 font-weight-bold">Email</label>
								<input type="email" class="form-control" placeholder="Email" name="email" id="email" >
                            </div>
		 
							<div class="form-group">
                               <i class="fas fa-key"></i><label for="password" class="pl-2 font-weight-bold">Password</label>
							   <input type="password" class="form-control" placeholder="Password" name="password" id="pass" >
                            </div>
							<br>
							    <small class="form-text">New to this website?<a href="#" data-bs-toggle="modal" data-bs-target="#registrationform">Click here</a></small>
                            <div class="modal-footer">
						        <button type="submit" name="loginbtn" class="btn btn-primary" id="loginBtn">Login</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
						</form>
                    </div>
                </div>
            </div>
			<!--login form ends here-->

		    <!--login_db starts here-->
            <?php
             include('database/db_login.php');
            ?>
          