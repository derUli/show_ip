<?php

class ShowIP extends Controller
{

    private $moduleName = "show_ip";

    public function accordionLayout()
    {
        return Template::executeModuleTemplate($this->moduleName, "ip.php");
    }
	
	public function render(){
		return get_ip();
	}
}