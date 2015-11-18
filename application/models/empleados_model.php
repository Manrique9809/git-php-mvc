<?php

//Distritos_model

class empleados_model extends Model {

    

    public function add($_post) {
        //profesion
        return $this->Insertar('marcas', $_post);
        
    }

    

    public function modificar($_post,$id) {
        

        return $this->Update('marcas', $_post, array('id' => $id));

    }

    public function eliminar($id) {
        

        return $this->Delete('marcas',array('id' => $id));

    }

    public function get($get) {

        return $this->getAll('marcas');
    }

    

    

    public function get_id($id) {

        return $this->getOne('marcas', array('id' => $id));
    }

       public function get_login($password) {

        return $this->getOne('marcas', array('password' =>$password));
    }

}

?>
