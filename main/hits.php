<?php

/**
 * @author arif
 * @copyright 2010
 * @email delwar.hossain.arif@gmail.com
 */

//connect to DB
if (!isset($_SESSION['SESSION'])) require ("session_init.php");

//selecting the hits
$query = "SELECT hits FROM hit_counter WHERE page_id = '$page_id'";

mysql_pconnect($_SESSION['MYSQL_SERVER1'],$_SESSION['MYSQL_LOGIN1'],$_SESSION['MYSQL_PASS1'])
                   or die("Unable to connect to SQL server");
mysql_select_db($_SESSION['MYSQL_DB1']) or die("Unable to select database");
$result = mysql_query($query) or die("Invalid query: " . mysql_error());

//working with the hits
if($row = mysql_fetch_assoc($result))
	{
		$hits = $row['hits'];
		$hits++ ;
	}
else
	{
		die("Cn't fetch the required data from the DB!!");
	}

//updating the value
$update ="UPDATE hit_counter SET hits = '$hits' WHERE page_id = '$page_id'";
mysql_query($update) or die("Can't refresh the DB!!");

if($page_id==2)
{
	echo "<font size='9' weight='bold'>";
	echo $hits;
	echo "</font>";
}

?>