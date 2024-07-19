<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;

class CustomEncryptor
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function encrypt($string)
    {
        $key = $this->key;
        $cipher = config('app.cipher', 'AES-256-CBC');

        $iv = Str::random(openssl_cipher_iv_length($cipher));
        $value = openssl_encrypt($string, $cipher, $key, 0, $iv);

        if ($value === false) {
            throw new \RuntimeException('Could not encrypt the data.');
        }

        // Encode the payload with base64
        $encryptedString = base64_encode(json_encode(['iv' => $iv, 'value' => $value]));

        return $encryptedString;
    }

    public function decrypt($encryptedString)
    {
        $key = $this->key;
        $cipher = config('app.cipher', 'AES-256-CBC');

        $payload = json_decode(base64_decode($encryptedString), true);

        $value = openssl_decrypt($payload['value'], $cipher, $key, 0, $payload['iv']);

        if ($value === false) {
            throw new DecryptException('Could not decrypt the data.');
        }

        return $value;
    }
}
