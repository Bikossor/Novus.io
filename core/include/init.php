﻿<?php
	/*
		@author:	André Lichtenthäler
		@copyright:	André Lichtenthäler, 2016
		@version:	1.0.2
		@since:		1.0.0 First introduced
		@since:		1.0.1 String-Building with printf
		@since:		1.0.2 Changed argument 'classname' to 'class'
	*/

	function load_class($class) {
		try {
			include_once(printf("./core/class/%s.inc.php", $class));
		}
		catch (Exception $e) {
			print_r($e);
		}
	}

	spl_autoload_register('load_class');
?>