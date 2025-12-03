<?php
require_once 'Database.php';

class Autor
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }

    //Obtener todos los autores
    public function obtenerAutores()
    {
        $consulta = "SELECT id, nombre, apellidos, descripcion, avatar_url FROM autores";
        $resultado = $this->conexion->query($consulta);

        $listaAutores = [];

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $listaAutores[] = $fila;
            }
        }

        return $listaAutores;
    }


    //Obtener autor por ID
    public function obtenerAutorPorId($idAutor)
    {
        $sentencia = $this->conexion->prepare("
            SELECT id, nombre, apellidos, descripcion, avatar_url
            FROM autores
            WHERE id = ?
        ");

        $sentencia->bind_param("i", $idAutor);
        $sentencia->execute();

        return $sentencia->get_result()->fetch_assoc();
    }
}
