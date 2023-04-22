<?php 
class Grados {
    public $centigrados;
    
    function __construct($centigrados) {
      $this->centigrados = $centigrados;
    }
    
    function convertir() {
      $fahrenheit = ($this->centigrados * 9 / 5) + 32;
      return $fahrenheit;
    }
  }
  
  $grados = new Grados(70);
  echo "70 grados centígrados son " . $grados->convertir() . " grados Fahrenheit.";
?>
