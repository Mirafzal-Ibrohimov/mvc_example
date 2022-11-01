<?
    include MODEL;
    if(empty($_GET['view'])){
        $view = "index";
    }else{
        $view = $_GET['view'];
    }


    switch($view){
        case "index":
            
            break;
    }
include $_SERVER['DOCUMENT_ROOT']."/views/theme/index.php";
?>