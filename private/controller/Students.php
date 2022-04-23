<?php

//Home controller

class Students extends Controller
{
    function index($id = null)
    {
        echo "hi from students".$id;
    }
}
