<?php
$mark=60;
if(($mark>=80)&&($mark<=100))

{
	echo "The number you have entered is:".$mark."<br>";
	echo "The student has got A grade";
}
 else if(($mark>=60)&&($mark<=79))
{
	echo "The number you have entered is:".$mark."<br>";
	echo "The student has got B grade";
}
 else if(($mark>=40)&&($mark<=59))
{
	echo "The number you have entered is:".$mark."<br>";
	echo "The student has got C grade";
}
 else if(($mark>=30)&&($mark<=49))
{
	echo "The number you have entered is:".$mark."<br>";
	echo "The student has got D grade";
}
else if(($mark>=10)&&($mark<=29))
{
	echo "The number you have entered is:".$mark."<br>";
	echo "The student has got E grade";
}
?>