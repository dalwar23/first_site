<?php

/**
 * @author arif
 * @copyright 2010
 * @email delwar.hossain.arif@gmail.com
 * @date 8.12.2010 18:19
 */


//connect to DB
if (!isset($_SESSION['SESSION'])) require ("session_init.php");
//adding the hits
$query = "SELECT SUM(hits) FROM hit_counter";
//slecting the DB
mysql_pconnect($_SESSION['MYSQL_SERVER1'],$_SESSION['MYSQL_LOGIN1'],$_SESSION['MYSQL_PASS1'])
                   or die("Unable to connect to SQL server");
mysql_select_db($_SESSION['MYSQL_DB1']) or die("Unable to select database");

$result = mysql_query($query) or die("Invalid query: " . mysql_error());

//working with the hits
if($row = mysql_fetch_assoc($result))
	{
		$hits = $row['SUM(hits)'];
	}
else
	{
		die("Cn't fetch the required data from the DB!!");
	}


echo "<font size='7' weight='bold'>";
echo $hits;
echo "</fonts>";

?>