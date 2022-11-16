<?php

use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\ConquerAuthTestCase;

/**
 * @internal
 */
final class FeaturesTest extends ConquerAuthTestCase
{
    use FeatureTestTrait;

    public function testHasActivateFeature()
    {
        $this->get('activate')->assertIsInt(200);
        $this->get('resend')->assertIsInt(200);
    }

    public function testHasForgotFeature()
    {
        $this->get('forgot')->assertOK();
        $this->post('forgot')->assertIsInt(200);
        $this->get('reset')->assertOK();
        $this->post('reset')->assertIsInt(200);
    }

    public function testHasLoginFeature()
    {
        $this->get('login')->assertOK();
        $this->post('login')->assertIsInt(200);
        $this->get('logout')->assertIsInt(200);
    }

    public function testHasRegisterFeature()
    {
        $this->get('register')->assertOK();
        $this->post('register')->assertIsInt(200);
    }
}
