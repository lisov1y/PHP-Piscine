<?php

	abstract class Fighter {
		public $name;
		abstract public function fight($t);
		public function __construct($per) {
			$this->name = $per;
		}
}

 ?>