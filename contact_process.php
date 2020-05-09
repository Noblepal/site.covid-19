<?php

	$con = mysqli_connect('localhost','root','', 'covid_19');


	if(isset($_POST['sendMessage'])){
		sendMessage($_POST);
	} else {
	}


	function sendMessage($post){
		global $con;
		extract($post);
		$stmt=$con->prepare("INSERT INTO feedback (name, email, subject, message) VALUES (?,?,?,?)");
		$stmt->bind_param("ssss", $name, $email,$subject, $message);

		if ($stmt->execute()) {
			$stmt->store_result();
			if($stmt->affected_rows > 0){
				header('location: index.php?success=1&message=Your message has been received');
			} else {
				header('location: index.php?success=1&message=Failed: ' . $stmt->error);
			}
		} else {
			echo "ERROR: " . $stmt->error;
		}
		
		

	}
