<?php $this->load->view('includes/navbar'); ?>
<?php $this->load->view('includes/cssjs'); ?>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Inicio</title>

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

	<div class="hero-unit">
		<h1>Blog</h1>
		<p>Prueba de texto bootstrap.</p>		
    </div>
	


	<div class="btn-group">
	  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	    Action
	    <span class="caret"></span>
	  </a>
	  <ul class="dropdown-menu">
	    <!-- dropdown menu links -->
	  </ul>
	</div>

	<ul class="nav nav-tabs">
	  <li class="active">
	    <a href="<?=base_url();?>">Crear Posts</a>
	  </li>
	  <li><a href="<?=base_url();?>posts/getPost/">Ver Posts</a></li>
	  
	</ul>

		
	<p> Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>