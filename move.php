<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $files=$_FILES['bus_image'];//forimage
 
 
    //for photo
    $filename =$files['name'];
    $fileerror =$files['error'];
    $filetmp =$files['tmp_name'];

    //divide string into small components
    $fileext = explode('.',$filename); //fileext-->file extension
    $filecheck = strtolower(end($fileext));

    //format in which the picture should be
    $fileextstored = array('png','jpg','jpeg');
    
    //if the picture is in correct format 
    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'uploads/vehicles/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
    }
}

?>

<html>
    <head>

    </head>
    <body>
    <form action="" method="POST" enctype="multipart/form-data">

        <label for="photo">Attach your photo</label>
        <input type="file" name="bus_image" id="photo">
        <input type="submit" value="Upload">

    </form>
    </body>
</html>