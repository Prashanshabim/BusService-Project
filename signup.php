<!--Student/employee/driver Registration modal-->
            <!-- Modal-->
		    <!--Student/employee/driver Registration modal-->
			<!--db connection-->
            <!-- Modal -->
            <div class="modal fade" id="registrationform" tabindex="-1" role="dialog" aria-labelledby="registrationformLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registrationformLabel">Register Here</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
						<form name="myform" action="" method="POST">
                            <div class="form-group">
								<i class="fas fa-user"></i><label for="username" class="pl-2 font-weight-bold">Name</label>
								<input type="text" class="form-control" placeholder="Name" name="username" id="username" required="">
                            </div>
							<div class="form-group">
								<i class="fas fa-envelope"></i><label for="email" class="pl-2 font-weight-bold">Email</label>
								<input type="email" class="form-control" placeholder="Email" name="email" id="email" required="">
                            </div>
                            <div class="form-group">
                               <i class="fas fa-key"></i><label for="password" class="pl-2 font-weight-bold">New Password</label>
							   <input type="password"  placeholder="Password" name="password" id="password" required="" class="form-control">
                               <span class="eye" onclick="myFunction()">
                                    <i id="hide1" class="fa-solid fa-eye"></i>
                                    <i id="hide2" class="fa-solid fa-eye-slash"></i>
                               </span>
							</div>
							<div class="form-group">
                               <i class="fas fa-key"></i><label for="repassword" class="pl-2 font-weight-bold">Confirm Password</label>
							   <input type="password" class="form-control" placeholder="Confirm Password" name="repassword" id="repassword" required="">
                                <span class="eye1" onclick="reFunction()">
                                    <i id="hide3" class="fa-solid fa-eye mx-3"></i>
                                    <i id="hide4" class="fa-solid fa-eye-slash"></i>
                               </span>
                               
							</div>
                            <div class="form-group">
                            <i class="fa-solid fa-phone"></i><label for="phonenum" class="pl-2 font-weight-bold">Phone Number</label>
							   <input type="number" class="form-control" maxlength = 10 placeholder="Enter Number" name="phonenum" id="phonenum" required="">
							</div>
							<div class="form-group">
							<i class="fa-solid fa-user-secret"></i><label for="usertype" class="pl-2 font-weight-bold">User</label>
                            </div>
							<div>
							<select class="form-select" name="usertype" id="usertype"  aria-label="multiple select">
                               <!-- <option value="user">User</option>-->
                                <option disabled selected>Select usertype</option>
                                <option value="1">Student</option>
                                <option value="2">Employee</option>
                                <option value="3">Driver</option>
                            </select>
                            </div>
                    
							<br>
								<button type="submit" name="signupbtn" class="btn btn-primary" id="personSignup">Sign up</button>
								<button type="reset" class="btn btn-primary">Reset</button>
						    
                            <br>

                            <p>
                            
                            <p>
                                <a href="" class="btn btn-block btn-gmail" style="background-color:red; color:white;">
                                    <i class="fa-brands fa-google" style="color:white;"></i>  Register via Gmail</a>
                                <a href="" class="btn btn-block btn-facebook" style="background-color:green;color:white;">
                                    <i class="fa-brands fa-facebook" style="color:white;"></i>  Register via Facebook</a>
                            </p>
                        
                            </form>
                        </div>
                        <div class="modal-footer">
						    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        
			

			<!--End of registration modal-->
			
            <!--registration db include-->
            <?php
            include('database/db_signup.php');
            ?>
            <!--registration db include end-->

            <script>
                /*for password*/
                function myFunction(){
                    var x = document.getElementById("password");
                    var y = document.getElementById("hide1");
                    var z = document.getElementById("hide2");

                    if(x.type === 'password'){
                        x.type = "text";
                        y.style.display = "block";
                        z.style.display = "none";
                    }
                    else{
                        x.type = "password";
                        y.style.display = "none";
                        z.style.display = "block";
                    }

                    }

                    /*for repassword*/
                function reFunction(){
                    var a = document.getElementById("repassword");
                    var b = document.getElementById("hide3");
                    var c = document.getElementById("hide4");

                    if(a.type === 'password'){
                        a.type = "text";
                        b.style.display = "block";
                        c.style.display = "none";
                    }
                    else{
                        a.type = "password";
                        b.style.display = "none";
                        c.style.display = "block";
                    }

                    }
            </script>
          
           