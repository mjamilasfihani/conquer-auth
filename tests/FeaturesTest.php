<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class FeaturesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    /**
     * @return void
     */
    public function testHasActivateFeature()
    {
        // activate test
        $uri = route_to('auth.activate-account');
        $this->get($uri)->assertIsInt(200);

        // resend activate test
        $uri = route_to('auth.resend-activate-account');
        $this->get($uri)->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasForgotFeature()
    {
        // forgot test
        $uri = route_to('auth.forgot');
        $this->get($uri)->assertIsInt(200);
        $this->post('forgot')->assertIsInt(200);

        // reset test
        $uri = route_to('auth.reset-password');
        $this->get($uri)->assertIsInt(200);
        $this->post('reset-password')->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasLoginFeature()
    {
        // login test
        $uri = route_to('auth.login');
        $this->get($uri)->assertIsInt(200);
        $this->post('login')->assertIsInt(200);

        // logout test
        $uri = route_to(route_to('auth.logout'));
        $this->get($uri)->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasRegisterFeature()
    {
        // register test
        $uri = route_to('auth.register');
        $this->get($uri)->assertIsInt(200);
        $this->post('register')->assertIsInt(200);
    }
}
