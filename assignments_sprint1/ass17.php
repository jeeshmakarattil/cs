<?php
$per="70";
switch(true)
{
	case $per=="50":
		echo "B.A";
		break;case $per=="60":
		echo "B.Sc";
		break;
		case $per=="70":
		echo "civil engineering";
		break;
		
		case $per=="80":
		echo "machanical engineering";
		break;
		case $per=="90":
		echo "computer science and engineering";
		break;
		case $per<"50":
		echo "sorry ,you are not eligible for admission in any stream";
		break;
		

	
}
?>