<!DOCTYPE html>
<html>
<body>

<?php
	class Banco{
    	//atributos
        var $Cliente;
        var $Cuenta;
        var $Empleado;
        var $Dinero;
        
        //constructor
        function Banco($cliente, $cuenta, $empleado, $dinero){
        	$this->Cliente=$cliente;
            $this->Cuenta=$cuenta;
            $this->Empleado=$empleado;
            $this->Dinero=$dinero;
        }
        
        //metodos
        function EstadoActual(){
        	$dinero = ($this->Dinero);
            $cliente = ($this->Cliente);
            
            echo "El cliente ".$cliente." tiene ".$dinero." dolares";
            echo "<br>";
            echo "<br>";
        }
        function Transaccion(){
        	$dinero = ($this->Dinero);
            $cliente = ($this->Cliente);
            $cuenta = ($this->Cuenta);
            $empleado = ($this->Empleado);
            
            echo "El empleado ".$empleado." realizo una transaccion por ".$dinero." Dolares a la cuenta de ".$cuenta." del cliente ".$cliente;
            echo "<br>";
            echo "<br>";
        }
        function Vacaciones(){
        	$empleado = ($this->Empleado);
            
            echo "El empleado ".$empleado. " Sale a vacaciones el 1 de Diciembre del 2024";
        }
        
    }
    
    $objeto = new Banco("Juanito",0,0,300);
    $objeto->EstadoActual();
    $objeto = new Banco("Juanito","5A21F2525","Jefferson",3500);
    $objeto->Transaccion();
    $objeto = new Banco(0,0,"Jefferson",0);
    $objeto->Vacaciones();
?> 

</body>
</html>