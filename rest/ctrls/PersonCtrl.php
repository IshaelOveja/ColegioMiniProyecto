<?php
namespace Rest\Controllers;

require_once dirname(__DIR__) . '\require_files.php';

use Rest\Bo\PersonBo;
use Rest\Models\Person;

class PersonCtrl
{
    private $bo;
    private $response;

    public function __construct()
    {
        $this->bo = new PersonBo();
    }

    public function serviceProvider(Person $obj, $option = "")
    {
        switch ($option) {
            case "I":
                $this->response = $this->bo->methodI($obj);
                break;
            case "U":
                $this->response = $this->bo->methodU($obj);
                break;
            case "D":
                $this->response = $this->bo->methodD($obj);
                break;
            case "SID":
                $this->response = $this->bo->listPersonByDNI($obj);
                break;
            default:
                $this->response = $this->bo->listPersonAll();
                break;
        }
        return $this->response;
    }
}
