<?php
	header("Expires: Thu, 17 May 2001 10:17:17 GMT");    // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
	header ("Pragma: no-cache");                          // HTTP/1.0
	
	session_start();

	if (!isset($_SESSION['SESSION'])) require ( "session_init.php");
	//echo $_SESSION['LOGGEDIN'];
	if ($_SESSION['LOGGEDIN'] == false) 
	{ header("Location: index.php?flg=black");	exit;}
	
	//page id and hits
	$page_id = 7; //page id
	require("hits.php");
	
	//variables
	$server = $_SESSION['MYSQL_SERVER1']; 
	$usr = $_SESSION['MYSQL_LOGIN1']; 
	$pswd = $_SESSION['MYSQL_PASS1'];
	$db = $_SESSION['MYSQL_DB1'];
	$table = "links" ;
	
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
            <?php include("menu.php");?>
		</div>
		<!-- end #menu -->
	</div>
	<!-- end #header -->
	<div id="logo">
		<h1><a href="#">pursuit of happyness</a></h1> 
		<p> 
it's never too late 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
	</div>
	<hr />
	<!-- end #logo -->
<!-- end #header-wrapper -->

<div id="page">
	<div id="pcontent">
		<div class="post">
	<!--		<h2 class="title">Welcome to Abundant</h2>
			<p class="date">01.23.09</p> -->
			<div class="entry">
										<?php
                                        
                                        /**
                                         * @author Arif
                                         * @copyright 2010
                                         * @email:delwar.hossain.arif@gmail.com
                                         */
                                        $query = "SELECT id ,
                                                         sitename ,
                                                         siteurl , 
                                                         about
                                                                FROM links WHERE status = '1'" ;
                                        
                           mysql_pconnect($_SESSION['MYSQL_SERVER1'],$_SESSION['MYSQL_LOGIN1'],$_SESSION['MYSQL_PASS1'])
                                                           or die("Unable to connect to SQL server");
                                     mysql_select_db($_SESSION['MYSQL_DB1']) or die("Unable to select database");
                                        
                                        $result = @mysql_query($query) or die("Unknown query error");
                                        
                                        $rows = @mysql_num_rows($result);
                                        //echo "Number of rows: ".$rows ;
                                        
                                        echo "<br />" ;
                                        
                                        $columns = @mysql_num_fields($result);
                                        //echo "Number of columns: ".$columns."<br/>" ;
                                        echo "
                                            <table width='100%' border=1px cellpadding=2px cellspacing=2px align='center'>
											<tr>
											<td colspan='5'>
											I used to use these links. Hope you find them useful.
											</td>
											</tr>
                                            <tr style='color:black;'>
                                                <th align='left'>Id</th>
                                                <th align='left'>Site Name</th>
                                                <th align='left'>Site URL</th>
                                                <th align='left'>About</th>
												<th align='left'>Direct Link</th>
                                            </tr>
                                        " ;
                                        while($row = mysql_fetch_array($result))
                                        {
                                            //fetching the required fields
                                            $id = $row['id'];
                                            $sitename = $row['sitename'];
                                            $siteurl = $row['siteurl'];
                                            $about = $row['about'];
                                            
                                            //putting them in the table
                                        echo "
                                            <tr>
                                                <td>$id</td>
                                                <td>$sitename</td>
                                                <td>$siteurl</td>
                                                <td>$about</td>
								<td><a href='$siteurl'>Click Me</a></td>
                                            </tr>
                                            " ;
                                        }
                                        
                                        echo "
                                        <tr>
                                            <td  colspan='5' align='center'>Total : $rows &nbsp; Links!</td>
                                        </tr>
                                        ";
                                        
                                        echo  "</table>";
                                        ?>
      			</div>
                <h2 align="center"> >> <a href="home.php">Go Home</a> << </h2>
		</div>

	</div>
	<!-- end #content -->

	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
</div>

<div id="footer">
	<p><a href="home.php">Home</a> || <a href="about.php">About Author</a> || <a href="privacy_policy.php">Privacy policy </a></p>
	<p>&copy; arif 2010. All rights reserved. <a href="http://www.mohona.org">www.mohona.org</a> &reg;</p>
</div>
<!-- end #footer -->
</body>
</html>