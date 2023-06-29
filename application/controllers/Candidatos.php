<?php

  class Candidatos extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       $this->load->model('Candidato'); //para llamar ese mmodelo dentro del conssttructor
    }
    //funciones que reenderiza a vista index
    public function indexc()
    {
      $data['candidatos']=$this->Candidato->obtenerTodos();
      $this->load->view('header');
      $this->load->view('candidatos/indexc',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevoc()
    {
      $this->load->view('header');
      $this->load->view('candidatos/nuevoc');
      $this->load->view('footer');
    }

    public function guardar(){
      $datosNuevoCandidato=array(
        "cedula_can"=>$this->input->post('cedula_can'),
        "dignidad_can"=>$this->input->post('dignidad_can'),
        "apellido_can"=>$this->input->post('apellido_can'),
        "nombre_can"=>$this->input->post('nombre_can'),
        "movimiento_can"=>$this->input->post('movimiento_can'),
        "tipo_can"=>$this->input->post('tipo_can'),
        "telf_can"=>$this->input->post('telf_can'),
        "latitud_can"=>$this->input->post('latitud_can'),
        "longitud_can"=>$this->input->post('longitud_can')
      );
      if ($this->Candidato->
      insertar($datosNuevoCandidato)){
        redirect('candidatos/indexc');
      }else {
          echo "Error al insertar Candidatos";
      }
        // code...
    }
    public function eliminar($id_can){
            if ($this->Candidato->borrar($id_can)) {
                redirect('candidatos/indexc');
            } else {
                echo "ERROR AL BORRAR :(";
            }
        }
        public function editar($id_can){
            $data["candidatoEditar"]=
             $this->Cliente->obtenerPorTd($id_can);
             $this->load->view('header');
             $this->load->view('candidato/editar',$data);
             $this->load->view('footer');

          }
          public function procesarActualizacion(){
              $datosEditados=array(
                "cedula_can"=>$this->input->post('cedula_can'),
                "dignidad_can"=>$this->input->post('dignidad_can'),
                "apellido_can"=>$this->input->post('apellido_can'),
                "nombre_can"=>$this->input->post('nombre_can'),
                "movimiento_can"=>$this->input->post('movimiento_can'),
                "tipo_can"=>$this->input->post('tipo_can'),
                "telf_can"=>$this->input->post('telf_can'),
                "latitud_can"=>$this->input->post('latitud_can'),
                "longitud_can"=>$this->input->post('longitud_can')
              );
              $id_cli=$this->input->post("id_can");
              if($this->Candidato->actualizar($id_can,$datosEditados)){
              redirect("candidatos/indexc");
            }else{
              echo "Datos no ingrsados"
              }
            }
  }// cierre de la clase


 ?>
