<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

$user = DB::table('usuarios')
->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
->where('usuarios.idusuarios', $_GE['idusuario'])->first();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
</head>
<body>
    <div class="container">
      
    <h1> Sistema Escolar</h1>

    <?php if ($user->nombreperfil == 'Profesor') { ?>
    
    <h2>Agregar calificacion: </h2>
    <form action="insertar.php">calificacion: 
    <label class='label' for="calificacion"> Calificacion</label>
    <input id ="calificacion" type="text" name="calificacion">
    <input class="button" type="submit" value="Guardar">
    </form>

    <?php } ?>
      
    <form action="consultar.php" method="post">
        <input class="button" type="submit" value="Consultar">
    </form>
   </div>
</body>
</html>