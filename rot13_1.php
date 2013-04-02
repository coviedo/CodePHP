<?php

/**
 * 
 * Sencilla Implementacion De ROT13
 * 
 * @param String $myStr
 * @return String
 * 
 */
function rot13($myStr) {
    
    $arrStr = str_split($myStr);
    $cadena = '';
    $arrAbs = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $newArray = str_split($arrAbs);

    for ($i = 0; $i < count($arrStr); $i++) {
        $chr = $arrStr{$i};
        $chrUpper = strtoupper($chr);
        $posChr   = FALSE;
        
        if (($posChr = strpos($arrAbs, $chrUpper))) {
            $index = ($posChr < (26 / 2)) ? ((26 / 2) + $posChr) : ($posChr - 13);
            $newChr = $newArray{$index};
            $chr = (ord($chrUpper) >= ord($chr)) ? strtoupper($newChr): strtolower($newChr);
        }
        
        $cadena .= $chr;
    }
    return $cadena;
}

echo rot13('Hola');
