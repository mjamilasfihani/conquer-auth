<?php

use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\ConquerAuthUnitTestCase;

/**
 * @internal
 */
final class AuthenticationTest extends ConquerAuthUnitTestCase
{
    use FeatureTestTrait;

    /**
     * @return void
     */
    public function testLoginScreenCanBeRendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
