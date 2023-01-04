<?php

namespace Tests\Support;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use Conquer\Auth\Auth;
use Conquer\Auth\Config\Conquer;

/**
 * @internal
 */
final class AuthTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    // // For Migrations
    // protected $migrate     = true;
    // protected $migrateOnce = false;
    // protected $refresh     = true;
    // protected $namespace   = 'Conquer\Auth\Database\Migrations';

    // // For Seeds
    // protected $seedOnce = false;
    // protected $seed     = 'Conquer\Auth\Database\Seeds\UserSeeder';
    // protected $basePath = __DIR__ . '/../src/Database';

    public function testAuthCheck()
    {
        $this->assertSame(config(Conquer::class), Auth::config());
        $this->assertNull(Auth::id());
        $this->assertFalse(Auth::check());
    }
}
