<?php

require_once '../Framework/DataBase.php';

require_once '../helpers.php';


class HomeController {

    private $db;

    public function __construct()
    {
        $config = require basePath('config/_db.php');

        $this->db=new Database($config);
        
    }

    /*
   * Show the latest jobs
   * 
   * @return void
   */
    public function index(){

        $jobs = $this->db->query('SELECT * FROM jobs ORDER BY created_at DESC LIMIT 6')->fetchAll();

                
        include "../App/views/home.view.php";

    }
}