<?php

include 'phpseclib0.3.9/Crypt/AES.php';

$cipher = new Crypt_AES(CRYPT_AES_MODE_ECB);

$cipher->setKey('abcdefghijklmnopqrstuvwx');

echo bin2hex($cipher->encrypt("呂學倫"));

echo $cipher->decrypt(pack('H*', '78e93b1b65dd83b1b49f5e6a22eebdde'));
