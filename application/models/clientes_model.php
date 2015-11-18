<?php

//Distritos_model

class clientes_model extends Model {

   public function add($_post) {
        //profesion
        return $this->Insertar('cliente', $_post);
        
    }


    public function get_carreras($get) {

        return $this->getAll('carreras');
    }

      public function get($get) {

        return $this->getAll('cliente');
    }

    public function get_id($id) {

        return $this->getOne('cliente', array('id' => $id));
    }



public function get_enero($get) {

        return $this->getAll('cliente', array('month(fecha)' => 1));
    }
public function get_febrero($get) {

        return $this->getAll('cliente', array('month(fecha)' => 2));
    }
public function get_marzo($get) {

        return $this->getAll('cliente', array('month(fecha)' => 3));
    }   

public function get_abril($get) {

        return $this->getAll('cliente', array('month(fecha)' =>4));
    } 
public function get_mayo($get) {

        return $this->getAll('cliente', array('month(fecha)' =>5));
    } 
public function get_junio($get) {

        return $this->getAll('cliente', array('month(fecha)' =>6));
    } 
public function get_julio($get) {

        return $this->getAll('cliente', array('month(fecha)' =>7));
    } 
public function get_agosto($get) {

        return $this->getAll('cliente', array('month(fecha)' =>8));
    } 
public function get_setiembre($get) {

        return $this->getAll('cliente', array('month(fecha)' =>9));
    } 
public function get_octubre($get) {

        return $this->getAll('cliente', array('month(fecha)' =>10));
    }    
  
public function get_noviembre($get) {

        return $this->getAll('cliente', array('month(fecha)' =>11));
    }  
public function get_diciembre($get) {

        return $this->getAll('cliente', array('month(fecha)' =>12));
    }   

}

?>
