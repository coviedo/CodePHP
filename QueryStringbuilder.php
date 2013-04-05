<?php

 $tbCompania = array(
       'Nombre'       =>  '2013-08-10'
     , 'RazonSocial'  =>  'Prueba S.R.L'
     , 'Direccion'    =>  'C/Prueba No.234 Enc: Pruebas'
     , 'Web'          =>  'www.prueba.net'
     , 'CodPostal'    =>   3984773
 );

 echo formatSql($tbCompania,  'compania');

 
 /**
  * 
  * @param array $dataArray
  * @param string $tabla
  * @return string
  */
 function formatSql(array $dataArray, $tabla) {
     
     $sqlString = '';
     $insertStr = 'INSER INTRO ' . $tabla;
       
     $row  = 'VALUES' . $field = '(';
     
     foreach ($dataArray as $index => $value) {
         $field .= '`' . $index . '`,';
         $row   .= (is_string($value )) ? "'" . $value . "'," : $value . ',';
     }
     
     $field =  trim($field, ',') . ')';
     $row   =  trim($row, ',') . ')';
     
     $sql = $insertStr . $field . $row;
     return $sql;
 }
   
   /**
    *
    * ------- Salida ---------
    *
    * INSERT INTO Compania(`Nombre`, `Razon`, `Direccion`, `Web`, `CodPostal`) VALUES ('Prueba',   'Prueba S.R.L', 'C/Prueba No.234 Enc: Pruebas', 'www.prueba.net', 3984773);
    *
    */
