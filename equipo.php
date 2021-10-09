<?php

class Equipo{

	private $nombre;
	private $victorias;
	private $goles;
	private $recibidos;
	private $empates;
	private $derrotas;
	private $amarillas;
	private $rojas;

	function __construct(){
		$this->nombre = "";
        $this->victorias = 0;
        $this->goles = 0;
        $this->recibidos = 0;
        $this->empates = 0;
        $this->derrotas = 0;
        $this->amarillas = 0;
        $this->rojas = 0;
	}

	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getNombre(){
		return $this->nombre;
	}

	function addVictoria($goles, $recibidos){
		$this->victorias += 1;
		$this->goles += $goles;
		$this->recibidos += $recibidos;
	}

	function getVictorias(){
		return $this->victorias;
	}

	function addEmpate($goles, $recibidos){
		$this->empates += 1;
		$this->goles += $goles;
		$this->recibidos += $recibidos;
	}

	function getEmpates(){
		return $this->empates;
	}

	function addDerrota($goles, $recibidos){
		$this->derrotas += 1;
		$this->goles += $goles;
		$this->recibidos += $recibidos;
	}

	function getDerrotas(){
		return $this->derrotas;
	}

	function getGoles(){
		return $this->goles;
	}

	function getRecibidos(){
		return $this->recibidos;
	}

	function addAmarillas($amarillas){
		$this->amarillas += $amarillas;
	}

	function getAmarillas(){
		return $this->amarillas;
	}

	function addRojas($rojas){
		$this->rojas += $rojas;
	}

	function getRojas(){
		return $this->rojas;
	}

	function getJuegos(){
		return $this->victorias + $this->empates + $this->derrotas;
	}

	function getPuntos(){
		return $this->victorias * 3 + $this->empates;
	}

	function getDiferencia(){
		return $this->goles - $this->recibidos;
	}

}

?>