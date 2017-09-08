<?PHP
	namespace Informatio;
	
	if (!Defined("IN_INDEX"))
		die ($_CONFIG['FILE_RESTRICTION']);
	
	interface iContent
	{
		public function get($File);
		
		public function set();
	}
?>