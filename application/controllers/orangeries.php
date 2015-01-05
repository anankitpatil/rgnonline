<?php
class Orangeries extends Controller {
	
	function index()
	{
		$template = $this->loadView('orangeries');
		$template->render();
	}
    
}
?>
