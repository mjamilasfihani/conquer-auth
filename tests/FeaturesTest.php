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
        $this->get('forgot')->assertIsString('200');
        $this->post('forgot')->assertIsInt(200);
        $this->get('reset')->assertIsString('200');
        $this->post('reset')->assertIsInt(200);
    }

    public function testHasLoginFeature()
    {
        $this->get('login')->assertIsString('200');
        $this->post('login')->assertIsInt(200);
        $this->get('logout')->assertIsInt(200);
    }

    public function testHasRegisterFeature()
    {
        $this->get('register')->assertIsString('200');
        $this->post('register')->assertIsInt(200);
    }
}
