<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

DB::table('calificaciones')->insert(['idcalificacion',
 $_POST['idcalificacion']],
);
echo "<h1>Datos guardados</h1> <br> <a href='inicio.html'Volver</a>";