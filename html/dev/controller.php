<?php
class controller{
	function render($temple,$arr){
		extract($arr);
		ob_start();
		include $temple;
		$content=ob_get_contents();
		ob_end_clean();
		echo $content;
	}

}

