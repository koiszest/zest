<?php

/*
** @Adace Blog
** @kois (http://tyma.top)
**@This file  is the entry
*/

define('Adace_ROOT',__DIR__);
define('Adace_Model',Adace_ROOT.'/model');
define('Adace_View',Adace_ROOT.'/view');
define('Adace_Controller',Adace_ROOT.'/controller');

try{
    require_once(Adace_ROOT.'/config.php');
    require_once(Adace_Controller.'/Route.php');
    require_once(Adace_Controller.'/Template.php');
    $db = new mysqli($dbhost, $dbuser, $dbpwd);
    if ($db->connect_error) die("连接失败: " . $db->connect_error);
    
    $template = new Template(Adace_ROOT,Adace_View,$db);
    $Route = new Route($template,$db,Adace_ROOT);
    $Route->goto('index');
}catch(Exception $e){
    echo "Error: ".Adace_Controller."/Route.php missing or working incorrectly.";
}

?>