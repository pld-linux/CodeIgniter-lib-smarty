<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
//smarty class in PLD-specific path
require "/usr/share/php/Smarty.class.php";
 
//system/application/libraries/smarty_tpl.php
class smarty_tpl extends Smarty{
 
    function smarty_tpl(){
        $this->Smarty();
        // templates folder
        $this->template_dir=    APPPATH."views/templates";
        // compiled templates folder
        $this->compile_dir=     APPPATH."views/templates_c";
        // cache folder
        $this->cache_dir=       APPPATH."views/cache";
        //config folder
        $this->config_dir=      APPPATH."views/config";
 
        // template recheck on
        $this->compile_check=   true;
 
        // cache off
        $this->caching=         false;
        $this->cache_lifetime=  86400;
    }
}
