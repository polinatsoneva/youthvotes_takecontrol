<!doctype html>


<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Twitter Bootstrap Parallax Tutorial</title>
	<meta name="description" content="Twitter Bootstrap Parallax Tutorial with HTML5 / CSS3 / JavaScript">
	<meta name="author" content="Untame.net">
    
    
</head>
<body>
    <h1>CRUD page</h1>
</body>
 <?php
include("database.php");

				
		$title = mysqli_query($link, "Select title from title where id = 1");
		
		$subtitle = mysqli_query($link, "Select comments from title where id = 1");
	
		if($link === false){
			die("ERROR" . mysqli_error());
		} else {
			echo '<table>';
			while($link = mysqli_fetch_array($title)){
			  echo '<tr style=" border: 5px solid blue; padding-Top: 50px;  ">
					<td>
					<font padding="50px" paddingTop="150px" size="4" face="Lucida Sans Unicode" color=black>' .$link['id'].' ' .$link['title'].' ' .$link['comments'].'  
			<form class="DeleteUserHere" action="" method="post" name="deleteuser">
				<input  style="width: 190px; heigth: 50px;" name="deleteuser" type="submit" value="delete" />
			
			</form>

			<form  class="UpdateuserHere" action="" method="post" name="updateUser">
				<input style="width: 190px; heigth: 50px;" class="updateUser" name="updateUser" type="button" value="update"/>
			
			</form>
					</td>
					</tr>';
			}
		echo '</table>';
			
	
		}
    
    ?>
</html>