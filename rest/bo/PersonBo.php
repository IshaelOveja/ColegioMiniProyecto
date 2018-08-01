<?php
/*
 * BO S Person
 */
namespace Rest\Bo;

require_once dirname(__DIR__) . '\require_files.php';

use Rest\Dao\PersonDao;
use Rest\Models\Person;

class PersonBo
{
    private $dao;

    public function __construct()
    {
        $this->dao = new PersonDao;
    }

    public function listPersonByDNI(Person $obj)
    {
        $sql = "SELECT * FROM USER WHERE DNI = '{$obj->getDni()}'";
        echo $sql;
        //return $this->dao->returnSentenceS($sql);
    }

    public function listPersonAll()
    {
        $sql = "SELECT * FROM USER";
        echo $sql;
        //return $this->dao->returnSentenceS($sql);
    }

    public function methodU(Person $obj)
    {
        return $this->dao->updatePerson($obj);
    }

    public function methodI(Person $obj)
    {
        return $this->dao->insertPerson($obj);
    }

    public function methodD(Person $obj)
    {
        return $this->dao->deletePerson($obj);
    }
}
