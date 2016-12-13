<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('prueba_model');
	}

	public function index(){
		$data['segmento']=$this->uri->segment(3);
		$this->load->view('headers');
		if(!$data['segmento']){
			$data['cursos']=$this->prueba_model->obtener_cursos();
		}else{
			$data['cursos']=$this->prueba_model->obtener_curso($data['segmento']);
		}
		$this->load->view('mostrar', $data);
	}


	public function crear(){
		$this->load->view('headers');
		$this->load->view('formulario');

	}

	public function recibir_datos(){
		$data=array('nombre'=>$this->input->post('nombre'), 'sinopsis'=>$this->input->post('sinopsis'), 'fecha'=>$this->input->post('fecha'), 'cantidad'=>$this->input->post('cantidad'));
		$this->prueba_model->crear_pelicula($data);
		$this->load->view('headers');
		$this->load->view('formulario');
	}

	public function mostrar(){
		$this->load->view('headers');
		$data['peliculas']=$this->prueba_model->obtener_peliculas();
		$this->load->view('mostrar', $data);

	}

	public function arrendar(){
		$this->load->view('headers');
		$this->load->view('arrendar');
	}

	public function obtenerNombre(){
		$data['nombre']=array('nombre'=>$this->input->post('nombre'));
		$datax['cantidad']=$this->prueba_model->arrendar_model($data['nombre']);
		$this->load->view('headers');
		$this->load->view('exito', $datax);
	}
}
