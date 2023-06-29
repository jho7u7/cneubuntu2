 <?php
   class Candidato extends CI_Model
   {
     function __construct()
     {
       parent::__construct();
     }
     //Funcion para insertar un candidatoo
     function insertar($datos){
       //Active Record en  CodeIgniter ._.
       return $this->db->insert("Candidato",$datos);

     }
     //funcion para obtener los registros de la tabla candidatoo
     function obtenerTodos(){
       $listadoCandidatos=$this->db->get("Candidato");
       if($listadoCandidatos->num_rows()>0){
         return $listadoCandidatos->result();
       }else{
         return false;
       }
     }
     //funcion para obvio borrar un candidato jsjaksja
     function borrar($id_can){
       $this->db->where("id_can",$id_can);
       if ($this->db->delete("Candidato")) {
         return true;
       } else {
         return false;
       }
     }

     function obtenerPorTd($id_can){
       $this->db->where("id_can",$id_can);
       $candidato=$this->db->get("Candidato");
       if($candidato->num_rows()>0){
         return$candidato->row();
       }
       return false;
     }
     //funcionn para actualizar un instructor
     function actualizar($id_can,$datos){
       $this->db->where("id_can",$id_can);
       return $this->db->update('Candidato',$datos);
     }
   }// Cierre de la clase
  ?>
