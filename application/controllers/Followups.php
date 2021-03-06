<?php
class Followups extends CI_Controller{
    var $cols = 'id,kdticket,clientname,createuser,create_date';
    function __construct(){
        parent::__construct();
        $this->load->model('crud');
        $this->load->model('ticket');
    }
    function index(){
        $tickets = $this->crud->gets('tickets',$this->cols,1,10);
        $data = array(
            'objs'=> $tickets,
            'objsjson'=> json_encode($tickets),
            'pagetitle'=>'Padi InterNET Ticket Followup',
            'username'=>'Guest',
            'tabletitle'=>'Follow Ups',
            'tablesubtitle'=>'List',
            'nav'=>array(
                '0'=>array('url'=>'/','val'=>'App'),
                '1'=>array('url'=>'/followups','val'=>'Ticket Follow Up'),
                '2'=>array('url'=>'/followups','val'=>'List')
            )
        );
        $this->load->view('/followups/index',$data);
    }
    function add(){
        $tickets = $this->crud->gets('tickets',$this->cols,1,10);
        $complaints = $this->ticket->getComplaints();
        $complaintsarray = $this->common->makearray($complaints['res']);
        $rootcauses = $this->crud->gets('ticketcausecategories','id,name');
        $rootcausesarray = $this->common->makearray($rootcauses['res']);
        $causes = $this->crud->gets('ticketcauses','id,name');
        $causesarray = $this->common->makearray($causes['res']);
        $data = array(
            'objs'=> $tickets,
            'objsjson'=> json_encode($tickets),
            'pagetitle'=>'Padi InterNET Add Ticket Follow Ups',
            'rootcauses'=>$rootcausesarray,
            'causes'=>$causesarray,
            'username'=>'Guest',
            'tabletitle'=>'Ticket Follow Ups',
            'tablesubtitle'=>'Add',
            'complaints'=>$complaintsarray,
            'nav'=>array(
                '0'=>array('url'=>'/','val'=>'App'),
                '1'=>array('url'=>'/followups','val'=>'Ticket Follow Ups'),
                '2'=>array('url'=>'/followups/add','val'=>'Add')
            )
        );
        $this->load->view('/followups/add',$data);
    }
    function getcauseby(){
        $id = $this->uri->segment(3);
        $res = $this->crud->getby('ticketcauses',array('category_id',$id),'id,name');
        $obj = $res['res'];
        echo json_encode($obj);
    }
}