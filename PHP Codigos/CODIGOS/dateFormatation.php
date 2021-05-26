function dataFormatation($date, &$msg){

    // $validation = preg_match('/^([0-9]{4})[.\/-]([0-12]{2})[.\/-]([0-31]{2})/i', $date,$outputDate);
    $validation = preg_match('/^([0-31]{2})[.\/-]([0-12]{2})/i', $date, $outputDate);
    $dia = (int) $outputDate[1];
    $mes = (int) $outputDate[2];

    // $mes["30"] = Array(2, 4, 6, 9, 11);
    // $mes["31"] = Array(1, 4, 5, 7, 8, 10, 12);

    if($dia > 30  && ($mes == 2 || $mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) ){
        $validaMes = false;
    }
    // mes com 31 dias
    else if($dia > 31 && ($mes == 1 || $mes == 4 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) ){
        $validaMes = false;
    }else{
        $validaMes = true;
    }
    
    $validation = (($dia > 0 && $dia <= 31) && ($mes > 0 && $mes <= 12) && $validaMes);

    $dia = (string) $dia;
    $mes = (string) $mes;
    
    if(!$validation || $date == "0000-00-00"){
        $newDate = false;
    }else{
        $newDate = "$dia/$mes";
    }

    return $newDate;
    
}
