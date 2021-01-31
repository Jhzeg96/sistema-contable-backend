<?php
include dirname(__FILE__) . '/../clases/cliente.php';
include dirname(__FILE__) . '/../dao/dao-clientes.php';

$app->get('/clientes/{name}', function($request, $response, $args) 
{
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->post('/clientes', function ($request,$response,$args)
{
    $datos = $request->getParsedBody();
    $cliente = new Cliente($datos["id"], $datos["nombre"], $datos["apellidos"]);
    $conexion = new PDO('mysql:host=tiendatalamas.com;dbname=tiendat_sistema_contable;', "tiendat_creative", "creativeSoftware");
    $daoClientes = new DAOClientes($conexion);
    $daoClientes->guardarCliente($cliente->obtenerID(), $cliente->obtenerNombre(),$cliente->obtenerApellidos());
});
?>