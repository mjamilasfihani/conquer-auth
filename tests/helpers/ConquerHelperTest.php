<?php

use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 */
final class ConquerHelperTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        helper('conquer');
    }

    /**
     * @return void
     */
    public function testEncrypterHelper()
    {
        $obj      = config('Encryption');
        $property = 'key';
        $value    = hex2bin('5d06cbc2b299d0a5f4abaad06f9a97d7ac46228739fda4eb41fae7f7da8e2f94');

        $this->setPrivateProperty($obj, $property, $value);

        $decryptedStr = 'test';
        $encryptedStr = 'f00ccb1980b5cea5d1fcd31c47a82686bd3d9b61a8176b9d563dc723cc6ab1d180bc302cc0e11a46a946ed37bdf5362f33e70e94b0fa449b8ffa4614152d81de32fc94e1600bb4918411ec9b7e281e7e4f1909e4';

        $this->assertSame(str_decrypt($encryptedStr), $decryptedStr);
        $this->assertSame(str_decrypt(str_encrypt($decryptedStr)), $decryptedStr);
    }
}
