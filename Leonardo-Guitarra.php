<!DOCTYPE html>
<html>
<body>

<?php
class Guitar {
	var $model;
    var $brand;
    var $tuning;
    var $color;
    
    function Guitar($m, $b, $t, $c) {
    	$this->model = $m;
        $this->brand = $b;
        $this->tuning = $t;
        $this->color = $c;
    }
    
    function ChangeTone($new_tone) {
    	$this->tuning = $new_tone;
        
        echo "El nuevo tono es: ".$new_tone;
        echo "<br>";
    }
    
    function PlayGuitar() {
    	echo "Tocando guitarra";
    }
    
    function ChangeStrings() {
    	echo "Cambiando las cuerdas";
    }
}

$object = new Guitar("StratoCaster", "Fender", "Fa", "Rojo");
$object->ChangeTone("Mi");

$object2 = new Guitar("TeleCaster", "Fender", "Re", "Azul");
$object2->PlayGuitar();

?> 

</body>
</html>