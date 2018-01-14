<?php
$password='321';
$email= 'info@baabtra.com';
if(($email=='info@baabtra.com')&&($password=='321'))
{
	echo "login successfull";
	echo "<br>";
}
else if(($email=='info@baabtra.com')&&($password!='321'))
{
	echo "invalid password";
}
else if(($email!='info@baabtra.com')&&($password=='321'))
{
	echo "invalid user";
}
?>