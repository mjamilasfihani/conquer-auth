<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;

class Auth extends BaseConfig
{
	// ROUTING
	public $routing =
	[
		'group'     => '',
		'namespace' => 'Conquer\Auth\Controllers',
		'lists'		=>
		[
			'login'    => 'login',
			'logout'   => 'logout',
			'register' => 'register',
			'activate' => 'activate',
			'resend'   => 'resend',
			'forgot'   => 'forgot',
			'reset'    => 'reset',
		],
	];
}
