<?php

defined('BASEPATH') or die('No direct script access allowed');

// load smarty class
require 'Smarty/Smarty.class.php';

// system/application/libraries/smarty_tpl.php
class smarty_tpl extends Smarty {
    function smarty_tpl() {
        $this->Smarty();
        // templates folder
        $this->setTemplateDir(APPPATH."views/templates");
        // compiled templates folder
	$this->setCompileDir(APPPATH."views/templates_c");
        // cache folder
        $this->setCacheDir(APPPATH."views/cache");
        //config folder
        $this->setConfigDir(APPPATH."views/config");
	//plugins folder
	$this->setPluginsDir(array(
		"/usr/share/php/Smarty3/plugins/",
		"/usr/share/php/Smarty3/sysplugins/"
	));

        // template recheck on
        $this->compile_check=   true;

        // cache off
        $this->caching=         false;
        $this->cache_lifetime=  86400;
    }
}
