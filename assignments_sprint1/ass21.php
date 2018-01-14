<?php
$topics=[
[
'id'=>1,
'name'=>'arjun',
'marks'=>45,
],[
'id'=>2,
'name'=>'john',
'marks'=>98,
],
[
'id'=>3,
'name'=>'mathew',
'marks'=>78,
],
[
'id'=>4,
'name'=>'anamika',
'marks'=>100,
],
[
'id'=>5,
'name'=>'arya',
'marks'=>55,
],
];

	echo "<table border=1 width=200>";
	echo "<tr>";
	echo "<td><b>";
	echo "id";
	echo "</b></td>";
	echo "<td><b>";
	echo "name";
	echo "</b></td>";
	echo "<td><b>";
	echo "marks";
	echo "</b></td>";
	echo "</tr>";
	foreach ($topics as $topic) 
{
	echo "<tr>";
	echo "<td>";
	echo $topic['id'];
	echo "</td>";
	echo "<td>";
	echo $topic['name'];
	echo "</td>";
	echo "<td>";
	echo $topic['marks'];
	echo "</td>";
	echo "</tr>";
}
	echo "</table>";

?>