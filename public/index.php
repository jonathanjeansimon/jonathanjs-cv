<?php 

if(isset($_GET['page'])){
    
    $page = $_GET['page'];
    
    
} else{
    
    $_GET['page']=='home';
}



ob_start();

if($page == 'home'){
    
    include_once('../page/home.php');
    
    
}




$content = ob_get_clean();
include_once('../page/template/__gabarit.php');

