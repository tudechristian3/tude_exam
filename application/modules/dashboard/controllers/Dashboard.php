<?php 

    class Dashboard extends MY_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load_dashboard('index');
        }

    }













?>