<!DOCTYPE html>
<html>
<head>
	<title>Bilangan prima</title>
</head>
<body>
	<?php 
	$i=0;
	while ($i <= 100)
		if ($i % 2 === 0) {
			
			echo $i." adalah genap <br>";
			$i++;
		}else{
			echo $i."adalah ganjil <br>";
			$i++;
        
		}
	

	
	?>
</body>
</html>