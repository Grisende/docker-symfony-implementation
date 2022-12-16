<?php

namespace App\Helper;

class HashHelper
{
    public function generateRandomString(int $length = 8) : string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateHashes(string $inputString, int $requestsNumber): array
    {
        $attempts = 1;
        $hash = '';
        $hashes = [];
        $key = '';

        for ($i = 0; $i<$requestsNumber; $i++) {
            while (!str_starts_with($hash, '0000')) {
                $key = $this->generateRandomString();
                $hash = md5($inputString . $key);
                $attempts++;
            }
            $hashes[] = array_merge([
                'batch_timestamp' => new \DateTime('now'),
                'block_number' => $i+1,
                'input_string' => $inputString,
                'key_matched' => $key,
                'hash_generated' => $hash,
                'attempts' => $attempts
            ]);
            $inputString = $hash;
            $hash = '';
        }

        return $hashes;
    }
}