<?php
	if($_POST['submit'])
		{ 
			if (empty($_POST['author']))
				die('Enter author.'); 
			else if (empty($_POST['news_title']))
				die('Enter news_title.'); 
			else if (empty($_POST['comment']))
				die('Enter comment.');
			$postedby = $_POST['author']; 
			$subject = $_POST['news_title']; 
			$comment = $_POST['comment']; 

			$conn = mysqli_connect("localhost","root","","dblogin");	
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$q = "INSERT INTO dblogin.coments (coment_id, author, news_title, coment_text) VALUES (DEFAULT, '$postedby', '$subject','$comment')";

			if ($conn->query($q) === TRUE) {
				header("Location: comments.php");
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
			$conn->close();
		} 
?>