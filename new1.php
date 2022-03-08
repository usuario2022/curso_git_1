<?php 
// public— a propriedade ou método está disponível em qualquer lugar. Este é o padrão
// // protected- uma propriedade ou método pode ser acessado dentro da classe e classes derivadas desta classe
// private- propriedade ou método pode ser acessado SOMENTE dentro da classe

// class Car {
//     public $name;
//     protected $color;
//     private $disk;
//   }
  
//   $bmv = new Car();
//   $bmv->name = 'BMV'; // OK
//   $bmv->color = 'Yellow'; // ERROR
//   $bmv->disk = 'Stamped'; // ERROR


class Car{
    public $variavel1; 
    public $variavel2; 
}

$objeto = new Car(); 
$objeto->variavel1="valor da variavel 1"; 
$objeto->variavel2="valor da variavel 2"; 

echo $objeto->variavel1. ' - '.$objeto->variavel2; 



?>