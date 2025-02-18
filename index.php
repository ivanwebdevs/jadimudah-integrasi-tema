<?php 
include("function/function.php");
include("vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
include("tema/".$_ENV["TEMA"]."/index.php");

?>