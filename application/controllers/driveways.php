<?php
class Driveways extends Controller {
	
	function index()
	{
		$template = $this->loadView('driveways');
		$template->render();
	}
    
}
?>
