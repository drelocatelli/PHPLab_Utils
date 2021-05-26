function DataFormatation($date, &$msg){

    // $validation = preg_match('/^([0-9]{4})[.\/-]([0-12]{2})[.\/-]([0-31]{2})/i', $date,$outputDate);
    $validation = preg_match('/^([0-31]{2})[.\/-]([0-12]{2})/i', $date, $outputDate);
    $dia = (int) $outputDate[1];
    $mes = (int) $outputDate[2];

    $validation = (($dia > 0 && $dia <= 31) && ($mes > 0 && $mes <= 12));
    $dia = (string) $dia;
    $mes = (string) $mes;
    $newDate = "$dia/$mes";
    
    if($validation){
        return $newDate;
    }else{
        $msg = '<div class="alert alert-danger" role="alert"><strong>Formato de data inválido!</strong></div>';
        return false;
    }
    
}
