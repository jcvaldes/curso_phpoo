<?php

abstract class Animal
{    
    abstract function emitirSonido();
    
    public function correr() {
       return 'animal corriendo';
    }
}

?>