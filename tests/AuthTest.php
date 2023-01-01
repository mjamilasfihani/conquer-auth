<?php

use Conquer\Auth\Auth;
use Tests\Support\ConquerAuthTestCase;

/**
 * @internal
 */
final class AuthTest extends ConquerAuthTestCase
{
    public function testAuthCheck()
    {
        // Auth::attempt('john@example.com', 'secret');

        // $this->assertIsInt(Auth::id());
        // $this->assertTrue(Auth::check());

        Auth::logout();

        $this->assertNull(Auth::id());
        $this->assertFalse(Auth::check());
    }
}
