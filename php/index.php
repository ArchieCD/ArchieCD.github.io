<!DOCTYPE html>
<html>
	<head>
		<title>My first PHP Script</title>
	</head>

	<body>
		<?php 
			//display for php
			echo "<h1>My first PHP Script</h1>"; //echo is used to display
			
			/*Multiline Comments*/
			
			//declaring variables
			//$varName=value; 
			$num1=1;
			$num2=5.55;
			$y=5;
			//$string="this is a string";
			
		
			
			
			//. (dot) is used  for concatination
			//echo $num1."is an integer <br>";
			//echo $num2."is a float <br>";
			//echo $string."is a string <br>";
			echo "the sum of ".$num1." and ".$num2." is ".($num1+$num2)." <br>";
			echo "the difference of ".$num1." and ".$num2." is ".($num2-$num1)." <br>";
			echo "the product of ".$num1." and ".$num2." is ".($num1*$num2)."<br>";
			echo "the quotient of ".$num1." and ".$num2." is ".($num1/$num2)."<br>";
			
			for ($x=1;$x<=5;$x++)
			{
				for ($z=$x;$z>0;$z--)
						
				{		
						echo $z;	
						
						
				}
					echo "<br>";


			}
		?>
	</body>
</html>