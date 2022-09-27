<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="/tmp es un servicio de almacenamiento temporal y gratuito de archivos de hasta 200MB."/>
    <title>/tmp</title>
    <link rel="stylesheet" href="/static/css/chota.css">
    <link rel="stylesheet" href="/static/css/cons.css">
</head>
<body>
<div class="container text-center">
	<div class="row">
		<div class="col">
		    <a href="/"><img id="logo" src="/static/img/logo.png"></a>
		</div>
	</div>
	<div class="row">
		<div class="col text-center">
			<h1><strong>/tmp</strong></h1>
		    <p>Almacenamiento temporal (24h) de archivos de hasta 200MB.</p>
		</div>
	</div>
	<form action="api.php" method="POST" enctype="multipart/form-data">
    	<div class="row">
        	<div class="col"></div>
			<div class="col">
		    		<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
            		<label for="userfile" class="btn btn-sm"><input type="file" name="userfile"></label>
        	</div>
        	<div class="col"></div>
    	</div>
	</div>
   	<div class="row">
		<div class="col text-center">
			<button type="submit" aria-label="Left Align">Subir archivo</button>
		</div>
	</div>
	</form>
    <div class="col text-center">
        <em><code>Formatos aceptados: jpg, jpeg, png, zip, rar, tar y tar.gz</code></em>
    </div>
</div>

</body>
</html>
