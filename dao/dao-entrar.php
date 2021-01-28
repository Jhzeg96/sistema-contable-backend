<?php
class DAOEntrar
{
    private $conexion;
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function validarEntrada($usuario, $contrasena)
    {
        $consulta = "SELECT UsuarioId FROM usuario WHERE UsuarioNombre = :usuarioNombre AND UsuarioContrasena = :usuarioContrasena";
        $declaracion = $this->conexion->prepare($consulta);
        $declaracion->bindParam(':usuarioNombre', $usuario, PDO::PARAM_STR);
        $declaracion->bindParam(':usuarioContrasena', $contrasena, PDO::PARAM_STR);
        $declaracion->execute();
        $usuarioID = $declaracion->fetchAll(PDO::FETCH_ASSOC);
        if($usuarioID === null)
        {
            return null;
        }
        return $usuarioID;
    }
}
?>