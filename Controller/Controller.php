<?php

abstract class Controller
{
	protected function render($filename,$params = array())
	{	
		extract($params);
		if (file_exists(CHEMINABS.'/Vue/'.$filename)) {
			require(CHEMINABS.'/Vue/'.$filename);
		}
	}
}