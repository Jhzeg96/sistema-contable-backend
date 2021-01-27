<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASEPATH', __DIR__.'/');
include 'jwt.php';

$app->post('/entrar', function ($request,$response,$args)
{
    $datos = $request->getParsedBody();

    if($datos["usuario"] === 'Jahaziel' && $datos["contrasena"] == '12345')
    {
        echo json_encode(Auth::SignIn([
            'id' => 1,
            'name' => $datos["usuario"]
        ]));
    }
    else
    {
        echo json_encode("Informacion incorrecta");
    }
});

?>