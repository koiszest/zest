<?php
class controller_article{
    var $db;
    var $Route;
    public function __construct($db,$Route){
        $this->db = $db;
        $this->Route = $Route;
    }
    public function post(){
        $this->Route->class('model','article');
        model_article::post();
        $this->Route->goto('article_post');
    }
    public function edit(){
        $this->Route->goto('article_edit');
    }
    public function delete(){
        //Route::goto('article_delete');
    }
    public function lock(){
        //Route::goto('article_lock');
    }
}