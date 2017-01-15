<?php

/**
 * @author arif
 * @copyright 2010
 * @email delwar.hossain.arif@gmail.com
 * @date 8.12.2010 1:2
 */

if (!isset($_SESSION['SESSION'])) require ("session_init.php");

$query = "SELECT * FROM users";

mysql_pconnect($_SESSION['MYSQL_SERVER1'],$_SESSION['MYSQL_LOGIN1'],$_SESSION['MYSQL_PASS1'])
                   or die("Unable to connect to SQL server");
mysql_select_db($_SESSION['MYSQL_DB1']) or die("Unable to select database");

$result = mysql_query($query) or die("Invalid query: " . mysql_error());

$users = mysql_num_rows($result);

echo "<font size='6' weight='bold'>";
echo "00" . $users;
echo "</font>";

?>