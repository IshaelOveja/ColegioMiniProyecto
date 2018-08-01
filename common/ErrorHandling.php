<?php
namespace Common\ErrorHandling;
class Message{

    public static function MessageError(\Exception $e)
    {
        echo "<code>Error en el archivo <strong>" . $e->getTrace()[0]["file"] .
            ":" . $e->getTrace()[0]["line"] .
            "</strong> debido al error <strong>" . $e->getMessage() . "</strong><code>";
    }
}

    