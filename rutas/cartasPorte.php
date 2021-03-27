<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');


include dirname(__FILE__) . '/../clases/cartaPorte.php';
include dirname(__FILE__) . '/../dao/dao-cartaPorte.php';
$app->post('/cartaPorte', function ($request,$response,$args)
{
    echo "Tumma1";
    $datos = $request->getParsedBody();
    $cartaPorte = new CartaPorte($datos);
    echo "Tumma2";
    $conexion = new PDO('mysql:host=tiendatalamas.com;dbname=tiendat_sistema_contable;', "tiendat_creative", "creativeSoftware");
    $daoCarta = new DAOCartaPorte($conexion);
    if($daoCarta->guardarCartaPorte($cartaPorte) == 'true')
    {
    	echo "Exito";
    }
    else{
    	echo "Fallo";
    }
    
});


?>