
<?php

require_once('database.php');	
        $name = $_POST['name'];
        $name = mysqli_real_escape_string($con, $name);
            
        $msgrd = "Your post is submitted.";
        
        $title = $_POST['title'];
        $title = mysqli_real_escape_string($con, $title);

        $note = $_POST['note'];
        $note = mysqli_real_escape_string($con, $note);


        $sql = "Insert into post_it (name, title, note) VALUES ('$name', '$title', '$note' ) ";
        if ($con->query($sql) === TRUE) {
        echo '<script type="text/js">';
        echo  'window.location.href=window.location.href';
        echo '</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
	
?>