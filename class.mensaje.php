<?php

class Mensaje extends DataBoundObject {
        protected $ID;
        protected $mensaje;
        protected $total;
        protected $lastvisit;
        
        

        protected function DefineTableName() {
                return("mensajes");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "mensaje" => "mensaje",
                        "total" => "total",
                        "lastvisit" => "lastvisit"));
        }
}

?>
