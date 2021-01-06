<?php namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;

class Conquer extends BaseConfig
{

	/**
	 *
	 */
	public $views =
	[
		'login'    => '\Conquer\Auth\Views\login',
		'register' => '\Conquer\Auth\Views\register',
		'forgot'   => '\Conquer\Auth\Views\forgot',
	];

}