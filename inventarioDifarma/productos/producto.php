<?php 

 class Productos{
//Se crea los atributos de la tabla en MYSQL en orden y privados para que no se puedan tomar en otra funcion o clase y se almacenan dentro de la clase Productos
 	private $codigop;
 	private $nombrep;
    private $miligramosp;
    private $laboratoriop;
    private $cantidadp;
    private $presentacionp;
    private $mililitrosp;
    private $fecha_vencimientop;
//Se genera una funcion constructor y mediante funciones se recibe y que quita la ambiguedad de cada campo de la tabla tanto en la base de datos como en html, teniendo en cuenta el orden de la base de datos.
 	function __construct(){}

    public function getCodigop(){
        return $this->codigop;
    }
    public function setCodigop($codigop){
        $this->codigop=$codigop;
    }

 	public function getNombrep(){
 		return $this->nombrep;
 	}
 	public function setNombrep($nombrep){
 		$this->nombrep=$nombrep;
 	}
     public function getMiligramosp(){
        return $this->miligramosp;
    }
    public function setMiligramosp($miligramosp){
        $this->miligramosp=$miligramosp;
    }
    public function getLaboratoriop(){
        return $this->laboratoriop;
    }
    public function setLaboratoriop($laboratoriop){
        $this->laboratoriop=$laboratoriop;
    }    
    public function getCantidadp(){
        return $this->cantidadp;
    }
    public function setCantidadp($cantidadp){
        $this->cantidadp=$cantidadp;
    }

    public function getPresentacionp(){
        return $this->presentacionp;
    }
    public function setPresentacionp($presentacionp){
        $this->presentacionp=$presentacionp;
    }    
    public function getMililitrosp(){
        return $this->mililitrosp;
    }
    public function setMililitrosp($mililitrosp){
        $this->mililitrosp=$mililitrosp;
    }

    public function getFecha_vencimientop(){
        return $this->fecha_vencimientop;
    }
    public function setFecha_vencimientop($fecha_vencimientop){
        $this->fecha_vencimientop=$fecha_vencimientop;
    }
 } 
 ?>