<?php
namespace Rest\Models;

class Person
{
    private $dni;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $telefono;
    private $correo;

    public function __construct($dni, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $correo)
    {
        $this->dni       = $dni;
        $this->nombre1   = $nombre1;
        $this->nombre2   = $nombre2;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->telefono  = $telefono;
        $this->correo    = $correo;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getNombre1()
    {
        return $this->nombre1;
    }

    public function getNombre2()
    {
        return $this->nombre2;
    }

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function getApellido2()
    {
        return $this->apellido2;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
}