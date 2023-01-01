<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;
use Conquer\Auth\Auth;

/**
 * @internal
 */
final class FeaturesTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHasLoginFeatures()
    {
        $this->get('login')->assertOK();
        $this->post('login')->assertRedirectTo(Auth::landing());
        $this->get('logout')->assertRedirectTo(route_to('auth.login'));
    }

    public function testHasRegisterFeatures()
    {
        $this->get('register')->assertOK();
        $this->post('register')->assertRedirectTo(route_to('auth.resend'));
    }

    public function testHasActivateFeatures()
    {
        $this->get('activate')->assertRedirectTo(route_to('auth.login'));
        $this->get('resend')->assertRedirectTo(route_to('auth.login'));
    }

    public function testHasForgotFeatures()
    {
        $this->get('forgot')->assertOK();
        $this->post('forgot')->assertRedirectTo(route_to('auth.login'));
        $this->get('reset')->assertOK();
        $this->post('reset')->assertRedirectTo(route_to('auth.login'));
    }
}
