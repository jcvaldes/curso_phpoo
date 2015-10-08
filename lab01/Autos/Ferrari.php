<?php

class Ferrari extends Vehiculo
{
    public function avanzar() {
        $this->nafta -= 20;
    }
}
?>