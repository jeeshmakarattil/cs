<?php
$users=[['id'=>1,'name'=>'jeeshma','email'=>'j@gmail.com','phone'=>9567241040],
		['id'=>2,'name'=>'sruthi','email'=>'ss@gmail.com','phone'=>8890125633],
		['id'=>3,'name'=>'rahul','email'=>'r@gmail.com','phone'=>7859641236],
		['id'=>4,'name'=>'koyal','email'=>'k@gmail.com','phone'=>9895632140],
		['id'=>5,'name'=>'cuckoo','email'=>'c@gmail','phone'=>8086987541],
		['id'=>5,'name'=>'cuckoo','email'=>'c@gmail','phone'=>8086987541],
		['id'=>6,'name'=>'jeeshma','email'=>'j@gmail.com','phone'=>9567241040],
		['id'=>7,'name'=>'sruthi','email'=>'ss@gmail.com','phone'=>8890125633],
		['id'=>8,'name'=>'rahul','email'=>'r@gmail.com','phone'=>7859641236],
		['id'=>9,'name'=>'koyal','email'=>'k@gmail.com','phone'=>9895632140],
		['id'=>10,'name'=>'cuckoo','email'=>'c@gmail','phone'=>8086987541],];
$id=4;
$res=null;
foreach($users as $user)
{
if($id==$user['id'])
{
	$res=$user;
	break;
}


}
print_r($res);
?>