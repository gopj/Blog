<?php $this->load->view('includes/navbar'); ?>
<?php $this->load->view('includes/cssjs'); ?>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Posts</title>

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

	<script src="<?=base_url('js/tinymce/tiny_mce.js');?>"> </script>

	<script type="text/javascript">
		tinyMCE.init({

        	// General options
	        mode : "textareas",
	        theme : "advanced",
	        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

	        // Theme options
	        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
	        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
	        theme_advanced_toolbar_location : "top",
	        theme_advanced_toolbar_align : "left",
	        theme_advanced_statusbar_location : "bottom",
	        theme_advanced_resizing : true,

	        // Skin options
	        skin : "o2k7",
	        skin_variant : "silver",

	        // Example content CSS (should be your site CSS)
	        content_css : "css/example.css",

	        // Drop lists for link/image/media/template dialogs
	        template_external_list_url : "js/template_list.js",
	        external_link_list_url : "js/link_list.js",
	        external_image_list_url : "js/image_list.js",
	        media_external_list_url : "js/media_list.js",

	        // Replace values for the template plugin
	        template_replace_values : {
	                username : "Some User",
	                staffid : "991234"
	        }
		});
	</script>

</head>
<body>

<div id="container">
	<div id="body">

		<div class="hero-unit">
			<h2>Publicar Post </h2>

			<form  id ="form" action="<?=base_url();?>posts/newPost/" method="POST">
				
				<p> <h3> Guardar Posts </h3> </p>
				<p> Nombre: <input name="name" id="name" type="text"> </p> 
				<p> Titulo: <input name="title" id="title" type="text"> </p> 
				
				
				<p> Contenido: </p>
				<p> <textarea name="cont" id="cont" rows="7" style="width:50%"></textarea> </p>

				
				<button class="btn btn-primary" type="submit" value="Guardar Post" id="save"> Guardar Post </button>
				
			</form>	

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
		</div>

    </div>			    
	
</div>

</body>
</html>