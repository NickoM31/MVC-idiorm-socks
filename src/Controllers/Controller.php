<?php 
	namespace Nicko\Controllers;
	use Nicko\Models\Armoire;

	class Controller{
		public static function view(){
			$chaussettes = Armoire::all(10,0);
			require ROOT .'/src/Views/table.php';
		}
	}