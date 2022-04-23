<?php

// main app file

class APP
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array();

    public function __construct()
    {
        $URL = $this->getURL();

        if (file_exists("../private/controller/" . $URL[0] . ".php")) {
            $this->controller = ucfirst($URL[0]);
            //Once we figure out the value for the controller we must unset it. 
            unset($URL[0]);
        }

        require "../private/controller/" . $this->controller . ".php";
        //Make new instance of the controller.
        $this->controller = new $this->controller();

        //Check URL[1] is set or not.
        if (isset($URL[1])) {
            if (method_exists($this->controller, $URL[1])) {
                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }

        // New array is created to always start with index zero. 
        $URL = array_values($URL);
        $this->params = $URL;
        // Append method inside the controller that we have.
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    private function getURL()
    {
        //If the url is empty then it will show an error. to avoid that we assign a value to the url if it is empty.
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        //Trim the url to ignore "/" at the end.Otherwise it will show an empty array.
        //Used filter var to senitize the url to gnore the un wanted characters.
        //_GET is used to get the all parameters of the url and add them in to an array.
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}
