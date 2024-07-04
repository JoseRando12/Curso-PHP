<?php

$camisas_compradas = 2;
$precio = 10;
$total = ($camisas_compradas * $precio);

$total = ($camisas_compradas >= 3)? $total-($total*0.20) : $total-($total*0.10);

echo "El total a pagar es $ ".$total;

