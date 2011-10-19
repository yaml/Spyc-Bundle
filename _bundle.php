<?php

namespace Evolution\Spyc;
use Evolution\Kernel\Service;
use Evolution\Kernel\Completion;
use Evolution\Kernel\IncompleteException;
use Evolution\Kernel\Configure;
use Exception;

class Bundle {
	
	public static $spyc;
	
	public function __construct() {
		self::$spyc = new Spyc;
	}
	
	public static function load($string, $file = false) {
		if($file) return self::$spyc->loadFile($string);
		return self::$spyc->load($string);
	}
	
	public static function dump($array) {
		return self::$spyc->dump($array);
	}
	
}