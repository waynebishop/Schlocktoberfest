<?php

namespace App\Views;

class Error401View extends TemplateView
{
	public function render() {
		
		$page = "error401";
		$page_title = "401 Unauthorised Access";
		include "templates/master.inc.php";
	}
	protected function content() {
		
		include "templates/error401.inc.php";
	}
}