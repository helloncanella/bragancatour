<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta property="og:url"                content="http://bragancatour.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<meta property="fb:app_id"             content="1540654036186926" />
	<meta property="og:title"              content="<?php echo $nome; ?>" />
	<meta property="og:description"        content="Estou pensando em ir. Vamos comigo?" />
	<meta property="og:type"               content="article" />
	<meta property="og:image"              content="http://bragancatour.com/images/<?php echo $pasta_recurso; ?>/principal.jpg" />	
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1540654036186926&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	


	<div class="fb-like" data-href="http://bragancatour.com<?php echo $_SERVER['REQUEST_URI']; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

</body>
</html>