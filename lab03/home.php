<?php 
    require 'config.php';
    require 'helpers.php';
    
    $language = "PHP";
    $title = "un titulo";
    
    $confidential = "Esto es privado y debe estar encapsulado para no verse en la vista";
    
    view('home', compact('language', 'title' ));
  
