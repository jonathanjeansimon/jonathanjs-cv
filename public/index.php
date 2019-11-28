<?php
include('../app/autoload.php');



if(isset($_GET['page'])){
    
    $page = $_GET['page'];
    $pageView=new page($page);
    $pageView->render();
    
} else{
    
    $_GET['page']=='home';
}




