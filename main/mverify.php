<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();

	if (!isset($_SESSION['SESSION'])) require ( "session_init.php");
	//echo $_SESSION['LOGGEDIN'];
	//check the user logged in or not
	if ($_SESSION['LOGGEDIN'] == false) 
	{ header("Location: index.php?flg=black");	exit;}
	//page authentication
	$_SESSION['authentication'] = 0;
	//$_SESSION[$musr]= false;
	//page id and hits
	$page_id = 3; 
	require("hits.php");
	//echo $_SESSION['authentication'];
	//flag to show the error messages
	$flg = "";
	$error = "";
	//if (isset($HTTP_GET_VARS["flg"])) $flg = $HTTP_GET_VARS["flg"];
	$flg=$_GET['flg'];
	switch ($flg) {
		case "pink":
			$error = " Atleast one of the Encryption key feild is blank. Try again.";
			break;
		case "gray":
			$error = "That Encryption combination is not matched.Please Try again.";
			break;
		case "brown":
			$error = "The length of the Encryption code must be 32 bits long." ;
			break;
		case "darkgray":
			$error = "The SQL data base not responding." ;
			break;
		case "orange":
			$error = "You must enter encryption code to enter the Password page." ;
			break;
		case "offwhite":
			$error = "You are signed out from the Password page." ;
			break;
		default:
			$error = "             ";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>pursuit of happyness</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">

	<div id="header">
		<div id="menu">
            <?php include("menu.php"); ?>
		</div>
		<!-- end #menu -->
	</div>
	<!-- end #header -->
	<div id="logo">
		<!-- here goes the table -->
        <br/>
        <h3 align="center" style="font-size:50px; color:white;">are you really here?</h3>
        <br />

   <form action="mverify_process.php" method="post" >
        <table align="center" border="0px" width="50%" cellspacing="25px" cellpadding="10px">
             <th align="center" colspan="2" style=" font:Tahoma, Geneva, sans-serif; font-size:14px; font-weight:bold; color:black;">
                <?php echo $error ?>
            </th>
        	<tr>
            	<td>
                	<table align="center" width="100%" border="0px" >
              			 	<tr>
            					<td>
              							<input type="text" name="code2" maxlength="20" style="width:100%; color:green; font-weight:bold; text-align:center;"  />
                				</td>
                            </tr>
                     </table>
                </td>
                <td>
                	<table align="center" width="100%" border="0px">
              			 	<tr>
            					<td>
              							<input type="text" name="code1" maxlength="20" style="width:100%; color:red; font-weight:bold; text-align:center;"  />
                				</td>
                            </tr>
                     </table>
                </td>
            </tr>
            <tr>
            	<td>
                	<table align="center" width="100%" border="0px">
              			 	<tr>
            					<td>
              							<input type="text" name="code3" maxlength="20" style="width:100%; color:blue; font-weight:bold; text-align:center;"  />
                				</td>
                            </tr>
                     </table>
                </td>
                <td>
                	<table align="center" width="100%" border="0px">
              			 	<tr>
            					<td>
              							<input type="text" name="code4" maxlength="20" style="width:100%; color:black; font-weight:bold; text-align:center;"  />
                				</td>
                            </tr>
                     </table>
                </td>
            </tr>
            <tr>
            	<td align="center" colspan="2">
                	<input type="submit" name="submit" value="Passwords" style="font-size:14px; font-weight:bold; text-transform:uppercase;" />                </td>
            </tr>
        </table>
     </form>
	</div>
 
</div>

<div id="footer">
	<p><a href="home.php">Home</a> || <a href="about.php">About Author</a> || <a href="privacy_policy.php">Privacy policy </a></p>
	<p>&copy; arif 2010. All rights reserved. <a href="http://www.mohona.org">www.mohona.org</a> &reg;</p>
</div>
<!-- end #footer -->
</body>
</html>