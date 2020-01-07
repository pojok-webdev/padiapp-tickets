<?php
Class Crud extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('common');
    }
    function get($table,$cols = null,$param = 1,$paramType = 'id'){
        if(is_null($cols)){
            $cols = '*';
        }
        $sql = 'select '.$cols.' from '.$table.' a ';
        $sql.= 'where '.$paramType.'="'.$param.'" ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$res
        );
    }
    function gets($table,$cols = null,$offset = null,$segment = null,$orderby = null){
        if(is_null($cols)){
            $cols = '*';
        }
        $sql = 'select '.$cols.' from '.$table.' ';
        if(!is_null($orderby)){
            $sql.= 'order by create_date desc ';
        }
        if(!is_null($segment)&&!is_null($offset)){
            $sql.= 'limit '.$offset.','.$segment.' ';
        }
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$res
        );
    }
    function getby($table,$params = array(),$cols = null,$offset = null,$segment = null,$orderby = null){
        if(is_null($cols)){
            $cols = '*';
        }
        $sql = 'select '.$cols.' from '.$table.' ';
        $sql.= 'where '.$params[0].' = "'.$params[1].'" ';
        if(!is_null($orderby)){
            $sql.= 'order by create_date desc ';
        }
        if(!is_null($segment)&&!is_null($offset)){
            $sql.= 'limit '.$offset.','.$segment.' ';
        }
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        return array(
            'cnt'=>$que->num_rows(),
            'res'=>$res
        );
    }
    function save($table,$obj){
        $extracted = $this->common->extractobject($obj);
        $sql = 'insert into '.$table.' ';
        $sql.= '('.$extracted['keys'].')';
        $sql.= 'values ';
        $sql.= '('.$extracted['vals'].')';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
    }
    function update($table,$obj){
        $paired = $this->common->pairextractedobject($obj);
        $sql = 'update '.$table.' set ';
        $sql.= '' . $paired . ' ';
        $sql.= 'where id='.$obj['id'].' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
    }
    function delete($table,$obj){
        $paired = $this->common->pairextractedobject($obj);
        $sql = 'delete from '.$table.' where ';
        $sql.= 'where id='.$obj['id'].' ';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
    }
}