<?php


include_once "views/classnavigation.php"; 
include_once "classes/Page_Data.class.php"; 
$pageData = new Page_Data(); 
$pageData->title = "Claire Dimitriuc: Portfolio Site"; 
$pageData->css = "<link href='css/layout.css' rel = 'stylesheet'/>"; 
$pageData->content = $nav; 

$pageData->embeddedStyle = "<style>nav a:hover{color: blue;}</style>"; 


$navigationIsClicked = isset($_GET['page']); 
if($navigationIsClicked){
    $fileToLoad = $_GET['page'];   
}
else{
    $fileToLoad = "skills"; 
}
include_once "views/$fileToLoad.php"; 
$pageData->content .= $info; 
require "templates/pagewithstyle.php"; 
echo $page; 
?>