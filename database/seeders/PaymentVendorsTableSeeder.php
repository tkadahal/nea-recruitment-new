<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentVendorsTableSeeder extends Seeder
{
    public function run(): void
    {


        DB::table('payment_vendors')->delete();

        DB::table('payment_vendors')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'E-Sewa',
                'payment_gateway' => 'esewa',
                'merchant_id' => NULL,
                'merchant_code' => 'EPAYTEST',
                'app_id' => NULL,
                'app_name' => NULL,
                'token_url' => 'https://uat.esewa.com.np/epay/main',
                'checkout_url' => NULL,
                'verify_url' => 'https://uat.esewa.com.np/epay/transrec',
                'recheck_url' => NULL,
                'username' => NULL,
                'verify_password' => NULL,
                'cert_password' => NULL,
                'public_key' => NULL,
                'secret_key' => NULL,
                'active' => 1,
                'created_at' => '2023-07-20 13:02:28',
                'updated_at' => '2023-07-20 13:08:04',
                'deleted_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Khalti',
                'payment_gateway' => 'khalti',
                'merchant_id' => NULL,
                'merchant_code' => NULL,
                'app_id' => NULL,
                'app_name' => NULL,
                'token_url' => 'https://a.khalti.com/api/v2/epayment/initiate/',
                'checkout_url' => NULL,
                'verify_url' => 'https://a.khalti.com/api/v2/epayment/lookup/',
                'recheck_url' => NULL,
                'username' => NULL,
                'verify_password' => NULL,
                'cert_password' => NULL,
                'public_key' => 'test_public_key_15ecc4b864bc48fa98f8aebf5d358664',
                'secret_key' => 'd04d0838688047b2bb78f70a1b2951a9',
                'active' => 1,
                'created_at' => '2023-07-20 13:03:43',
                'updated_at' => '2023-07-20 13:08:06',
                'deleted_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Connect IPS',
                'payment_gateway' => 'connectips',
                'merchant_id' => '271',
                'merchant_code' => NULL,
                'app_id' => 'NEA-271-APP-4',
                'app_name' => 'NEA Recruitment Open',
                'token_url' => NULL,
                'checkout_url' => 'https://login.connectips.com/connectipswebgw/loginpage',
                'verify_url' => 'https://login.connectips.com/connectipswebws/api/creditor/validatetxn',
                'recheck_url' => NULL,
                'username' => NULL,
                'verify_password' => 'N3@12#',
                'cert_password' => 'N3@12#',
                'public_key' => NULL,
                'secret_key' => NULL,
                'active' => 1,
                'created_at' => '2023-07-20 13:05:45',
                'updated_at' => '2023-07-20 13:08:08',
                'deleted_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'IME Pay',
                'payment_gateway' => 'imepay',
                'merchant_id' => NULL,
                'merchant_code' => 'NEAVAC',
                'app_id' => NULL,
                'app_name' => 'NEAVAC',
                'token_url' => 'https://stg.imepay.com.np:7979/api/Web/GetToken',
                'checkout_url' => 'https://stg.imepay.com.np:7979/WebCheckout/Checkout',
                'verify_url' => 'https://stg.imepay.com.np:7979/api/Web/Confirm',
                'recheck_url' => 'https://stg.imepay.com.np:7979/api/Web/Recheck',
                'username' => 'neahumanresources',
                'verify_password' => 'ime@1234',
                'cert_password' => NULL,
                'public_key' => NULL,
                'secret_key' => NULL,
                'active' => 1,
                'created_at' => '2023-07-20 13:07:56',
                'updated_at' => '2023-07-20 13:08:07',
                'deleted_at' => NULL,
            ),
        ));
    }
}
