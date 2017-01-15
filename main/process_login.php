<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
  	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();
	
	//$_SESSION['base_url']="http://localhost/test/";
	if (!isset($_SESSION['SESSION'])) require ("session_init.php");
	
	// reset session variables...
	$_SESSION['USERID'] = "";
	$_SESSION['LOGGEDIN'] = false;
	
	// initialize variables...
	$password = "";
	$ipassword=$_POST['lpassword'];
	
	// make sure post parameters were sent...
	//if (isset($HTTP_POST_VARS["lpassword"])) 
	if(isset($ipassword))
	//$password = addslashes($HTTP_POST_VARS["ipassword"]);
	$password = addslashes($ipassword);
	//echo $password;
	// form variables must have something in them...
	if ($password == "" ) { header("Location:index.php?flg=yellow"); exit; }
	
	//check the length
	//if(strlen($password) < 32)
	//{header("Location:login.php?flg=black");}
	// check in database...
	 $query = "SELECT password FROM users WHERE username = 'master'";
	 
	 //echo $query;
	  mysql_pconnect($_SESSION['MYSQL_SERVER1'],$_SESSION['MYSQL_LOGIN1'],$_SESSION['MYSQL_PASS1'])
                   or die("Unable to connect to SQL server");
  	  mysql_select_db($_SESSION['MYSQL_DB1']) or die("Unable to select database");
		$result = mysql_query($query) or die("Invalid query: " . mysql_error());
		
		// if userid is not present in DB go back to login page...
	//*	if (mysql_affected_rows() != 1) { header("Location: ../login_system.php?flg=red&userid=".$userid);; exit; }
		
		// check for password, active state, user type, and then send to appropriate section...
		if ($row = mysql_fetch_assoc($result)) {
			// echo $row['sPassword'] . "<br>" . md5($passwd);
	//*		if (strcmp($row['sPassword'], md5($passwd)) != 0) 
			if($row['password']!= $password)
			{ header("Location: index.php?flg=red"); exit; }
				
			// set standard session variables...
			$_SESSION['LOGGEDIN'] = true;
			
			header("Location: home.php");
			exit;

		} else {
			header("Location:index.php?flg=red"); 
			exit;
		}		

?>