<?php

include 'equipo.php';
include 'partido.php';
include 'cargarEquipos.php';

$amistoso = new Partido();
$amistoso->addLocal($equipo[0]);
$amistoso->addVisita($equipo[3]);

$amistoso->resultado(3,2);

echo $equipo[0]->getNombre();
echo $equipo[0]->getVictorias();
echo $equipo[0]->getEmpates();
echo $equipo[0]->getDerrotas();
echo $equipo[0]->getGoles();
echo $equipo[0]->getRecibidos();
echo $equipo[0]->getPuntos();
echo $equipo[0]->getDiferencia();

echo $equipo[3]->getNombre();
echo $equipo[3]->getVictorias();
echo $equipo[3]->getEmpates();
echo $equipo[3]->getDerrotas();
echo $equipo[3]->getGoles();
echo $equipo[3]->getRecibidos();
echo $equipo[3]->getPuntos();
echo $equipo[3]->getDiferencia();

?>