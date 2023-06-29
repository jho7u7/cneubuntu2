<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapas extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("CandidatoModel");
  }

  public function mapaPresidente()
  {
  	$dataP["lugaresPre"]= $this->CandidatoModel->obtenerTodosPresidentes();
  	$this->load->view('header');
  	$this->load->view('mapas/mapaPresidente', $dataP);
  	$this->load->view('footer');
  }
  public function mapaAsambleista()
  {
  	$dataA["lugaresAsam"]= $this->CandidatoModel->obtenerTodosAsambleistas();
  	$this->load->view('header');
  	$this->load->view('mapas/mapaAsambleista', $dataA);
    $this->load->view('footer');
  }
  public function mapaAsambleistaPro()
  {
  	$dataAP["lugaresAsamPro"]= $this->CandidatoModel->obtenerTodosAsambleistasPro();
  	$this->load->view('header');
  	$this->load->view('mapas/mapaAsambleistaPro', $dataAP);
  	$this->load->view('footer');
  	}

  public function mapaGeneral()
  {
    $data["lugaresPre"]=$this->CandidatoModel->obtenerTodosPresidentes();
    $data["lugaresAsam"]=$this->CandidatoModel->obtenerTodosAsambleistas();
    $data["lugaresAsamPro"]=$this->CandidatoModel->obtenerTodosAsambleistasPro();
    $this->load->view('header');
  	$this->load->view('mapas/mapaGeneral', $data);
  	$this->load->view('footer');
  }

  public function mapaDoI()
  {
    $data["lugaresDerecha"]=$this->CandidatoModel->obtenerTodosDerecha();
    $data["lugaresIzquierda"]=$this->CandidatoModel->obtenerTodosIzquierda();
    $this->load->view('header');
  	$this->load->view('mapas/mapaDoI', $data);
  	$this->load->view('footer');
  }

}// cierre de class

 ?>
