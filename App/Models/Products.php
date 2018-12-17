<?php 
	namespace App\Models;
	use Codefii\Entity\Orm\Fiirm;
	class Products extends Fiirm {
		public $table = "product";
		public $pd = 'id';
		public $columns = ['name','price','description'];
	}