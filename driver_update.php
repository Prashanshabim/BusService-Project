<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
/**{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}*/
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: #1e3c72;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #1e3c72;  /* fallback for old browsers */
    border-color: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
    border-color: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
 form .shift-details .shift-title{
  font-size: 16px;
  /*font-weight: 500;*/
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
    background: #1e3c72;
    border-color: #1e3c72;  /* fallback for old browsers */
    border-color: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
    border-color: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0;
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: #1e3c72;  /* fallback for old browsers */
   background: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
   background: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



   /*background: blue; 
   linear-gradient(135deg, #71b7e6, #9b59b6);*/
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: #1e3c72;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

     </style>
   </head>
<body>
  <div class="container">
    <div class="title">BusUpdate</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Driver Name</span>
            <input type="text" name="drivername" placeholder="Enter driver name" required>
          </div>
          <div class="input-box">
            <span class="details">Bus Number</span>
            <input type="text" name="busno" placeholder="Enter bus number plate" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date"name="udate" placeholder="" required>
          </div>

          <div class="input-box">
            <span class="details">Route</span>
            <input type="text" name="Route" placeholder="Enter Route" required>
          </div>
          

          <!--
          <div class="input-box">
            <span class="details">Route</span>
            <br>
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
          -->
         
          <div class="input-box">
            <span class="details">Kilometer Update</span>
            <input type="text"name="kmupdate" placeholder="Enter km travelled" required>
          </div>
          <div class="input-box">
            <span class="details">Fuel Update</span>
            <input type="text" name="fuelupdate" placeholder="Enter Fuel consumed" required>
          </div>
        </div>
        <div class="shift-details">
          <input type="radio" name="shift" value="Morning" id="dot-1">
          <input type="radio" name="shift" value="Day"id="dot-2">
          <input type="radio" name="shift" value="Whole Day" id="dot-3">
          <span class="shift-title">Shift</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one" required></span>
            <span class="shift">Morning</span>
          </label>
          <label for="dot-2">
            <span class="dot two" required></span>
            <span class="shift">Day</span>
          </label>
          <label for="dot-3">
            <span class="dot three" checked="checked"></span>
            <span class="shift">Whole Day</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submitbtn" value="Update">
        </div>
      </form>
    </div>
  </div>
  <!--including driverupdate database-->
<?php
include('database/db_driverupdate.php');
?>
</body>
</html>
