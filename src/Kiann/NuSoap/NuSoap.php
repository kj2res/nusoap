<?php

namespace Kiann\NuSoap;

require_once('Lib/nusoap.php');

class NuSoap extends nusoap_client {

	public function __construct() {
		parent::__construct();
	}
}