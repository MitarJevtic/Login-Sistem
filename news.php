 
 
 <!DOCTYPE html>

<html>
 <head>
	   <meta charset="UTF-8">
	    <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body> 
  
  <title>Najnovije vesti:</title>
  
  
  
 
  
  <?php	 
  
 
            
             
		   $conn = mysqli_connect("localhost","root","","dblogin");
		   $query = mysqli_query ($conn,"SELECT news_id,news_title,news_full_content FROM dblogin.news ORDER BY news_id DESC");
		   
		  
		    while($rw=mysqli_fetch_assoc($query)){
			   
		       echo  '<h1>',$rw ['news_title'], '</h1>';
                echo'<p>', $rw['news_full_content'], '</p>';
			   echo "<br>";
			  
			   };
	

	?>

		   
		   
		   
		   <a href="comments.php">Add a comment</a>
		   
	   
  
  </body>
  
 </html>