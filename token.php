<?php
$token = 2345;
$row['r_id'] = 1;
$message = "email has been sent. please check your email Please <a href='//localhost/project/validate.php?token=".$token."&u_id=".$row['r_id']."'>click here</a>";

echo $message;