<?php


$host="localhost";

$username="root";

$password="@y3nX$9'%hH*z<7&";

$db_name="ssn";

$tbl_name="login";

$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect");

if($conn)

{

	echo ":) :) Connect Success :) :)";

}

mysql_select_db("$db_name")or die("cannot select DB");

$myusername="eiei";

$mypassword="eiei123";

$myusername=stripcslashes($myusername);

$mypassword=stripcslashes($mypassword);

$myusername=mysql_real_escape_string($myusername);

$mypassword=mysql_real_escape_string($mypassword);

$sql="select * $tbl_name where name='$myusername' AND password='$mypassword'";

$result=mysql_query($sql,$conn);

$count=mysql_fetch_array($result);

if ($count) {

	echo ":) :) Login Success :) :)";

}

else

{

	echo ":( :( Authentication Failure :( :(";

}


?>


