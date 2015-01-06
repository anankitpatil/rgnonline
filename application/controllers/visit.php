<?php
class Visit extends Controller {
	
	function index()
	{
		$template = $this->loadView('visit');
		$template->set('mapjs', '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>');
		$template->render();
	}
    
}
?>
