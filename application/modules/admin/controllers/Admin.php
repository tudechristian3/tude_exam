<?php 

    class Admin extends MY_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load_admin('index');
        }

    }













?>