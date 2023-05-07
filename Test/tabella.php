<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="CSS/styletable.css">
		<link rel="icon" href="img/logo.png">
		<title><?php echo $_POST["Nome_piatto"]; ?></title>
		
	</head>
	
	
	<body>
	
	<div class="container">
	<table>
		<thead>
		<tr><th style="width:30%">Nome piatto</th>
			<th>  <?php echo $_POST["Nome_piatto"]; ?> </th></tr>
		</thead>

		<tbody>
		<tr><td>Pax</td>
			<td> <?php echo $_POST["Pax"]; ?></td></tr>
			
			<tr><td>Tempo preparazione</td>
				<td><?php echo $_POST['t_prep']. ' ore';?> </td></tr>

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
				// iterazione su tutti gli elementi
				for($i = 0; $i < count($strumento); $i++) {
					echo($strumento[$i] . '<br>');
				}
			
			?>


			</td></tr>

		<tr><td>Procedimento del piatto</td>
			<td><?php echo $_POST["Procedimento"]; ?> </td></tr>

		<tr><td>Temperatura di conservazione</td>	
			<td><?php echo $_POST["T_cons"].' °C'; ?>  </td></tr>

		<tr><td>Data di scadenza</td>
			<td><?php echo $_POST["d_expired"]; ?> </td></tr>

		<tr><td>Valori nutrizionali del piatto</td>
			<td> <?php echo $_POST["nutrition"]; ?></td></tr>
		</tbody>
	</table>
		
	</div>


	
	</body>
	
<html> 
