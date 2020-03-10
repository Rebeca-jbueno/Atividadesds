<?php

    header ("Content-Type: text/html;charset-utf-8");
    
    $custocusto = 90;
    $venda = 100;

    $lucro = $venda - $custocusto:
    $porcent = $lucro/$venda*100;

    echo "O lucro é - " . $lucro . "R$";
    echo "<br> <br>";
    echo "A porcentagem é de". round($porcent, 2)


    exit ; 
    ?>
