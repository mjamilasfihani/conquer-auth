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
        $activate_account = route_to('auth.activate-account');
        $this->get($activate_account)->assertIsInt(200);

        // resend activate test
        $resend_activate_account = route_to('auth.resend-activate-account');
        $this->get($resend_activate_account)->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasForgotFeature()
    {
        // forgot test
        $forgot = route_to('auth.forgot');
        $this->get($forgot)->assertIsInt(200);
        $this->post('forgot')->assertIsInt(200);

        // reset test
        $reset_password = route_to('auth.reset-password');
        $this->get($reset_password)->assertIsInt(200);
        $this->post('reset-password')->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasLoginFeature()
    {
        // login test
        $login = route_to('auth.login');
        $this->get($login)->assertIsInt(200);
        $this->post('login')->assertIsInt(200);

        // logout test
        $logout = route_to(route_to('auth.logout'));
        $this->get($logout)->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasRegisterFeature()
    {
        // register test
        $register = route_to('auth.register');
        $this->get($register)->assertIsInt(200);
        $this->post('register')->assertIsInt(200);
    }
}
