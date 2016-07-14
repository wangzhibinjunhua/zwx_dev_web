<?php
/**
* author lib-x.com<wzb@lib-x.com>
*/
class t_controller extends controller
{

	function index()
	{
		$this->render('v.php',array('name'=>'welcome to lib-x.com'));
	}
}



?>
