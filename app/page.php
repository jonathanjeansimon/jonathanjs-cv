<?php

/*
* - Creation de la class page pour afficher les page du site web
*/
class Page{
    
    private $template;
    
    
    
    /*
    * - Creation du constructer
    * @var template
    * String nom des page
    */
    
    public function __construct($template){
        
      $this->template= $template;  
        
    }
    
    /*
    * - Creation du constructer
    * @var template
    * String nom des page
    */ 
    
    public function render(){
        
      $template = $this->template; 
      ob_start();

      include_once('../page/'.$template.'.php');
 
      $content = ob_get_clean();
      include_once('../page/template/__gabarit.php');

        
        
    }
    
    
    
}