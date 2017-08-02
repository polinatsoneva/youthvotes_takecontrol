
<?php

require_once('database.php');	
        $name = $_POST['name'];
        $name = mysqli_real_escape_string($link, $name);

        $title = $_POST['title'];
        $title = mysqli_real_escape_string($link, $title);

        $note = $_POST['note'];
        $note = mysqli_real_escape_string($link, $note);


        $sql = "Insert into post_it (name, title, note) VALUES ('$name', '$title', '$note' ) ";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
            exit;
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Response</title>
<link href="style.css" rel="stylesheet">
<style>
	.body {
		background-image: url(riverbg.png);
	}
	.margin {
		margin-top: 20%;
		margin-left:40%;
		
	}
	
	button {
		height: 50px;
		width:200px;
	}
	
	p {
		color: white;
		font-weight:900;
	}
	
	</style>
</head>

<body>

<div class="col-1-3 push-1-3 margin"> 



<button onclick="goBack()">Thanks for your message</button>




</div>

<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>