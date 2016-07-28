<?php

	namespace App\Controllers;

	use App\Views\MerchandiseView;
	use App\Models\Merchandise;

	class MerchandiseController extends Controller
	{
		public function show(){
			$products = Merchandise::all("name");
			$view = new MerchandiseView(['products' => $products]);
			$view->render();
		}
	}