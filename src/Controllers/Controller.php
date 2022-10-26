<?php

namespace Conquer\Auth\Controllers;

use CodeIgniter\Controller as SystemController;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use Conquer\Auth\Authorized;

abstract class Controller extends SystemController
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['conquer'];

    /**
     * Alias of view.
     */
    protected function render(string $name, array $data = [], array $options = []): string
    {
        return view($name, array_merge($data, ['authorized' => Authorized::class]), $options);
    }
}
