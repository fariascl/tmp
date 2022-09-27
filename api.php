<?php
if (!$_FILES['userfile']['type']){
    header("Location: / ");
}
?>
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
        <div class="row">
            <div class="col text-center">
                <?php
                require_once('functions.php');
		define('KB', 1024);
		define('MB', 1048576);
		define('GB', 1073741824);
		define('TB', 1099511627776);
		
                $uploaded_filetype = $_FILES['userfile']['type'];
                $is_valid = validate_type($uploaded_filetype);
                $dir_uploads = 'cdn/';
                $filename = time(). $_FILES['userfile']['name'];
                $file_uploaded = $dir_uploads . basename($filename);
                if ($is_valid == 1){
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $file_uploaded)){
                        echo "El archivo ha sido subido correctamente :).<br>";
                        echo 'Link archivo: <a href="https://tmp.boldo.space/cdn/' .$filename. '"><code>https://tmp.boldo.space/cdn/' .$filename.'</code></a>';
                    }
                }
                else {
                    echo "No está permitido subir este tipo de archivos\n";
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>



