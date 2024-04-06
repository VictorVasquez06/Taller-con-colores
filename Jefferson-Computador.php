<!DOCTYPE html>
<html>
<body>

<?php
class Computador{
//atributos
var $pantalla;
var $teclado;
var $mouse;
var $cpu;
// contructor
	function Computador($p,$t,$m,$c){
		$this->pantalla = $p;
        $this->teclado = $t;
        $this->mouse = $m;
        $this->cpu = $c;
}
//metodo 
function Encender(){
$encender=($this->pantalla + $this->teclado + $this->mouse + $this->cpu);
echo " El equipo esta Encendido: ".$encender;
}
function Apagar(){
$apagar=($this->pantalla + $this->teclado + $this->mouse + $this->cpu);
echo "<br>";
echo " El equipo esta Apagado: ".$apagar;
}
function Escribir(){
$escribir=($this->pantalla + $this->teclado + $this->mouse + $this->cpu);
echo "<br>";
echo " El teclado esta encendido puede escribir: ".$escribir;
}
}
$objeto= new Computador (1,1,1,1);
$objeto->Encender();

$objeto= new Computador (0,0,0,0);
$objeto->Apagar();

$objeto= new Computador (0,1,0,0);
$objeto->Escribir();
?> 

</body>
</html>