<?php

class user extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function authMember($email,$pass){
        $query=$this->db->get_where(MEMBERS, array('email' => $email, 'password' => sha1($pass)));
        return $query->result_array();
    }

    public function regMember($memberInfo){
        $table_map = array(
            'email' => $memberInfo['email'],
            'fullname' => $memberInfo['lname'].' '.$memberInfo['fname'],
            'hash' => md5(uniqid(microtime(true))),
            'password' => sha1($memberInfo['password']),
            'balance' => 0,
            'is_activated' => 1,
            'gender' => '-',
            'mobile' => $memberInfo['mobile'],
            'date_registered' => date('m-d-y h:i:s A')
        );
        $this->db->trans_start();
            $this->db->insert(MEMBERS,$table_map);
            $lastInsertID= $this->db->insert_id();
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE){//if($lastInsertID < 1){
            return "Error Registering Member";
        }
        else{
            return  array('memberInfo' => $this->memberInfo($lastInsertID));
        }
    }

    public function updateMemberLogin($id){
        $this->db->where('id', $id);
        $this->db->update(MEMBERS, array('last_login' => (date('d-m-y h:i:s A'))));
    }

    private function memberInfo($id){
        $query = $this->db->get_where(MEMBERS,array('id' => $id));
        return $query->result_array();
    }
}
