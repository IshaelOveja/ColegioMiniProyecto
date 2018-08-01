<?php
namespace Rest\HTTP;

require_once dirname(__DIR__) . '\require_files.php';

use \Common\ErrorHandling\Message;

class HTTPService
{
    private $cn;
    private $bool = false;

    public function __construct()
    {
        try {
            $this->cn = new \PDO(CLIENT_SERVER["driver"] .
                ':host=' . CLIENT_SERVER["host"] .
                ';dbname=' . CLIENT_SERVER["db"], CLIENT_SERVER["uid"], CLIENT_SERVER["pssw"]);
            $this->cn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            print(Message::MessageError($e));
            exit();
        }
    }

    private function methodS($sentence = "")
    {
        try {
            return $this->cn->query($sentence)->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            print(Message::MessageError($e));
            exit();
        }
    }

    private function methodUID($sentence = "")
    {
        try {
            if ($this->cn->exec($sentence)):
                $this->bool = true;
            endif;
            return $this->bool;
        } catch (\Exception $e) {
            print(Message::MessageError($e));
            exit();
        }
    }

    public function returnArrayData($sql)
    {
        $data     = [];
        $response = $this->methodS($sql);
        foreach ($response as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function returnRow($sql)
    {
        return $this->methodUID($sql);
    }
}

//$class = new HTTPService();
//$sql   = "INSERT INTO USER (nombre,apellido,telefono) VALUES ('ISRAEL AAR&Oacute;N','VARGAS SALDA&Ntilde;A','962712648');";
//var_dump($class->returnRow($sql));
//$sql   = "SELECT * FROM USER";
//$data  = ($class->returnArrayData($sql));
//$keys  = array_keys($data[0]);
//foreach ($data as $row) {
//    foreach ($keys as $key) {
//        echo $row[$key] . "<br>";
//    }
//}