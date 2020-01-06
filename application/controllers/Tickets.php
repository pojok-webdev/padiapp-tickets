<?php
Class Tickets extends CI_Controller{
    var $cols = 'id,kdticket,clientname,createuser,create_date';
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
        $this->load->model('ticket');
    }
    function add(){
        $tickets = $this->crud->gets('tickets',$this->cols,1,10);
        $complaints = $this->ticket->getComplaints();
        $complaintsarray = $this->common->makearray($complaints['res']);
        $data = array(
            'objs'=> $tickets,
            'objsjson'=> json_encode($tickets),
            'pagetitle'=>'Padi InterNET Add Tickets',
            'username'=>'Guest',
            'tabletitle'=>'Tickets',
            'tablesubtitle'=>'Add',
            'complaints'=>$complaintsarray,
            'nav'=>array(
                '0'=>array('url'=>'/','val'=>'App'),
                '1'=>array('url'=>'/','val'=>'Tickets'),
                '2'=>array('url'=>'/','val'=>'Add')
            )
        );
        $this->load->view('tickets/add',$data);
    }
    function getclients(){
        $clients = $this->ticket->getClients();
        echo json_encode($clients['res']);
    }
    function getcomplaints(){
        $objs = $this->ticket->getcomplaints();
        echo json_encode($objs);
    }
    function index(){
        $tickets = $this->crud->gets('tickets',$this->cols,1,10);
        $data = array(
            'objs'=> $tickets,
            'objsjson'=> json_encode($tickets),
            'pagetitle'=>'Padi InterNET Tickets',
            'username'=>'Guest',
            'tabletitle'=>'Tickets',
            'tablesubtitle'=>'List',
            'nav'=>array(
                '0'=>array('url'=>'/','val'=>'App'),
                '1'=>array('url'=>'/','val'=>'Tickets'),
                '2'=>array('url'=>'/','val'=>'List')
            )
        );
        $this->load->view('tickets/index',$data);
    }
    function get(){
        $param = $this->uri->segment(3);
        $paramType = $this->uri->segment(4);
        $tickets = $this->crud->get('tickets',$this->cols,$param,$paramType);
        echo json_encode($tickets);
    }
    function save(){
        $obj = array(
            //'id'=>1,
            'kdticket'=>'12245',
            'clientname'=>'wakaka',
            'reporter'=>'Puji',
            'reporterphone'=>'08813272107',
            'requesttype'=>'pelanggan'
        );
        $params = $this->input->post();
        $this->crud->save('tickets',$params);
    }
    function update(){
        $obj = array(
            'id'=>1,
            'kdticket'=>'12245',
            'clientname'=>'wakaka'
        );
        $this->crud->update($obj);
    }
    function delete(){
        $obj = array(
            'id'=>1,
            'kdticket'=>'12245',
            'clientname'=>'wakaka'
        );
        $this->crud->delete($obj);
    }
}