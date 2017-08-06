<?php
//$user = 'polinatsoneva_com';
//$password = 'c2Cm9CtK';
//$db = 'polinatsoneva_com';
//$host = 'polinatsoneva.com.mysql';
//$port = 3306;

//$link = mysqli_connect("$host:$port", $user, $password, $db);
//if($link===false){ /*(!link) */
//    die("errrrrrrr" . mysqli_error());
    
//} else {
   // echo "connected" . $db;
//}

const HOSTNAME  = 'polinatsoneva.com.mysql'; // server
const MYSQLUSER = 'polinatsoneva_com'; // database user
const MYSQLPASS = 'c2Cm9CtK'; // database password
const MYSQLDB   = 'polinatsoneva_com'; // database name
// Create database connection object
$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
// fail on error
if ($con->connect_error){
	die('Error: '.$con->connect_error.' ('.$con->connect_errno.')');
        }
    else {
   // echo "connected" . $db;
        }
// set charset utf8 to match coallation in db
$con->set_charset('utf8');

?>