<?php
require '../vendor/autoload.php';
namespace Handelaar\Xapiansearch;

class Xapiansearch {
	public function __construct() {
		$test = new XapianDatabase('/home/openparl/sites/openparl/search/openparl_search');
	}
}
