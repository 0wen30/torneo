<?php

class Partido{

    private $casa;
    private $visita;
 
    function __construct(){
        $this->casa = new Equipo();
        $this->visita = new Equipo();
    }
 
    function addLocal($casa){
       $this->casa = $casa;
    }
 
    function addVisita($visita){
       $this->visita = $visita;
    }
 
    function getLocal(){
       return $this->casa;
    }
 
    function getVisita(){
       return $this->visita;
    }

    function resultado($golescasa,$golesVisita){
        if ($golescasa > $golesVisita) {
            $this->casa->addVictoria($golescasa,$golesVisita);
            $this->visita->addDerrota($golesVisita,$golescasa);
        }else if ($golescasa < $golesVisita) {
            $this->casa->addDerrota($golescasa,$golesVisita);
            $this->visita->addVictoria($golesVisita,$golescasa);
        }else if ($golescasa == $golesVisita) {
            $this->casa->addEmpate($golescasa,$golesVisita);
            $this->visita->addEmpate($golesVisita,$golescasa);
        }
    }

}
?>