<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title> Regisration Form </title>--> 

    <style>
        /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
/**{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;
}*/
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height:980px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i{
    margin: 0 6px;
}

form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button {
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}
</style>
</head>
<body>
    <div class="container">
        <header> Employee Registration</header>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="fullname" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date"name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobilenum" maxlength=10 placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Occupation</label>
                            <input type="text" name="occupation" placeholder="Enter your occupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Guardain Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="fathername" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="mothername" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Other Family Member Name</label>
                            <input type="text" name="familymembername" placeholder="Enter brother/sister/other name" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="parentnum" placeholder="Enter parents mobile number" required>
                        </div>

                    <div class="Address">
                    <span class="title">Address</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" name="addtype"placeholder="Enter address type permanent or temporary" required>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Enter Nationality" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" placeholder="Enter district" required>
                        </div>

                        <div class="input-field">
                            <label>Municipality</label>
                            <input type="text" name="municipality" placeholder="Enter municipality" required>
                        </div>

                        <div class="input-field">
                            <label>Ward</label>
                            <input type="text" name="ward" placeholder="Enter ward" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Full Recent Address</label>
                            <input type="text" name="recentadd" placeholder="Enter full recent address" required>
                        </div>   
                    </div>
                <div class="BusService">
                    <span class="title">BusService</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Route</label>
                            <select name="route" required>
                                <option disabled selected>Select Route</option>
                                <option value="inside biratnagar(puspalal chowk to college area)">Inside Biratnagar(puspalal chowk to college area)</option>
                                <option value="biratnagar to rangeli">Biratnagar To Rangeli</option>
                                <option value="biratnagar to rani">Biratnagar To Rani</option>
                                <option value="biratnagar to biratchowk">Biratnagar To Biratchowk</option>
                                <option value="biratnagar to ithari">Biratnagar To Ithari</option>
                                <option value="biartnagar to inurwa">Biratnagar To Inurwa</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Shift</label>
                            <select  name ="shift" required>
                                <option disabled selected>Select Shift</option>
                                <option value="morning">Morning</option>
                                <option value="day">Day</option>
                           </select>
                        </div>

                        <div class="input-field">
                            <label>Highway</label>
                            <select  name ="highway" required>
                                <option disabled selected>Select Option</option>
                                <option value="inside highway">Inside Highway</option>
                                <option value="outside highway">Outside Highway</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="Attachments">
                    <span class="title">Attach Here</span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="file">Attach your photo</label>
                            <br>
                            <input type="file" name="file" id="file" required>
                        </div>
                        <button name="submitbtn" id="sweetalert" value="submitbtn" class="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                </div> 
            </div>
        </form>
    </div>

   <?php
   include('database/db_employee_reg.php');
   ?>
</body>
</html>
