<?php
$nav = ""; 
$info =""; 
include_once "views/navigation.php"; 
include_once "classes/Page_Data.class.php"; 
$pageData = new Page_Data(); 
$pageData->setTitle("Building and processing HTML forms with PHP"); 
$pageData->setCss("<link href='css/layout.css' rel = 'stylesheet'/>"); 
$pageData->setContent("<h1>Welcome to my Dynamic Website!</h1>"); 
$pageData->appendContent($nav); 
$navigationIsClicked = isset($_GET['page']); 
if($navigationIsClicked){
    $fileToLoad = $_GET['page']; 
    include_once "views/$fileToLoad.php"; 
    $pageData->appendContent($info); 

}

require "templates/page.php"; 
echo $page; 
?>