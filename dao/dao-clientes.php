<?php
class DAOClientes
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function guardarCliente($id,$nombre,$apellidos)
    {
        $consulta = "INSERT INTO cliente (ClienteId, ClienteNombre, ClienteApellidos) VALUES (:id,:nombre,:apellidos)";
        $declaracion = $this->conexion->prepare($consulta);
        $declaracion->bindParam(':id', $id, PDO::PARAM_STR);
        $declaracion->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $declaracion->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        if($declaracion->execute())
        {
            echo "true";
        }
        else
        {
            echo "f";
        }
    }
}
?>