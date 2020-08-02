<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <title>Formulario de Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
        
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="text" name="correo" id="correo" class="form-control" placeholder="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores;?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente.</p>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

        </form>
    </div>
</body>
</html>