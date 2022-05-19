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

// punto

namespace ITEC\DAW\PROGRAMACION\puntos;

class Punto{
    private int $x;
    private int $y;

    public function __construct(int $x = 0, int $y = 0) { //Le pongo 0 para que sea inicializando en 0
        $this->x = $x;
        $this->y = $y;
    }

    public function setPosition(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }
    
    public function move(int $direccionx, int $direcciony){ //Para el movimiento relativo cuantas casillas se mueven en cada eje
        $this->x += $direccionx;
        $this->y += $direcciony;
    } 

    public function getPosition(){ //Devolviendo las coordenadas que ya se tienen
        return[
            "x" => $this->x,
            "y" => $this->y
        ];
    }

    public function copy(Punto $punto){  //Creamos un tipo punto, de su clase.
        $coordenadas = $punto->getPosition(); //va a coger las coordenadas de otro punto y lo copia.

        $this->setPosition($coordenadas["x"], $coordenadas["y"]);  // Ahora se le da a este punto las coordenadas del anterior
    }

    public function distanceTo(Punto $punto){ //Para calcular la distancia entre dos puntos. 
        $positionB = punto->getPostion();

        $distanceX = $positionB["x"] - $this->x;
        $distanceY = $positionB["y"] - $this->y;

        return sqrt($distanceX * $distance + $distanceY * $distanceY); //Por la fórmula de raiz cuadrada por a² y b² 

    }


}














?>