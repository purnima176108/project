<?php

class user extends CI_Model{
    public function registerUser($name,$uid,$pword)
    {
        //$this->load->database();
        
        if($this->db->insert('userdata',[
            'name'=>$name,
            'u_id'=>$uid,
            'pword'=>$pword
        ]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function authUser($uid,$pw)
    {
        $query = $this->db->select('userdata')
                            ->where(['u_id'=>$uid,'pword'=>$pw])->get();
        $result = $query->result();
        if($result->num_rows())
        {

        }
        else
        {
            
        }
    }
}

?>