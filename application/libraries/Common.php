<?php
Class Common {
    function extractobject($obj){
        $arraykeys = array();$arrayvals = array();
        foreach($obj as $key=>$val){
            array_push($arraykeys,$key);
            array_push($arrayvals,$val);
        }
        return array(
            'keys'=>implode(',',$arraykeys),
            'vals'=>'"'.implode('","',$arrayvals).'"'
        );
    }
    function pairextractedobject($obj){
        $arraypair = array();
        foreach($obj as $key=>$val){
            array_push($arraypair,''.$key.'="'.$val.'"');
        }
        return implode(',',$arraypair);
    }
    function makeArray($objs,$pilihlah = true,$cols = array('id','name')){
        $arr = array();
        if($pilihlah){
            $arr[0] = "Pilihlah";
        }
        foreach($objs as $obj){
            $arr[$obj->$cols[0]] = $obj->$cols[1];
        }
        return $arr;
    }
}