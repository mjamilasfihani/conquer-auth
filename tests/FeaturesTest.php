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
        $this->get('activate-account')->assertIsInt(200);
        $this->get('resend-activate-account')->assertIsInt(200);
    }

    public function testHasForgotFeature()
    {
        $this->get('forgot-password')->assertIsInt(200);
        $this->post('forgot-password')->assertIsInt(200);
        $this->get('reset-password')->assertIsInt(200);
        $this->post('reset-password')->assertIsInt(200);
    }

    public function testHasLoginFeature()
    {
        $this->get('login')->assertIsInt(200);
        $this->post('login')->assertIsInt(200);
        $this->get('login')->assertIsInt(200);
    }

    public function testHasRegisterFeature()
    {
        $this->get('register')->assertIsInt(200);
        $this->post('register')->assertIsInt(200);
    }
}
