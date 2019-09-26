<html>
	<head>
	
	</head>
	
	<body>
		<?php
			$name='Janusz';
			echo "Imie: $name <br>";
			echo 'Imie: $name<br>';
			
			$surname='Nowak';
			echo "Twoje dane: $name, $surname<hr>";
			
			//konkatenacja .
			
			echo 'Mam na imie: ' .$name.'.<br> Moje nazwisko: '.$surname.'<hr>';
			echo 'Masz na imie: ' ,$name;
			
			//heredoc
			
			echo <<< ETYKIETA
			<hr>heredoc<br>
			Mam na imie: $name<br>
			Moje nazwisko: $surname<hr>
ETYKIETA;

			$text = <<< E
			<hr>heredoc2<br>
			Mam na imie: $name<br>
			Moje nazwisko: $surname<hr>
E;
			echo $text;
			
			//nowdoc
			
			$text = <<< E
			<hr>nowdoc<br>
			Mam na imie: $name<br>
			Moje nazwisko: $surname<hr>
E;

			
			
		?>
	<body>


</html>
