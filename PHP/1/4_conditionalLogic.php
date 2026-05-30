<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conditional Logic In PHP</title>
</head>
<body>
<ul>
	<li>
		<?PHP
			$number_For_logic= 1;

			if ($number_For_logic == 1) {
				print ("<img src=images/php.png>");
			}else if($number_For_logic != 1){
				echo "There in no any image for you";
			}else{
				echo "Somthing strange is going here";
			}
		?>
	</li>
	<li>
		<?php
			$picture ='PHP';

			switch ($picture) {
				case 'PHP':
					print('PHP Picture');
				break;
				case 'C++':
					print('C++ Picture');
				break;
				case 'Java':
					print('Java Picture');
				break;
			}
		?>
	</li>
	<li>
		<?php
			$check = false;
			if ($check == 1) {
				print("It is true");
			}else{
				print("It is false");
			}
		
		?>
	</li>
	<li>
		<h2>Using for loop</h2>
		<?PHP
			$step = 0;
			$start = 1;
			echo '<ul>';
				for($start; $start <= 20; $start++) {
					$step = $step + 1;
					echo '<li>';
						print $step ."<BR>";
					echo '</li>';
				}
			echo '</ul>';
		?>
	</li>
</ul>
	
	
	
</body>
</html>