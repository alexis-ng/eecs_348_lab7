<html>
<body>

<table style="border:1px solid;" >

<?php
$rows = $_POST["size"] + 1;
for ($j = 0; $j <$rows;$j++){
	for ($i = 1; $i<$rows;$i++){
		if ($j == 0){
			$sum = 1 * $i;
		}else{
			$sum = $j * $i;
		}
		if ($j == 0 && $i == 1){
			print("<td style='border: 1px solid; padding: 3px;'></td>");
		}	
		elseif ($i == 1){
			print ("<td style='border: 1px solid; padding: 3px;'>$j</td>");
		}
		print ("<td style='border: 1px solid; padding: 3px;'>$sum</td>");
		
}
print("<tr>");
}
?>
</table>
</body>
</html>
