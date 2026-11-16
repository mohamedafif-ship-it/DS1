<?php
function calculFacture(int $age ,float $tarifBase ){
    $tot = $tarifBase;
    if ($age > 65) {
        $tot=$tot*1.20;
    }
    return $tot;
       
}
function getBadgeService( int $code):array{
    switch($code){
        case'cardiologue':
            return [libelle => "CARDIO",classe =>"c"];
            break;
        case'dermatologue':
            return [libelle => "DERMA",classe =>"d"];
            break;
        case'pediatrie':
            return [libelle => "PED",classe =>"P"];
            break;
    }
}
?>