<?php
    require 'libs/IPoligono.php';
    require 'libs/Cuadrado.php';
    require 'libs/Rectangulo.php';
    
    function area(IPoligono $obj)
    {
        $obj->calcular();
    }
    
    $cuadrado = new Cuadrado();
    $rectangulo = new Rectangulo();
    
    area($cuadrado);
    area($rectangulo); 
    