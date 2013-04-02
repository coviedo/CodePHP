<?php

/**
 * 
 * Implementacion Metodo QuickSort
 * 
 */

$vector = array(3, 6, 7, 23, 34, 99, 1, 2, 4, 5, 33, 12, 11, 8, 9, 10);

$ordenado = quick($vector);

foreach ($ordenado as $value) {
    echo $value . "<br />";
}

function quick(array $vector) {
    
    $lng = count($vector);
    
    if (!$lng)
        return array();
    
    $lft  = $rght = array();
    
    $media = floor($lng / 2);
    $pivot = $vector[$media];
    $i = 0;
    
    while ($i < $lng) {
        
        if ($vector[$i] < $pivot) {
            
            $lft[] = $vector[$i];
            
        } else {
            
            if ($i != $media) {
                $rght[] = $vector[$i];
            }
        }
        $i++;
    }
    return array_merge(quick($lft), array($pivot), quick($rght));
}