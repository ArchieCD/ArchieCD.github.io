<?php 
$num1=$_POST["num1"];
$num2=$_POST["num2"];
?>			
	
	
	<!DOCTYPE html>
<html>
	<head> 
	</head>
	<body> 
					<h1>Form Handling</h1>
			
	
		<form method="post">
			
				First Number:<br><input type="number" name="num1" size="2" value=<?php echo $num1;?>><br>
				Second Number:<br><input type="number" name="num2" size="2" value=<?php echo $num2;?>>
				<input type="submit" name="Calc" value="Calculate" style="text-align:justify ;">
            <br>

			</form>
	
	
	
	<br>
	<?php 
	
	if (array_key_exists("Calc", $_POST))
			{
			$num1=$_POST["num1"];
			$num2=$_POST["num2"];
			$counter=0;
			
		if ($num1>$num2 && $num2>0)
		{
			while ($num1>=$num2)
			{
				$counter=($counter+1);
				$num1=($num1-$num2);
			
			}
			echo "The Quotient is ".$counter." remainder ".$num1;
			
	
		
		}
		else if ($num1==$num2)
		
		{
				echo "The Quotient is "."1";
			
		}
		
		else if ($num2==0)
		
		{
				
				echo "NOT POSSIBLE";
			
		}
		
		else if ($num2>$num1)
		
		{
			
			echo "ERROR Divisor Greater than dividend";
		}
			}
		?>
	
	</body>
	
	
</html>


