<?php define('DB_HOST', 'localhost'); 
      define('DB_NAME', 'users'); 
      define('DB_USER','root'); 
      define('DB_PASSWORD',''); 
	  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	  $db=mysql_select_db(users,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	  /* $ID = $_POST['user'];
	  $Password = $_POST['pass']; */ 
	  function SignIn() 
	       { session_start(); 
	  
	  { $query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
	  $row = mysql_fetch_array($query) or die(mysql_error());
	  if(!empty($row['userName']) AND !empty($row['pass'])) 
	  { $_SESSION['userName'] = $row['pass']; 
      echo "successful login";
      }
  else { echo "SORRY...YOU ENTERD WRONG ID AND PASSWORD,, PLEASE RETRY!"; }               }  
	   if(isset($_POST['submit'])) 
	  
	         { SignIn(); 
	                     } 
	  
?>

