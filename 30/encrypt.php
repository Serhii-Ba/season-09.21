<?php

// http://
// https://


$plaintext = 'Hello world';
$key = '123123';
$tag = '';
$algo = 'id-aes256-CCM';
$ivlen = openssl_cipher_iv_length($algo);
$iv = openssl_random_pseudo_bytes($ivlen);

$encoded = openssl_encrypt($plaintext, $algo, $key, $options=0, $iv, $tag);
echo $encoded . "\n";

echo openssl_decrypt($encoded, $algo, $key, $options=0, $iv, $tag) . "\n";

