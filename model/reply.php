<?php
class model_reply{
    var $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function post(){
        Route::goto('reply_post');
    }
    public function edit(){
        Route::goto('reply_edit');
    }
    public function delete(){
        //Route::goto('article_delete');
    }
    public function lock(){
        //Route::goto('article_lock');
    }
}