
<?php 
// this code is for redirecting to different pages if the credentials are correct.
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   
         //admin
      	if ($_SESSION['username'] == 'ali'){
			header("Location: pages/kaatje/home.html");
      	 }
		 //teacher
		 else if ($_SESSION['username'] == 'muema'){ 
			header("Location: https://www.telenet.be");
      	} 
		//student
		  else if ($_SESSION['username'] == 'ian'){ 
			header("Location: https://www.hln.be");	
		}
		//parent
		else if ($_SESSION['username'] == 'sera'){ 
			header("Location: https://www.destandaard.be");
		}
 }
else{
	header("Location:login-index.php");
} ?>
