<?php

// declare(strict_types=1);

namespace App\Helpers;

class ConnectIpsHelper
{
    public static function generateToken($token_values)
    {
        $path = storage_path('/app/public/certificate/CREDITOR.pfx');

        if (!$cert_store = file_get_contents($path)) {
            echo "Error: Unable to read the cert file\n";
            exit;
        }

        // Try to read certificate file
        if (openssl_pkcs12_read($cert_store, $cert_info, "123")) {
            if ($private_key = openssl_pkey_get_private($cert_info['pkey'])) {
                $array = openssl_pkey_get_details($private_key);
                // print_r($array);
            }
        } else {
            $error = openssl_error_string();
            echo "Error: Unable to read the cert store. OpenSSL Error: $error\n";
            exit;
        }
        $hash = "";
        if (openssl_sign($token_values, $signature, $private_key, "sha256WithRSAEncryption")) {
            $hash = base64_encode($signature);
            // openssl_free_key($private_key);
        } else {
            echo "Error: Unable openssl_sign";
            exit;
        }
        return $hash;
    }
}
