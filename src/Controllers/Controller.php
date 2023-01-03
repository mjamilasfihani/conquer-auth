<?php

namespace Conquer\Auth\Controllers;

use CodeIgniter\Controller as BaseController;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Conquer\Auth\Auth;
use Conquer\Auth\Config\Conquer;
use Conquer\Auth\Models\Users as UserModel;
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
     * Instance of the configuration.
     */
    protected Conquer $conquer;

    /**
     * Instance of `\Conquer\Auth\Auth::check()`
     *
     * @var bool
     */
    protected $isLoggedIn;

    /**
     * Instance of Model
     */
    protected UserModel $model;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->conquer    = Auth::config();
        $this->isLoggedIn = Auth::check();
        $this->model      = Auth::model();
    }

    /**
     * Alias of view.
     */
    protected function render(string $name, array $data = [], array $options = []): string
    {
        return view($name, array_merge($data, ['conquer' => $this->conquer]), $options);
    }
}
