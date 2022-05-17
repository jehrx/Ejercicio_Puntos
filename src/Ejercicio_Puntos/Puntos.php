<?php
/*
Crea una clase que represente un punto en un plano 2D:

PUNTO 1 ->  Crea un método que mueva el punto de forma absoluta. 
            Es decir, que tome como entrada la posición en el eje x e y y establezca sus valores.

PUNTO 2 -> Crea un método que mueva el punto de forma relativa. 
           Es decir, que tome un offset de entrada, x e y, y traslade el punto tantas posiciones cómo los valores indicados.

PUNTO 3 -> Crea un método que copia la posición de un punto en otro dado por parámetro.

Tomando cómo base esta clase crea otra que represente un polígono

PUNTO 4 -> Implementar por herencia cuadrado, círculo y rectángulo. todos ellos deberán poder calcular su área.

*/

 class punto{
     
    private int $ejeX;
    private int $ejeY;

    public function __construct(int $ejeX, int $ejeY){
        $this->ejeX = $ejeX;
        $this->ejeY = $ejeY; 
    }

    public static function nuevoPunto(int $ejeX, int $ejeY){
        return new punto($ejeX, $ejeY);
    }




 }
 












?>