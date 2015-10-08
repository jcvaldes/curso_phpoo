<?php
// require 'Autos/Vehiculo.php';
// require 'Autos/Ferrari.php';
// require 'Autos/Fiat.php';
// require 'Autos/Corsa.php';

// $ferrari = new Ferrari();
// $ferrari->avanzar();
// echo $ferrari->getNafta();

// $fiat = new Fiat();
// $fiat->avanzar();
// echo $fiat->getNafta();

// $corsa = new Corsa(200);
// $corsa->avanzar();
// echo $corsa->getNafta();

    require 'Animales/Animal.php';
    require 'Animales/Gato.php';
    require 'Animales/Perro.php';
    
    $animal = new Gato();
    echo $animal->emitirSonido() .'\r\n';
    echo $animal->correr() .'\r\n';
    
    $animal = new Perro();
    echo $animal->emitirSonido() .'\r\n';
    echo $animal->correr().'\r\n';
    
    
    
    
    