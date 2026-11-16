<?php
function calculFacture(int $age ,float $tarifBase ){
    $tot = $tarifBase;
    if ($age > 65) {
        $tot=$tot*1.20;
    }
    return $tot;
       
}
?>