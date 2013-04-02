<?php

/**
 * 
 * Sencilla Implementacion De ROT13
 * 
 * @param String $myStr
 * @return Array
 * 
 */
function rot13($myStr = 'Hola Mundo!') {
    
    $result = array_map(function($chr = '_') {
        $arrAbs   = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $chrUpper = strtoupper($chr);
        $posChr   = FALSE;
        
        if (($posChr = strpos($arrAbs, $chrUpper))) {
            $index = ($posChr < (26 / 2)) ? ((26 / 2) + $posChr) : ($posChr - 13);
            $newArray = str_split($arrAbs);
            $newChr = $newArray{$index};
            $chr = (ord($chrUpper) >= ord($chr)) ? strtoupper($newChr): strtolower($newChr);
        }
        
        return $chr;
    }, str_split($myStr));
    
return $result;
}

$myStr = 'Hola Mundo';
var_dump(rot13($myStr));