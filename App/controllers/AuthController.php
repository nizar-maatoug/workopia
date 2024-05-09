<?php

require_once '../Framework/DataBase.php';

require_once '../helpers.php';


class AuthController {

    private $db;

    public function __construct()
    {
        $config = require basePath('config/_db.php');

        $this->db=new Database($config);
        
    }

    public function register(){

    }

    public function login(){

    }

    public function logout(){
        
    }

}