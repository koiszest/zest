<?php

class Template{
    var $root;
    var $view;
    var $db;
    var $data;
    public function __construct($root,$view,$db){
        $this->root = $root;
        $this->view = $view;
    }
    public function need($table){
    $result = $this->db->query("SELECT * FROM {$table}");
    $data = $result->fetch_assoc();
    $this->data = $data;
    }
    public function load($uri){
        if(file_exists($this->view.'/'.$uri.'.php')){
            require_once($this->view.'/'.$uri.'.php');
        }else{
            require_once($this->view.'/404.php');
        }
    }
    public function get($table,$key,$value){
    $result = $this->db->query("SELECT * FROM {$table} WHERE {$key} = '{$value}'");
    $data = $result->fetch_assoc();
    $this->data = $data;
    }
}