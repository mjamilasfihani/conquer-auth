<?php

namespace Tests\Support;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

// use Conquer\Auth\Auth;
// use Conquer\Auth\Config\Conquer;
// use Conquer\Auth\Models\Users;

/**
 * @internal
 */
abstract class ConquerAuthUnitTestCase extends CIUnitTestCase
{
    use DatabaseTestTrait;

    /**
     * @var bool
     */
    protected $migrate = true;

    /**
     * @var bool
     */
    protected $migrateOnce = false;

    /**
     * @var bool
     */
    protected $refresh = true;

    /**
     * @var string
     */
    protected $namespace = 'Conquer\Auth';

    // /**
    //  * Instance of Config
    //  */
    // protected Conquer $conquer;

    // /**
    //  * Instance of Model
    //  */
    // protected Users $model;

    // /**
    //  * Constructor
    //  */
    // protected function setUp(): void
    // {
    //     // Do Not Edit This Line!!!
    //     parent::setUp();

    //     // Preload important things
    //     $this->conquer = Auth::config();
    //     $this->model   = Auth::model();
    // }
}
