<?php

class Fiat extends Vehiculo
{
    
    public function avanzar() {
        $this->nafta -= 40;
    }
}
?>