<!DOCTYPE html>
<html>
<head>
	<title>DB_TEST</title>
</head>
<body>
	<?php

		$username=	$_POST['username'];
		$address=	$_POST['address'];
		$city=	$_POST['city'];
		$ssc=	$_POST['ssc'];
		$hsc=	$_POST['hsc'];
		$present =	$_POST['present'];
		$permanent=	$_POST['permanent'];
		$nid = $_POST['nid'];
		$blood=	$_POST['blood'];
		$dob=	$_POST['dob'];
		$religion	=	$_POST['religion'];
		$hphone	=	$_POST['hphone'];
		$cell	=	$_POST['cell'];
		$email	=	$_POST['email'];

		if ($_FILES) {
			$check= getimagesize($_FILES['image']['tmp_name']);
			
			if ($check !== false) {
				$name = $_FILES['image']['tmp_name'];
				$image = addslashes(file_get_contents($name));
				$image = base64_encode($image);
			}
			
		}
		
		$con=mysql_connect('localhost','root','');
		$db=mysql_select_db('info');

		$sql="insert into info(Id,Name,Address,City,Image,SSC,HSC,Present_Address, Permanent_Address,Blood,NID,Date_of_Birth,Religion,Home_Phone,Cell_No,Email) values ('','$username','$address','$city','$image','$ssc','$hsc','$present','$permanent','$nid','$blood','$dob','$religion','$hphone','$cell','$email')";
		$query=mysql_query($sql,$con);
		
		if ($query) {
			echo 'data insert successfully';

			
		}
		else
			echo "failed";
	?>

</body>
</html>