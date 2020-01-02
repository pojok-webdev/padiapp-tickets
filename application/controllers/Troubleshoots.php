<?php
Class Troubleshoots extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }
    function index(){
        echo json_encode($this->crud->gets('troubleshoot_requests','id,create_date'));
    }
}