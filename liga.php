<?php

class Liga{

    private $numEquipos;
    private $numjuego;
    private $numPartidosPorRonda;
    private $equipo;
    private $juego;
 
    function __construct($eq){
        $this->numEquipos = count($eq);
        $this->equipo = [];
        $this->numjuego = $this->numEquipos - 1;
        $this->numPartidosPorRonda = $this->numEquipos / 2;
        $this->juego = [];
    }
 
    function calendario($eq){
        $index = 0;
        $clubes = $eq;
        $aux = count($clubes);
        $impar = $aux%2 != 0;
        if ($impar)
            $aux += 1;
        $jornada = array();
        $indice_inverso = $aux - 2;
        for ($i=1; $i < $aux; $i++) { 
            $equipos = array();
            for ($indiceP=0; $indiceP < $this->numPartidosPorRonda; $indiceP++) { 
                if ($index > $aux-2) {
                    $index = 0;
                }
                if ($indice_inverso < 0) {
                    $indice_inverso = $aux-2;
                }
                if ($indiceP == 0) {
                    if ($impar) {
                        $equipos[] = $clubes[$index];
                    }else{
                        if (($i+1)%2 == 0) {
                            $partido = [$clubes[$index],$clubes[$aux-1]];
                        }else{
                            $partido = [$clubes[$aux-1],$clubes[$index]];        
                        }
                        $equipos[] = $partido;
                    }
                }else{
                    $partido = [$clubes[$index],$clubes[$indice_inverso]];
                    $equipos[] = $partido;
                    $indice_inverso--;
                }
                $index++;
            }
            $jornada[] = $equipos;
        }
        return $jornada;
    }

    function mostrarPartidos($partido){
       echo "\nNUEVA LIGA\n";        
       for ($i = 0; $i < count($partido); $i ++){
          echo "Jornada " + ($i + 1) + ": \n";            
          for ($j = 0; $j < count($partido[$i]); $j ++){
             echo "   " + $partido[$i][$j]->getLocal()->getNombre() + "-" + $partido[$i][$j]->getVisita()->getNombre();
          }
          echo "\n\n";
       }
    }
 }

?>