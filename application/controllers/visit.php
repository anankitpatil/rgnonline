<?php
class Visit extends Controller {
	
	function index()
	{
		$template = $this->loadView('visit');
		$template->render();
	}
    
}
?>
