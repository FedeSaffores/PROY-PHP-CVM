<?php
class EnlacesPaginas{
    
    public static function enlacesPaginasModel($enlacesModel){
        if(
        $enlacesModel=="nosotros"||
        $enlacesModel=="servicios"||
        $enlacesModel=="contactenos"){
            
            $module= "views/modules/".$enlacesModel.".php";
        }
        else if($enlacesModel == "index.php"){
            $module = "views/modules/inicio.php";
        }
        else{
            $module = "views/modules/inicio.php";
        }
        return $module;
    }
    
}


?>