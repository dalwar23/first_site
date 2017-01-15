<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
  	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	//start the session
	session_start();
	
	//if session is not set thenset it
	if (!isset($_SESSION['SESSION'])) require ("session_init.php");
	
	//initialize the password variables
	$ipassword = "" ;
	$password = "" ;
	//initializing the username
	$usr = "anwar";
	//initializing sessions
	$_SESSION['authentication1'] = 0 ;	
	//$_SESSION[$usr]= false;
	
	//receving the post variable
	$icode1 = $_POST['code1'];
	$icode2 = $_POST['code2'];
	$icode3 = $_POST['code3'];
	$icode4 = $_POST['code4'];
	
	//echo $icode1. "/" .$icode2. "/" .$icode3. "/" .$icode4 ;
	if($icode1 && $icode2 && $icode3 && $icode4)
	{
		//joining the codes togather
		$ipassword = $icode1.$icode2.$icode3.$icode4 ;	
	
		//echo $ipassword ;
	
		//seting the ipassword striping the tags and adding the slash
		if(isset($ipassword))
		$password = addslashes(strip_tags($ipassword));
	
		//echo $password ;
		//check the length
		if(strlen($password) < 8)
		{
			{ header("Location:averify.php?flg=brown"); exit; }
		}
		else
		{
			//check for the data base entry
				 $query = "SELECT password FROM users WHERE username = '$usr'";
	 
	 			//echo $query;
	 			 	mysql_pconnect($_SESSION['MYSQL_SERVER1'],$_SESSION['MYSQL_LOGIN1'],$_SESSION['MYSQL_PASS1'])
                   			or die("Unable to connect to SQL server");
  	  				mysql_select_db($_SESSION['MYSQL_DB1']) or die("Unable to select database");
					$result = mysql_query($query) or die("Invalid query: " . mysql_error());
				
				//echo "connected";
				
				//matching the password of the DB with the given one
				if ($row = mysql_fetch_assoc($result)) 
				{
					// echo $row['sPassword'] . "<br>" . md5($passwd);
					//*		if (strcmp($row['sPassword'], md5($passwd)) != 0) 
					if($row['password']!= $password)
					{
						{ header("Location: averify.php?flg=gray"); exit; }
					}
					else
					{	
						//setting the session and moving to the password page.
						$_SESSION['authentication1'] = 1 ;
						header("Location: anwar.php");
						exit;
					}
				}
				else
				{
					{ header("Location: averify.php?flg=darkgray"); exit ;}
				}
		}
	}
	else
	{
		{ header("Location:averify.php?flg=pink"); exit; }
	}
	
?>