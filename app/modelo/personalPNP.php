<?php
namespace app\modelo;
use config\Conexion;

require_once "config\Conexion.php";

class personalPNP{
    private $idPersonal;
    private $nombre;
    private $apellido;
    private $edad;
    private $cargo;
    private $DNI;

    
    public function getId(): int
    {
        return $this->idPersonal;
    }

    public function setId(int $idPersonal): void
    {
        $this->idPersonal = $idPersonal;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

  public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

     public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }
 public function getDNI(): int
    {
        return $this->DNI;
    }

    public function setDNI($DNI): void
    {
        $this->DNI = $DNI;
    }



    public function añadir(){
        try {
            $conn = new Conexion();
            $sql = "SELECT * FROM personas";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }


    public function guardar(){
        try {
            $conn = new Conexion();
            $sql = "INSERT INTO persona(nombre) VALUES('$this->nombre')";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function actualizar(){
        try {
            $conn = new Conexion();
            $sql = "UPDATE personas SET nombre='$this->nombre' WHERE idPersonal=$this->idPersonal";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

