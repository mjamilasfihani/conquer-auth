<?php

namespace Conquer\Auth\Controllers;

use CodeIgniter\Controller as BaseController;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class Controller extends BaseController
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
     * to all other controllers that extend Controller.
     *
     * @var array
     */
    protected $helpers = ['conquer'];

    /**
     * @var object
     */
    protected $conquer;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->conquer = config('Conquer');
    }

    /**
     * Alias of view.
     */
    protected function render(string $name, array $data = [], array $options = []): string
    {
        return view($name, array_merge($data, ['conquer' => $this->conquer]), $options);
    }
}
