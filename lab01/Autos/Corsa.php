<?php

class Corsa extends Vehiculo
{
    function __construct($nafta)
    {
        $this->nafta = $nafta;    
    }
    
    public function avanzar() {
        $this->nafta -= 40;
    }
}
?>