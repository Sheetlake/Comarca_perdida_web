<?php
require_once 'Database.php';

class Juego
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }

    public function obtenerJuegos()
    {
        $consulta = "
            SELECT id, titulo, desarrollador, plataforma, fecha_lanzamiento
            FROM juegos
            ORDER BY titulo ASC
        ";

        $resultado = $this->conexion->query($consulta);

        $listaJuegos = [];

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $listaJuegos[] = $fila;
            }
        }

        return $listaJuegos;
    }

    public function obtenerJuegoPorId($idJuego)
    {
        $sentencia = $this->conexion->prepare("
            SELECT id, titulo, desarrollador, plataforma, fecha_lanzamiento
            FROM juegos
            WHERE id = ?
        ");

        $sentencia->bind_param("i", $idJuego);
        $sentencia->execute();

        return $sentencia->get_result()->fetch_assoc();
    }
}
