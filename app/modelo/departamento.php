<?php
namespace app\modelo;
use config\Conexion;

require_once "config/Conexion.php";
class departamento
{
    private $id;
    private $nombre;
  
    public function getid(): int
    {
        return $this->id;
    }

    public function setid($id): void
    {
        $this->id = $id;
    }

    public function getnombre(): string
    {
        return $this->nombre;
    }

    public function setnombre($nombre): void
    {
        $this->nombre = $nombre;
    }

  