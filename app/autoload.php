<?php
    
function autoload(string $class) : void    
{
    
    
    require '../app/'.$class .'.php';
    
}
    


spl_autoload_register('autoload');
        

    
    
    
    
