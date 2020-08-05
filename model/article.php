<?php
class model_article{
    var $db;
    var $Route;
    public function __construct($db,$Route){
        $this->db = $db;
        $this->Route = $Route;
    }
    public static function post(){
        $title = base64_encode($_POST['title']);
        $content = base64_encode($_POST['content']);
        self::$db::exec("INSERT INTO article(title,content,date) VALUES('$title','$content',".date('Y-m-d H:i:s').")");
    }
    public function getbyid($id){
        $db  = $this->db;
        $result = $db->query("SELECT * FROM article WHERE id = '{$id}'");
        $data = $result->fetch_assoc();
        return $data;
    }
    public function getbyuser($user){
        $db  = $this->db;
        $result = $db->query("SELECT * FROM article WHERE user = '{$user}'");
        $data = $result->fetch_assoc();
        return $data;
    }
    public function getbyhot($num){//continue
        $db  = $this->db;
        $result = $db->query("SELECT * FROM article");
        $data = $result->fetch_assoc();
        return $data;
    }
}