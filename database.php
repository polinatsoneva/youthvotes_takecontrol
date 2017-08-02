<?php
$user = 'polinatsoneva_com';
$password = 'c2Cm9CtK';
$db = 'polinatsoneva_com';
$host = 'polinatsoneva.com.mysql';
$port = 3306;

$link = mysqli_connect("$host:$port", $user, $password, $db);
if($link===false){ /*(!link) */
    die("errrrrrrr" . mysqli_error());
    
} else {
   // echo "connected" . $db;
}

//$db_selected = mysqli_select_db(
//   $db, 
//   $link
//);





//echo 'working connected to';

?>