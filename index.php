<html>
<head>
<title>Change URL and title without refresh</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="code.js"></script>
</head>
<body>
	<a href="pagina1" title="Contato">Link pagina 1.1</a>
	<a href="pagina2" title="Contato 2">Link pagina 1.2</a>
	<a href="pagina3">Link pagina 1.3</a>
<?php echo '<pre>'; var_dump( $_GET ); ?>
</body>
</html>
