<?php

use CodeIgniter\Config\Factories;
use CodeIgniter\Test\FeatureTestTrait;
use Config\Validation;
use Conquer\Auth\Validation\Rules\Password;
use Tests\Support\ConquerAuthUnitTestCase;

/**
 * @internal
 */
final class RegistrationTest extends ConquerAuthUnitTestCase
{
    use FeatureTestTrait;

    protected function setUp(): void
    {
        // Do Not Edit This Line!!!
        parent::setUp();

        $config             = new Validation();
        $config->ruleSets[] = Password::class;
        $config->ruleSets   = array_reverse($config->ruleSets);
        Factories::injectMock('Config', 'Validation', $config);
    }

    /**
     * @return void
     */
    public function testRegistrationScreenCanBeRendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testNewUsersCanRegister()
    {
        $data = [
            'name'                  => 'Test User',
            'email'                 => 'test@example.com',
            'password'              => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);

        $this->seeInDatabase('users', [
            'name'  => $data['name'],
            'email' => $data['email'],
        ]);

        $response->assertRedirectTo('/login');
    }
}
