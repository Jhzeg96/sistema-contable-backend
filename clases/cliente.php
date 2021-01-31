<?php
class Cliente
{
    private $id;
    private $nombre;
    private $apellidos;

    public function __construct($id, $nombre, $apellidos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function obtenerID()
    {
        return $this->id;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
    
    public function obtenerApellidos()
    {
        return $this->apellidos;
    }
}
?>