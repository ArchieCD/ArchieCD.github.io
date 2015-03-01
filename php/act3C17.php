<?php 
	$str=$_POST["num1"];
	$char=$_POST["word1"];
?>			
			


<!DOCTYPE html>
<html>
	<head> 
	</head>

	<body> 
	
			<h1>ACTIVITY 3</h1>
			
			<form method="post">
			
				Enter Numbers: <code>ex: 123</code><br>
                <input type="number" name="num1" value=<?php echo $str;?>><br>
				Enter a Word: <code>ex: Hannah</code><br>
                <input type="text" name="word1" value=<?php echo $char;?>>
				<input type="submit" name="con" value="TEST" >

			</form>
	
	
	
	
	
	
	
	
	<?php 
	
	if (array_key_exists("con", $_POST))
			{
			
		   echo '<br/>';
			
			$str=$_POST["num1"];
			$length=strlen($str);
			
			$word=array('zero','one','two','three','four','five','six','seven','eight','nine');
			
			echo "A. ".$str." " ;
			
			for ($x=0;$x<$length;$x++)
			{
				
				switch($str[$x])
				{case '0':echo $word[0]." " ; break;
				case '1': echo $word[1]." "; break;
				case '2': echo $word[2]." "; break;
				case '3': echo $word[3]." "; break;
				case '4': echo $word[4]." "; break;
				case '5': echo $word[5]." "; break;
				case '6': echo $word[6]." "; break;
				case '7': echo $word[7]." "; break;
				case '8': echo $word[8]." "; break;
				case '9': echo $word[9]." "; break;
				}
			}
			
			echo '<br/>';
			$char=$_POST["word1"];
			$reverse=strrev($char);
			
			
				
				if ($char==$reverse)
				 { 
				 	
				 	echo "B. ".$char." is a palindrome"."<br>";
				 }
				 
				
				else
				{
                    echo "B. ".$char." is not a palindrome";
                }
				
			}
		?>
	
	</body>
	
	
</html>


