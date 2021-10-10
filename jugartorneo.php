<?php

include 'equipo.php';
include 'partido.php';
include 'liga.php';
include 'cargarEquipos.php';

$cargar = new liga($equipo);
$partido = new Partido();

$liga = $cargar->calendario($equipo);

$j = 0;
foreach($liga as $jornadas){
    echo "Jornada ".++$j;
    echo "<br>";
    foreach($jornadas as $club){
        $gl = rand(0,5);
        $gv = rand(0,5);
        $partido->addLocal($club[0]);
        $partido->addVisita($club[1]);
        $partido->resultado($gl,$gv);
        echo $club[0]->getNombre()."  ".($gl)." - ".($gv)."  ".$club[1]->getNombre();
        echo "<br>";
    }
    echo "<br>";
}

for ($i=0; $i < 18; $i++) { 
    echo $equipo[$i]->getNombre();echo " | ";
    echo $equipo[$i]->getVictorias();echo " | ";
    echo $equipo[$i]->getEmpates();echo " | ";
    echo $equipo[$i]->getDerrotas();echo " | ";
    echo $equipo[$i]->getGoles();echo " | ";
    echo $equipo[$i]->getRecibidos();echo " | ";
    echo $equipo[$i]->getPuntos();echo " | ";
    echo $equipo[$i]->getDiferencia();echo " | ";
    echo "<br>";
}

?>