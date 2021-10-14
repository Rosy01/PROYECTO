<?php
namespace app\modelo;
use config\Conexion;

require_once "config/Conexion.php";
class acceso
{
    private $idAcceso;
    private $tipoAcceso;
  
    public function getidAcceso(): int
    {
        return $this->idAcceso;
    }

    public function setidAcceso($idAcceso): void
    {
        $this->idAcceso = $idAcceso;
    }

    public function gettipoAcceso(): string
    {
        return $this->tipoAcceso;
    }

    public function settipoAcceso($tipoAcceso): void
    {
        $this->tipoAcceso = $tipoAcceso;
    }

  