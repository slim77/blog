<?php
namespace App;
class Autoloader
{
	public static function register()
	{
		spl_autoload_register(array(__CLASS__, "Autoload"));
	}
	private function Autoload($class)
	{
		if(strpos( $class, __NAMESPACE__.'\\') === 0){
			$class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
			$class = str_replace('\\', '/', $class);
		}
		require ROOT.'/app/'.$class.'.php';		
	}
}
