<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
error_reporting(E_ALL);
ini_set('display_errors', 1);

include './jwt.php';
$data = file_get_contents('php://input');
$data = json_decode($data);
//echo json_encode($data->usuario);
/*
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2MTE3MDMzODIsImF1ZCI6IjYyNWQyNWExNjRjODE2MjBiNTU0OWZlYWUxMzY3YTFhZTEzMTllMGIiLCJkYXRhIjp7ImlkIjoxLCJuYW1lIjoiRWR1YXJkbyJ9fQ.7XORuZUMJPun3GOHHhkYazu2z394zJUwQyRqxjB8vhc";
var_dump(
    Auth::GetData(
        $token
    )
);
*/
$usuario  = "Jahaziel";
$password = "12345";
if($data->usuario === 'Jahaziel' && $data->contrasena == '12345')
{
    echo json_encode(Auth::SignIn([
        'id' => 1,
        'name' => $usuario
    ]));
}
else
{
    echo json_encode("Informacion incorrecta");
}
?>