<?php

use Conquer\Auth\Auth;
use Tests\Support\ConquerAuthTestCase;

/**
 * @internal
 */
final class ConquerHelperTest extends ConquerAuthTestCase
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
