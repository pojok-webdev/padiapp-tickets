<?php
class Followup extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('/followups/index');
    }
    function add(){
        $this->load->view('/followups/add');
    }
}