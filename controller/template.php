<?php

class Template{
    public $root;
    public $view;
    public $db;
    public $data;
    public function __construct($root,$view,$db){
        echo 'hello';
        $this->root = $root;
        $this->view = $view;
        $this->db = $db;
    }
    public function need($table){
    $result = $this->db->query("SELECT * FROM {$table}");
    $data = $result->fetch_assoc();
    $this->data = $data;
    }
    public function load($uri){
        echo $this->view;
        if(file_exists($this->view.'/'.$uri.'.php')){
            require_once($this->view.'/404.php');
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