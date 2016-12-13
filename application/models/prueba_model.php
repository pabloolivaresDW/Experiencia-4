<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Prueba_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function crear_pelicula($data){
  	$this->db->insert('peliculas', array('nombre'=>$data['nombre'], 'sinopsis'=>$data['sinopsis'], 'fecha_estreno'=>$data['fecha'], 'cantidad'=>$data['cantidad']));
  }

  public function obtener_peliculas(){
  	$query=$this->db->get('peliculas');
  	if($query->num_rows()>0){
  		return $query;
  	}else{
  		return false;
  	}
  }

  public function arrendar_model($nombre){
  	$this->db->where('nombre', $nombre['nombre']);
  	$query=$this->db->get('peliculas');
  	if($query->num_rows()>0){
      $peliculas=$query->result();
      
      if($peliculas['0']->cantidad<0){
        return false;
      }
  	}else{
  		return true;
  	}
  }
}