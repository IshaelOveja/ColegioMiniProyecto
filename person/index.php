<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';
use Rest\Controllers\PersonCtrl;
use Rest\Models\Person;
$person = new Person("46404221","ISRAEL","AAR&Oacute;N","VARGAS","SALDA&Ntilde;A","962712648","israelvargas@hotmail.com","1");
$person_ctrl = new PersonCtrl();
$render = $person_ctrl->serviceProvider($person);
print_r($render);


