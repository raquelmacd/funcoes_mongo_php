<?php
require_once __DIR__."/../../core/mongo/findall.php";

$marcas = 'ecommerce.marcas';

$mostrarMarcas = findAll($marcas);


require_once __DIR__."/../../views/produtos/add.php";