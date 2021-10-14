<?php
namespace app\modelo;
use config\Conexion;

require_once "config/Conexion.php";
class persona
{
    private $codigoPersona;
    private $nombres;
    private $apellidos;
    private $edad;
    private $DNI;
    private $fecha;

    public function getcodigoPersona(): int
    {
        return $this->codigoPersona;
    }

    public function setcodigoPersona($codigoPersona): void
    {
        $this->codigoPersona = $codigoPersona;
    }

    public function getNombres(): string
    {
        return $this->nombres;
    }

    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

     public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

     public function getDNI(): int
    {
        return $this->DNI;
    }

    public function setDNI($DNI): void
    {
        $this->DNI = $DNI;
    }

     public function getfecha(): date
    {
        return $this->fecha;
    }

    public function setfecha($fecha): void
    {
        $this->fecha = $fecha;
    }




    public function guardar(){
        try{
            $conn = new Conexion();
            $sql = "INSERT INTO persona(nombres, apellidos, edad, DNI, fecha) VALUES('$this->nombres','$this->apellidos', '$this->edad', '$this->DNI', '$this->fecha' )";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        }catch (\PDOException $e){
            return $e->getMessage();
        }
    }
}