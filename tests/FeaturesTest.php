<?php

use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\ConquerAuthTestCase;

/**
 * @internal
 */
final class FeaturesTest extends ConquerAuthTestCase
{
    use FeatureTestTrait;

    /**
     * @return void
     */
    public function testHasActivateFeature()
    {
        // activate test
        $this->get($this->routeToActivateAccount())->assertIsInt(200);

        // resend activate test
        $this->get($this->routeToResendActivateAccount())->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasForgotFeature()
    {
        // forgot test
        $this->get($this->routeToForgot())->assertIsInt(200);
        $this->post($this->routeToForgot())->assertIsInt(200);

        // reset test
        $this->get($this->routeToResetPassword())->assertIsInt(200);
        $this->post($this->routeToResetPassword())->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasLoginFeature()
    {
        // login test
        $this->get($this->routeToLogin())->assertIsInt(200);
        $this->post($this->routeToLogin())->assertIsInt(200);

        // logout test
        $this->get($this->routeToLogout())->assertIsInt(200);
    }

    /**
     * @return void
     */
    public function testHasRegisterFeature()
    {
        // register test
        $this->get($this->routeToRegister())->assertIsInt(200);
        $this->post($this->routeToRegister())->assertIsInt(200);
    }
}
