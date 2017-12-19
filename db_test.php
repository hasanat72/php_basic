<!DOCTYPE html>
<html>
<head>
	<title>DB_TEST</title>
</head>
<body>
	<?php

		$username=$_POST['username'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$con=mysql_connect('localhost','root','');
		
		$db=mysql_select_db('info');

		$sql="insert into info(Name,Address,city) values ('$username','$address','$city')";
		$query=mysql_query($sql,$con);
		
		if ($query) {
			echo 'data insert successfully';
		}
		else
			echo "failed";
	?>

</body>
</html>