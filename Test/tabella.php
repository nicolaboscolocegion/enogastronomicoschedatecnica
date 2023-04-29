<html>


	<head>

		<meta charset="UTF-8">
	</head>
	
	
	<body>
	
	<table border="1">
		<tr><td>Nome piatto</td>
			<td>  <?php echo $_POST["Nome_piatto"]; ?> </td></tr>

		<tr><td>Pax</td>
			<td> <?php echo $_POST["Pax"]; ?></td></tr>

		<tr><td>Descrizione del piatto</td>
			<td><?php echo $_POST["descrizione"]; ?> </td></tr>

		<tr><td>Classificazione del piatto</td>
			<td> <?php echo $_POST["Classificazione"]; ?></td></tr>

		<tr><td>Allergeni</td>
			<td><?php echo $_POST["Allergeni"]; ?> </td></tr>

		<tr><td>Ingredienti del piatto</td>
			<td> <?php echo $_POST["Ingredienti"]; ?></td></tr>

		<tr><td>Strumenti necessari alla preparazione</td>
			<td> 

			<?php
			$strumento = $_POST['strumento']; // prendo i dati dal form
				// Altrimenti itero sugli elementi dell'array, e stampo il valore:
				for($i = 0; $i < count($strumento); $i++) {
					echo($strumento[$i] . '<br>');
				}
			
			?>


			</td></tr>

		<tr><td>Procedimento del piatto</td>
			<td><?php echo $_POST["Procedimento"]; ?> </td></tr>

		<tr><td>Temperatura di conservazione</td>	
			<td><?php echo $_POST["T_cons"]; ?> </td></tr>

		<tr><td>Data di scadenza</td>
			<td><?php echo $_POST["d_expired"]; ?> </td></tr>

		<tr><td>Valori nutrizionali del piatto</td>
			<td> <?php echo $_POST["nutrition"]; ?></td></tr>
		
	</table>
		



	
	</body>
	
<html> 