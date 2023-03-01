<?php
class MvcControllers{

    public function plantilla(){
        include "views/template.php";
    }

    public function enlacesPaginasControllers(){

        if(isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }
    else{
        $enlacesController = "index.php";
    }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        
        include $respuesta;
}
}

?>