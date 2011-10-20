<?php

namespace Evolution\Spyc;
use Evolution\Kernel\Service;
use Evolution\Kernel\Completion;
use Evolution\Kernel\IncompleteException;
use Evolution\Kernel\Configure;
use Exception;

class Bundle {
	
	public static function load($string, $file = false) {
		$spyc = new Spyc;
		
		if($file) return $spyc->loadFile($string);
		return $spyc->load($string);
	}
	
	public static function dump($array) {
		$spyc = new Spyc;
				
		return $spyc->dump($array);
	}
	
}