<?php

namespace Evolution\Spyc;
use Evolution\Kernel\Service;
use Evolution\Kernel\Completion;
use Evolution\Kernel\IncompleteException;
use Evolution\Kernel\Configure;
use Exception;

class Bundle extends DSpyc {
	
	public function load($string, $file = false) {		
		if($file) return $this->file($string);
		return $this->string($string);
	}
	
}