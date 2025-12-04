<?php
require_once __DIR__ . '/../config/database.php';

class ArticleController
{

    private $conexion;

    public function __construct()
    {
        // Inicializamos la conexión a la base de datos con mysqli
        $this->conexion = Database::conectar();
    }


    // Obtiene todas las entradas
    public function obtenerTodasLasEntradas()
    {
        $consulta = $this->conexion->query(
            "SELECT e.*, 
                    a.nombre AS autor_nombre, 
                    a.apellidos AS autor_apellidos, 
                    c.nombre AS categoria_nombre
             FROM entradas e
             JOIN autores a ON e.autor_id = a.id
             JOIN categorias c ON e.categoria_id = c.id
             ORDER BY e.fecha DESC"
        );
        return $consulta->fetch_all(MYSQLI_ASSOC);
    }


    // Obtiene una entrada por su ID
    public function obtenerEntradaPorId($idEntrada)
    {
        $consulta = $this->conexion->prepare(
            "SELECT e.*, 
                    a.nombre AS autor_nombre, 
                    a.apellidos AS autor_apellidos,
                    a.descripcion AS autor_descripcion, 
                    a.avatar_url AS autor_imagen,
                    c.nombre AS categoria_nombre,
                    j.titulo AS juego_titulo
             FROM entradas e
             JOIN autores a ON e.autor_id = a.id
             JOIN categorias c ON e.categoria_id = c.id
             LEFT JOIN juegos j ON e.juego_id = j.id
             WHERE e.id = ?"
        );
        $consulta->bind_param("i", $idEntrada);
        $consulta->execute();
        $resultado = $consulta->get_result();
        return $resultado->fetch_assoc();
    }

    public function listarEntradasPorTipo($tipoEntrada)
    {
        $consulta = $this->conexion->prepare(
            "SELECT e.*, 
                    a.nombre AS autor_nombre, 
                    a.apellidos AS autor_apellidos,
                    a.descripcion AS autor_descripcion,
                    a.avatar_url AS autor_imagen
            FROM entradas e
            INNER JOIN autores a ON a.id = e.autor_id
            WHERE e.tipo = ?
            ORDER BY e.fecha DESC"
        );
        $consulta->bind_param("s", $tipoEntrada); // 's' porque tipo es string
        $consulta->execute();
        $resultado = $consulta->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}
