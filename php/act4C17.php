<!DOCTYPE html>
<html>
	<head> 
	</head>

	<body> 
    <h1>ARRAY ACTIVITY</h1>
  
	<?php 
			
		echo "<h3>1.</h3>";
			$StudentDepartment=array("SHS"=> array("BRAGAS", "CADAO", "BINARAO"),
									  "SHVED"=> array("BATARINA", "ALVEZ", "CARPIO"),
									"SBAA"=>array( "COLCOL", "LIBADOR", "VILLAMIL"),
									"SEAID"=>array("CACANANTA", "SUMA-IL", "CARIDAD", "CINCO", "BAYONA"),
									"SEAS"=> array("BANAN", "BITAMOG", "CHAN", "CABALATONGAN"),
								"SICS"=>array("BURUCANAY","BALUBAL","CANILLAS","BANCUD","BARSABAL")
							);
							
						foreach($StudentDepartment as $Department=>$Student)
						{
							echo ($Department)."=";
							echo (count($Student))."<br>";
						
						}
			echo "<h3>2.</h3>"."";
			$sum=0;
			echo "<h4>A.</h4>";
			$StudentGrade=array("BRAGAS"=>99,"CADAO"=>96, "BINARAO"=>80, "BATARINA"=>76, "ALVEZ"=>96, "CARPIO"=>79,
								"COLCOL"=>88,"LIBADOR"=>97, "VILLAMIL"=>76, "CACANANTA"=>85, "SUMA-IL"=>79, "CARIDAD"=>76,
								"CINCO"=>70, "BAYONA"=>94, "BANAN"=>83, "BITAMOG"=>89, "CHAN"=>96, "CABALATONGAN"=>98, 
								"BURUCANAY"=>91,"BALUBAL"=>70, "CANILLAS"=>89, "BANCUD"=>95, "BARSABAL"=>84);
			
			foreach($StudentGrade as $Student=>$Grade)
						{
							
							$sum=$sum+$Grade;
							$x=count($StudentGrade)."";
						
						}
			echo ""."Average Grade of All Students: ".($sum/$x);
			

			echo "<h4>B.</h4>";
			$StudentGrade=array("BRAGAS"=>99,"CADAO"=>96, "BINARAO"=>80, "BATARINA"=>76, "ALVEZ"=>96, "CARPIO"=>79,
								"COLCOL"=>88,"LIBADOR"=>97, "VILLAMIL"=>76, "CACANANTA"=>85, "SUMA-IL"=>79, "CARIDAD"=>76,
								"CINCO"=>70, "BAYONA"=>94, "BANAN"=>83, "BITAMOG"=>89, "CHAN"=>96, "CABALATONGAN"=>98, 
								"BURUCANAY"=>91,"BALUBAL"=>70, "CANILLAS"=>89, "BANCUD"=>95, "BARSABAL"=>84);
			
			
			foreach($StudentGrade as $Student=>$Grade)
						{
							
							if ($Grade>85)
							{
								echo $Student." ".$Grade."<br>";
							}
						
						}
		  echo "<h4>3.</h4>";
		  $DepartmentCourseStudent=array("SHS"=> array("BSN"=>"BRAGAS",
		  												"BSMT"=>"CADAO",
		  												"BSPH"=>"BINARAO"),
		  								 
		  								 "SHVED"=> array("BSHRM"=>"BATARINA",
															"BSHTM"=>"ALVEZ", 
															"BSHRA"=>"CARPIO"),
		  
										"SBAA"=> array ( "BSAC "=>"COLCOL",
														"BSAC"=>"VILLAMIL",
														"BSBA"=>"LIBADOR"),

		  		
										"SEAID"=>array("BSID"=>"CACANANTA",
		  											"BSGE"=>"SUMA-IL",
		  											"BSCE"=>"CARIDAD",
		  											"BFA"=>"CINCO",
		  											"BSEE"=>"BAYONA"),
		  
										
		  								"SEAS"=> array("AB"=>"BANAN",
														"BSLM"=>"BITAMOG",
		                                               "BSED"=>"CHAN",
		  												"BEED"=>"CABALATONGAN"),
		  
								    	"SICS"=>array("BSIS"=>"BURUCANAY",
		  										   "BSIT"=>"BALUBAL",
		  											"BSCS"=>"CANILLAS",
		  											"ACT"=>"BANCUD",
		  											"BLIS"=>"BARSABAL")
		  );
		  
		 
		 
						foreach($DepartmentCourseStudent as $Department=>$Course)
						{
							echo $Department."<br>";
							
							foreach($Course as $Courses=>$Student)
							
								echo $Student.": ".$Courses."<br>";
								echo "<br>";
							}
						?>

	</body>
	
	
</html>


