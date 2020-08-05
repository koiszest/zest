<?php
class model_user{
    var $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function getbyid($id){
        $db  = $this->db;
        $result = $db->query("SELECT * FROM user WHERE id = '{$id}'");
        $data = $result->fetch_assoc();
        return $data;
    }
    public function getbyname($name){
        $db  = $this->db;
        $result = $db->query("SELECT * FROM user WHERE name = '{$name}'");
        $data = $result->fetch_assoc();
        return $data;
    }
    public function getbyhot($num){//continue
        $db  = $this->db;
        $result = $db->query("SELECT * FROM user");
        $data = $result->fetch_assoc();
        return $data;
    } 
}