<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASEPATH', __DIR__.'/');
include 'jwt.php';
include dirname(__FILE__) . '/../dao/dao-entrar.php';

$app->post('/entrar', function ($request,$response,$args)
{
    $datos = $request->getParsedBody();
    $conexion = new PDO('mysql:host=tiendatalamas.com;dbname=tiendat_sistema_contable;', "tiendat_creative", "creativeSoftware");
    $daoEntrar = new DAOEntrar($conexion);
    if($daoEntrar->validarEntrada($datos["usuario"],$datos["contrasena"]) != null)
    {
        echo json_encode(Auth::SignIn([
            'id' => 1,
            'name' => $datos["usuario"]
        ]));
    }
    else
    {
        echo json_encode("Información incorrecta");
    }
});


?>