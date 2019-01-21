 <?php
 $conn = mysqli_connect("localhost","root","","dblogin");
 
 ?>





 <form action = "post_comments.php" method = "POST">
                     
					 <input type='text' name='author' placeholder ='Enter your name'><br><br><br>
					 <input type='text' name='news_title' placeholder ='Enter a news tittle'><br><br><br>
					 
		             <textarea  name ='message' rows='4' cols='50'placeholder ='Your comment'  ></textarea >	
		             <br><button type='submit' name='submit'>Send</button>
				      </form>
					  
		
	