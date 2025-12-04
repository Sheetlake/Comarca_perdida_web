<?php
require_once 'Database.php';

class Entrada
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }

    // Obtener todas las entradas con información asociada     
    public function obtenerTodasLasEntradas()
    {
        $consulta = "
            SELECT e.id, e.tipo, e.titulo, e.subtitulo, e.contenido, e.fecha, e.slug,
                   a.nombre AS autor_nombre, a.apellidos AS autor_apellidos,
                   c.nombre AS categoria
            FROM entradas e
            JOIN autores a ON e.autor_id = a.id
            JOIN categorias c ON e.categoria_id = c.id
            ORDER BY e.fecha DESC
        ";

        $resultado = $this->conexion->query($consulta);

        $listaEntradas = [];

        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $listaEntradas[] = $fila;
            }
        }

        return $listaEntradas;
    }


    //Obtener una entrada según su slug
    public function obtenerEntradaPorSlug($slug)
    {
        $consulta = "
            SELECT e.id, e.tipo, e.titulo, e.subtitulo, e.contenido, e.fecha, e.slug,
                   a.nombre AS autor_nombre, a.apellidos AS autor_apellidos,
                   c.nombre AS categoria
            FROM entradas e
            JOIN autores a ON e.autor_id = a.id
            JOIN categorias c ON e.categoria_id = c.id
            WHERE e.slug = ?
        ";

        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->bind_param("s", $slug);
        $sentencia->execute();

        return $sentencia->get_result()->fetch_assoc();
    }
}
