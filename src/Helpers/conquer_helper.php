<?php

// Conquer\Auth Helper

use CodeIgniter\Encryption\Exceptions\EncryptionException;
use Config\Services;

if (! function_exists('str_encrypt')) {
    /**
     * Encrypt - convert plaintext into ciphertext
     *
     * @param string            $data   Input data
     * @param array|string|null $params Overridden parameters, specifically the key
     *
     * @return string
     *
     * @throws EncryptionException
     */
    function str_encrypt($data, $params = null)
    {
        return bin2hex(Services::encrypter()->encrypt($data, $params));
    }
}

if (! function_exists('str_decrypt')) {
    /**
     * Decrypt - convert ciphertext into plaintext
     *
     * @param string            $data   Encrypted data
     * @param array|string|null $params Overridden parameters, specifically the key
     *
     * @return string
     *
     * @throws EncryptionException
     */
    function str_decrypt($data, $params = null)
    {
        return Services::encrypter()->decrypt(hex2bin($data), $params);
    }
}
