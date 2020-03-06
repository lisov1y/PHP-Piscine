<?php
	class Jaime{
		public function sleepWith($i){
			if ($i instanceof Tyrion)
				echo ("Not even if I'm drunk !" . PHP_EOL);
			else if ($i instanceof Sansa)
				echo ("Let's do this." . PHP_EOL);
			else if ($i instanceof Cersei)
				echo ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
	}
?>