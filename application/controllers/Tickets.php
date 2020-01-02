<?php
Class Tickets extends CI_Controller{
    var $cols = 'id,kdticket,clientname,createuser,create_date';
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
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
            'id'=>1,
            'kdticket'=>'12245',
            'clientname'=>'wakaka'
        );
        $this->crud->save($obj);
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