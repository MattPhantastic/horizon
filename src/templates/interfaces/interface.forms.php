<?PHP
	namespace Informatio;
	
	if (!Defined("IN_INDEX"))
		die ($_CONFIG['FILE_RESTRICTION']);
	
	interface iForms
	{
		public function set();
		
		// public function unset_form();
		
		// public function write($Post);
		
		// public function error();
	}
?>