<?php
		
		$con=mysql_connect('localhost','root','');
		$db=mysql_select_db('info');
		$sql= "SELECT Id,Name, Address, city,Image FROM info ";
		$query=mysql_query($sql,$con);

		if ( ! $query) {
			die('Could Not Get Data: ' . mysql_error());
		}

		while ($row = mysql_fetch_assoc($query)){
			echo " Id : {$row['Id']} <br>".
				 " Name: {$row['Name']} <br>" .
				 "Address :{$row['Address']} <br>".
				 "City :   {$row['city']} <br>";
				 
		}
		

		echo "Fetched Successfull";
		mysql_close($con);

?>
