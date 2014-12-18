<?php
class Nursery extends Controller {
	
	function index()
	{
		$template = $this->loadView('nursery');
		$template->render();
	}
    
}
?>
