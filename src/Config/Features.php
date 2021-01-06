<?php namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;

class Features extends BaseConfig
{

	/**
	 *
	 */
	public $login    = true;
	public $logo     = 'https://via.placeholder.com/150';
	public $remember = true;

	/**
	 *
	 */
	public $register = true;
	public $forgot   = true;

}