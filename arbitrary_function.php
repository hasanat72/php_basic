<!DOCTYPE html>
<html>
<head>
	<title>Arbitrary function</title>
</head>
<body>
	<?php
			function func(){ //function with arbitrary number of arguments.

				$passed_value=func_get_args(); // what it does ?  actuall it converts the whole passed argument into an array, then loop prints its each item.
				foreach ($passed_value as $key => $value) {
				 	echo '<pre>';
				 	echo $key." Item is ". $value."<br>";
				 } 
				
			}

				func("NSU",'ali','shafi','sazib');

				// using Glob() to find files. what it does? its kind of scandir function.
				//based on some patterns i.e-file format, it search files of similar kind.  analogus to  txt file in python, how u did it ? remenber.. thats the thing here it does in php as glob();

				$files=glob('*.php');
				echo '<br>';
				print_r($files);
				echo "<br>";

				$files=glob('{*.php,*.txt}',GLOB_BRACE);		// multiple file types
				echo '<pre>';
				print_r($files);
				echo "<br>";
				$file=array_map('realpath',$files);
				print_r($file);

					$files = glob('G:\Programming\Xampp\htdocs\city\img\bh\*.jpg');
					echo "<pre>";
					print_r($files);


				//garbage collector

	?>
</body>
</html>