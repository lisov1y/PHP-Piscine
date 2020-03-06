<?php
	class Tyrion{
		public function sleepWith($i){
			if ($i instanceof Jaime)
				echo ("Not even if I'm drunk !" . PHP_EOL);
			else if ($i instanceof Sansa)
				echo ("Let's do this." . PHP_EOL);
			else if ($i instanceof Cersei)
				echo ("Not even if I'm drunk !" . PHP_EOL);
		}
	}
?>