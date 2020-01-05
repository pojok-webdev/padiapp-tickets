<?php
Class Ticket extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('common');
    }
    function getTroubleshoot($ticket_id){
        $sql = 'select a.id,a.kdticket,b.id from tickets a ';
        $sql.= 'left outer join troubleshoots b on b.ticket_id=a.id ';
        $sql.= 'where a.id="'.$ticket_id.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$res
        );
    }
    function getClients(){
        $sql = 'select b.id,a.name,b.address from clients a ';
        $sql.= 'left outer join client_sites b on b.client_id=a.id ';
        $sql.= 'where b.id is not null ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$res
        );
    }
    function getComplaints(){
        $sql = 'select a.id,a.name from complaints a ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$res
        );
    }
}