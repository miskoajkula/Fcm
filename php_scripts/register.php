<?php 
	if (isset($_POST["Token"])) {
		
		$_uv_Token=$_POST["Token"];
		$conn = mysqli_connect("localhost","root","","fcm") or die("Error connecting");
		$statement=$conn->prepare("INSERT INTO users (Token) VALUES ( ? ) "
              		." ON DUPLICATE KEY UPDATE Token = ?;");
		
		$statement->bind_param('ss', $_uv_Token, $_uv_Token);
		
		if(!$statement->execute())
      			DIE($statement->error);
      			
      		$statement->close();
      		$conn->close();
	}
 ?>
