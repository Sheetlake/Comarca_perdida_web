<?php
require_once 'Database.php';

class Categoria
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }

    public function obtenerCategorias()
    {
        $consulta = "SELECT id, nombre FROM categorias ORDER BY nombre ASC";
        $resultado = $this->conexion->query($consulta);

        $listaCategorias = [];

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $listaCategorias[] = $fila;
            }
        }

        return $listaCategorias;
    }

    public function obtenerCategoriaPorId($idCategoria)
    {
        $sentencia = $this->conexion->prepare("
            SELECT id, nombre
            FROM categorias
            WHERE id = ?
        ");

        $sentencia->bind_param("i", $idCategoria);
        $sentencia->execute();

        return $sentencia->get_result()->fetch_assoc();
    }
}
