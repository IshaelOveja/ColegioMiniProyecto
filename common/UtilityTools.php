<?php
namespace Common\UtilityTools;

class Tools
{

    public function ConvertString($str)
    {
        $mayusculas = ['á' => '&Aacute;', 'é' => '&Eacute;', 'í' => '&Iacute;', 'ó' => '&Oacute;', 'ú' => '&Uacute;', 'ñ' => '&Ntilde;'];
        return mb_strtoupper(strtr($str, $mayusculas));
    }
}
