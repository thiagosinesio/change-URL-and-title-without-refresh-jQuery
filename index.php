<html>
<head>    
    <base href="http://<?=$_SERVER['SERVER_NAME'];?>/refresh/" />
    <title>Change URL and title without refresh</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
</head>
<body>
    <a href="?pag=pagina1" title="Pagina 1">Pagina 1</a>
    <a href="?pag=pagina2" title="Pagina 2">Pagina 2</a>
    <a href="?pag=pagina3" title="Pagina 3">Pagina 3</a>
    <?php echo '<pre>'; var_dump( $_GET ); ?>
</body>
</html>
