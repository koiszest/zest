<?php

class Route{
    public $template;
    public $class;
    public $cmd;
    public $db;
    public $root;
    public function __construct($template,$db,$root){
        var_dump($_GET);
        if($_GET){
            $class = isset($_GET['class'])?$_GET['class']:'index';
            $cmd = isset($_GET['cmd'])?$_GET['cmd']:'none';
            $this->class = $class;
            $this->cmd = $cmd;
        }
        $this->template = $template;
        $this->db = $db;
        $this->root = $root;
    }
    public function goto($uri){
        switch ($this->class) {
            case 'index':
                $this->template->load($uri);
                break;
            case 'article':
                $article = $this->class('controller','article');
                switch ($this->cmd) {
                    case 'post':
                        if($_GET['ok']){
                        
                        $article->post();
                        }else{
                            $this->template->load('article_post');
                        }
                        break;
                    
                    default:
                        # code...
                        break;
                }
                break;
            default:
                $this->template->load($uri);
                break;
        }
        
    }
    public function class($category,$name){
        switch ($category) {
            case 'controller':
                require_once($this->root.'/controller/'.$name.'.php');
                $classname = 'controller_'.$name;
                //return $;
                break;
            
            case 'model':
                require_once($this->root.'/model/'.$name.'.php');
                $classname = 'model_'.$name;
                $class = new $classname($this->db,$this);
                return $class;
                break;
        }
    }
}