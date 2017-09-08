<?PHP
	namespace Informatio;
	
	if (!Defined("IN_INDEX"))
		die ($_CONFIG['FILE_RESTRICTION']);
	
	interface iTemplate
	{
		public function init();
		
		public function set($Key, $Value);
		
		public function filter($Template);
		
		public function write($String);
		
		public function output();
	}
?>