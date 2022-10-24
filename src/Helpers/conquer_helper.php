<?php

// Conquer\Auth Helper

use Config\Services;

if (! function_exists('str_encrypt')) {
    /**
     * Encrypt the data
     *
     * @return string
     */
    function str_encrypt(string $data)
    {
        return bin2hex(Services::encrypter()->encrypt($data));
    }
}

if (! function_exists('str_decrypt')) {
    /**
     * Decrypt the data
     *
     * @return string
     */
    function str_decrypt(string $data)
    {
        return Services::encrypter()->decrypt(hex2bin($data));
    }
}
