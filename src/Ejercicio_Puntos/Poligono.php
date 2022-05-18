<?php

namespace ITEC\DAW\PROGRAMACION\puntos;

class Poligono{
    protected array $puntos;
    
    public function __construct(array $puntos){  //pARAR POR ARGUMENTOS UNA ARRAY POR PUNTOS. SE DA POR HECHO QUE LO SON
        $this->puntos = $puntos;
    }

    public function getPuntos{
        return $this->puntos;
    }
}

?>