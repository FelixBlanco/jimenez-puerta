<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Conocedores de la importancia de la planeación estratégica aplicada a las diferentes áreas del derecho, Jiménez Puerta Abogados, evoluciona de manera permanente para brindar a sus clientes un servicio oportuno que involucra experiencia, conocimiento, compromiso, creatividad y alta  formación académica,  valores que garantizan eficacia en sus gestiones como empresa líder en la prestación de servicios jurídicos.">
	<meta name="keywords" content="Abogados, Jimenez Puerta, servicios de Abogados">
	<meta name="author" content="Jimenez Puerta">

	<title>Jimenez Puerta | Abogados</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon-jimenez.ico">

	<link rel="stylesheet" href="normalize.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<link rel="stylesheet" href="style.css">

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body>

<?php if($_COOKIE['mensaje_email'] == 'true'){ 
setcookie("mensaje_email", 'true', time()-1000);
	?>

<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Perfecto</strong> Se envio correctamente.
</div>

<?php }elseif($_COOKIE['mensaje_email'] == 'false'){ 
setcookie("mensaje_email", 'false', time()-1000);
	?>

<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Lo siento</strong> ocurrio un error vuelta a intentar.
</div>

<?php } ?>

<?php include('header.php'); ?>

<?php include('slide.php'); ?>

<div class="barra-divisora"></div>

<?php include('objetivo-corporativo.php'); ?>

<div class="barra-divisora"></div>

<?php include('practicas.php'); ?>

<div class="barra-divisora"></div>

<?php include('ventajas.php'); ?>

<div class="barra-divisora"></div>

<?php include('perfiles.php'); ?>

<div class="barra-divisora"></div>

<?php include('videos.php'); ?>

<div class="barra-divisora"></div>

<?php include('galeria.php'); ?>

<div class="barra-divisora"></div>

<?php include('clientes.php'); ?>

<div class="barra-divisora"></div>

<?php include('contactos.php'); ?>

<?php include('footer.php'); ?>

<script src="js/script.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/smooth-scroll.polyfills.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>