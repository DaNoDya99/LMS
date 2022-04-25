<?php

//main contoller. Contoller is used to handle all the pages of the project.

class Controller
{
    public function view($view, $data = array())
    {
        extract($data);

        if(file_exists("../private/view/".$view . ".view.php")){
            require("../private/view/".$view.".view.php");
        }
        else{
            require("../private/view/404.view.php");
        }
    }

    public function load_model($model)
    {
        if(file_exists("../private/model/".ucfirst($model).".php"))
        {
            require("../private/model/".ucfirst($model).".php");
            return $model = new $model();
        }
        return false;
    }
}
