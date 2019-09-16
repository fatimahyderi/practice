<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
	</head>

	<body>
	
		<?php
		echo '<h1>PHP Assignment</h1>';
		
		echo '<h2>Swap the values of two variables without using a temporary (third) variable</h2>';
		
		
		
			$a = 100;
			$b = 500;
			echo $a . ',' . $b;
			echo '<br/>';
			
			$a = $a + $b;
			$b = $a - $b;
			$a = $a - $b;
			
			echo $a . ',' . $b;
			
		
			echo '<br/>';
		
		
		echo '<h2>Perform addition/subtraction of two string type variables</h2>';
		
		
			
			$item1 = '100apples';
			$item2 = '200oranges';
			
			settype($item1, 'integer');	
			var_dump($item1);
			echo '<br/>';
			
			settype($item2, 'integer');	
			var_dump($item2);
			echo '<br/>';
			
			$sum = $item1 + $item2;
			$sub = $item2 - $item1;
			echo $sum . ' ' . 'items';
			echo '<br/>';
			echo $sub . ' ' . 'items';
			echo '<br/>';
			echo '<p>Prepared by : Fatima Hyderi</p>';
		?>
		
	</body>
</html>