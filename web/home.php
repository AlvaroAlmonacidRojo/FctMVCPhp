<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 22:33
 */
require_once '../entities/Estudio.php';
session_start();

$listadoEstudios = $_SESSION['listadoEstudios'];

?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<title>Hello, world!</title>
</head>
<body>
<img class="img-responsive" src="img/azarquiel.png" >
<div class="container">
<div class="row">
	<div class="col-md-3">Elige Ciclo: </div>
	<div class="col-md-6">
<select>
	<option>Elige un estudio</option>
	<?php
	foreach ($listadoEstudios as $estudio){
		?>
		<option><?php echo $estudio->getNombre();?></option>
		<?php
	}
	?>

</select>
</div>
</div>

</body>
</html>



