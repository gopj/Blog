<?php $this->load->view('includes/navbar'); ?>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Posts</title>

	<link href="<?=base_url('css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?=base_url('css/bootstrap-responsive.css'); ?>" rel="stylesheet">
	<link href="<?=base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?=base_url('css/docs.css'); ?>" rel="stylesheet">
	<link href="<?=base_url('css/prettify.css'); ?>" rel="stylesheet">
	<script src="<?=base_url('js/jquery-1.9.0.js');?>"> </script>
	<script src="<?=base_url('js/bootstrap.js');?>"> </script>

	<style type="text/css"> 
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	</style>
</head>
<body>

<div id="container">
	<h1>Publicar Post </h1>

	<div id="body">
		
		<form  id ="form" action="<?=base_url();?>posts/addPost/" method="POST">
			<p>Guardar Posts</p>
			<p> Nombre: <input name="name" id="name" type="text"> </p> 
			<p> Titulo: <input name="title" id="title" type="text"> </p> 
			<!-- <p> Contenido: <input name="cont" id="cont" type="textarea"> </p> 	-->
			
			
			Conternido:
			<p> <textarea name="cont" id="cont" rows = "3" cols = "80"></textarea> </p>

			<button class="btn btn-primary" type="submit" value="Guardar Post" id="save"> Guardar Post </button>
			<!-- <input type="submit" value="Guardar Post" id="save"> -->
		</form>

	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>