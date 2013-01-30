<?php 
//connect to the db
$user = 'trekey_tkeyes';
$pswd = 'tkeyesdb1';
$db_database = 'trekey_trekeyes';
$db_hostname = 'box8.host1free.com';
$db_server = mysql_connect($db_hostname, $user, $pswd);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database,$db_server)
or die("Unable to select database: " . mysql_error());
$lgnText=$_POST['email'];
$lgnPsw=$_POST['password'];

$query = sprintf("SELECT * FROM login WHERE email='%s' AND password='%s'", 
mysql_real_escape_string($lgnText), mysql_real_escape_string($lgnPsw));
$result = mysql_query($query);
if(mysql_num_rows($result) > 0)
{
echo 1;  // for correct login response
//$row = mysql_fetch_row($result);
//session_start();
//$_SESSION['email'] = $lgnText;
//$_SESSION['password'] = $lgnPsw;
//$_SESSION['name'] = $row[1];
}
else
echo 0; // for incorrect login response
?>
