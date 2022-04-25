<?php

//Home controller

class Home extends Controller
{
    function index()
    {
        $user = $this->load_model('User');

        $data = $user->findAll();
        // $data = $user->where('firstname','Danodya');
        $this->view('home',['rows'=>$data]);
    }
}
