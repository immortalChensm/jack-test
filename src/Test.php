<?php
	namespace Oldshiji\Jacktest;
	
	class Test
	{
		protected $name;
		public function __construct($name)
		{
			$this->name = $name;
		}

		public function get()
		{
			return $this->name;
		}
	}
