<?php

use CodeIgniter\Test\CIUnitTestCase;
use Conquer\Auth\Auth;

/**
 * @internal
 */
final class ConquerHelperTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // load the Conque\Auth's helper
        helper('conquer');
    }

    public function testAuthFunctionMustReturnAuthClass()
    {
        $auth = auth();

        $this->assertSame(Auth::check(), $auth::check());
    }
}
