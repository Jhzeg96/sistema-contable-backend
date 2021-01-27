<?php
$app->get('/clientes/{name}', function($request, $response, $args) 
{
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
?>