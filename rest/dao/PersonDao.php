<?php
/*
 * DAO UDI Person
 */
namespace Rest\Dao;

require_once dirname(__DIR__) . '\require_files.php';

use Rest\HTTP\HTTPService;
use Rest\Models\Person;

class PersonDao
{
    private $cn;

    public function __construct()
    {
        $this->cn = new HTTPService();
    }
    
    public function returnSentenceS($sql)
    {
        return $this->cn->returnArrayData($sql);
    }

    public function insertPerson(Person $obj)
    {
        $sql = "INSERT INTO USER "
            . "(DNI, NOMBRE1, NOMBRE2, APELLIDO1, APELLIDO2, TELEFONO, CORREO, ESTADO)"
            . " VALUES ('{$obj->getDni()}','{$obj->getNombre1()}','{$obj->getNombre2()}',"
            . "'{$obj->getApellido1()}','{$obj->getApellido2()}','{$obj->getTelefono()}',"
            . "'{$obj->getCorreo()}', '1')";
        echo $sql;
        //return $this->cn->returnRow($sql);
    }
    
    public function updatePerson(Person $obj)
    {
        $sql = "UPDATE USER SET "
            . "DNI = '{$obj->getDni()}', NOMBRE1 = '{$obj->getNombre1()}', "
            . "NOMBRE2 = '{$obj->getNombre2()}', APELLIDO1 = '{$obj->getApellido1()}', "
            . "APELLIDO2 = '{$obj->getApellido2()}', TELEFONO = '{$obj->getTelefono()}', "
            . "CORREO = '{$obj->getCorreo()}' WHERE DNI = '{$obj->getDni()}'";
        echo $sql;
        //return $this->cn->returnRow($sql);
    }
    
    public function deletePerson(Person $obj)
    {
        $sql = "UPDATE INTO USER ESTADO = '0' WHERE DNI = '{$obj->getDni()}'";
        echo $sql;
        //return $this->cn->returnRow($sql);
    }
}
