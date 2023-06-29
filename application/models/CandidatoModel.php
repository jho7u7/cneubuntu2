<?php

class CandidatoModel extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function obtenerTodos(){
    $listadoCan=$this->db->get('Candidato');
    if($listadoCan->num_rows()>0){
      return $listadoCan->result();
    }
    return false;
  }

  function obtenerTodosPresidentes(){

    $listadoPre=$this->db->select()->where('dignidad_can','Presidente')->get("Candidato");
    if ($listadoPre->num_rows()>0){
        return $listadoPre->result();
      }
      return false;
  }
  function obtenerTodosAsambleistas(){
    $listadoAsam=$this->db->select()->where('dignidad_can','Asambleista_Nacional')->get("Candidato");
    if ($listadoAsam->num_rows()>0){
      return $listadoAsam->result();
    }
    return false;
  }
  function obtenerTodosAsambleistasPro(){
    $listadoAsamPro=$this->db->select()->where('dignidad_can','Asambleista_Provincial')->get("Candidato");
    if ($listadoAsamPro->num_rows()>0){
      return $listadoAsamPro->result();
    }
    return false;
  }

  function obtenerTodosDerecha(){
    $listadoDerecha=$this->db->select()->where('tipo_can','Derecha')->get("Candidato");
    if ($listadoDerecha->num_rows()>0){
      return $listadoDerecha->result();
    }
    return false;
  }

  function obtenerTodosIzquierda(){
    $listadoIzquierda=$this->db->select()->where('tipo_can','Izquierda')->get("Candidato");
    if ($listadoIzquierda->num_rows()>0){
      return $listadoIzquierda->result();
    }
    return false;
  }


} //fin de la class

 ?>
