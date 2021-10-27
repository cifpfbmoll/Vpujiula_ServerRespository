<?php   

class Clases {

    public $Nombre;
    public $Tipo;
    public function __toString()
    {
      return $this->Nombre . ' '. $this->Tipo;
    }
    function __construct($Nombre, $Tipo) {
        $this->Nombre = $Nombre;
        $this->Tipo = $Tipo;}
};
?>