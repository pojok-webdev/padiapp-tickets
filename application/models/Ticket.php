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
}