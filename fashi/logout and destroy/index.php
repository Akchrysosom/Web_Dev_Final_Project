<?php


session_start();
ini_set('display_errors',1);
require'config.php';


if (isset($GET_['page'])) {
    $page = $_GET['page'];
    if ($page=='logout'){
     $_SESSION = array();
     $_session_destroy();


    $page =$_GET['page'];
    $pageload = $page . '.php';
}else {
    $pageload = 'home.php';

    }

    if(isset($_SESSION) &&_($_SESSION['is logged in') {
    include('views/hearder.php');
    include('view/app'. $pageload);
    include('view/footer.php');
}else {
    header("location :login.php");
}