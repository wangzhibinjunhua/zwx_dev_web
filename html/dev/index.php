<?php
	function __autoload($class){
		include $class.'.php';
	}

	$v=new t_controller();
	$v->index();


?>
