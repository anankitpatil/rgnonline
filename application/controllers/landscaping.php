<?php
class Landscaping extends Controller {
	
	function index()
	{
		$template = $this->loadView('landscaping');
		$template->render();
	}
    
}
?>
