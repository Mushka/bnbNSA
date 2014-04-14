<?php

    include 'aes.class.php';
    $imputText = "r0bf0rdsn0w-r0bf0rdsn0w-r0bf0rdsn0w-r0bf0rdsn0w!!";
    $imputKey = "s5l8920x";
    $blockSize = 128;
    $aes = new AES($imputText, $imputKey, $blockSize);
    $enc = $aes->encrypt();
    $aes->setData($enc);
    $dec=$aes->decrypt();
    echo "After encryption: ".$enc."<br/>";
    echo "After decryption: ".$dec."<br/>";