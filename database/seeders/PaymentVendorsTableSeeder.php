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

        DB::table('payment_vendors')->insert([
            0 => [

                'name' => 'E-Sewa',
                'payment_gateway' => 'esewa',
                'merchant_id' => null,
                'merchant_code' => 'EPAYTEST',
                'app_id' => null,
                'app_name' => null,
                'token_url' => 'https://uat.esewa.com.np/epay/main',
                'checkout_url' => null,
                'verify_url' => 'https://uat.esewa.com.np/epay/transrec',
                'recheck_url' => null,
                'username' => null,
                'verify_password' => null,
                'cert_password' => null,
                'public_key' => null,
                'secret_key' => null,
                'created_at' => '2023-07-20 13:02:28',
                'updated_at' => '2023-07-20 13:08:04',
                'deleted_at' => null,
            ],
            1 => [

                'name' => 'Khalti',
                'payment_gateway' => 'khalti',
                'merchant_id' => null,
                'merchant_code' => null,
                'app_id' => null,
                'app_name' => null,
                'token_url' => 'https://a.khalti.com/api/v2/epayment/initiate/',
                'checkout_url' => null,
                'verify_url' => 'https://a.khalti.com/api/v2/epayment/lookup/',
                'recheck_url' => null,
                'username' => null,
                'verify_password' => null,
                'cert_password' => null,
                'public_key' => 'test_public_key_15ecc4b864bc48fa98f8aebf5d358664',
                'secret_key' => 'd04d0838688047b2bb78f70a1b2951a9',
                'created_at' => '2023-07-20 13:03:43',
                'updated_at' => '2023-07-20 13:08:06',
                'deleted_at' => null,
            ],
            2 => [

                'name' => 'Connect IPS',
                'payment_gateway' => 'connectips',
                'merchant_id' => '1051',
                'merchant_code' => null,
                'app_id' => 'MER-1051-APP-1',
                'app_name' => 'NEA',
                'token_url' => null,
                'checkout_url' => 'https://uat.connectips.com/connectipswebgw/loginpage',
                'verify_url' => 'https://uat.connectips.com/connectipswebws/api/creditor/validatetxn',
                'recheck_url' => null,
                'username' => null,
                'verify_password' => 'Abcd@123',
                'cert_password' => '123',
                'public_key' => null,
                'secret_key' => null,
                'created_at' => '2023-07-20 13:05:45',
                'updated_at' => '2023-07-20 13:08:08',
                'deleted_at' => null,
            ],
            3 => [

                'name' => 'IME Pay',
                'payment_gateway' => 'imepay',
                'merchant_id' => null,
                'merchant_code' => 'NEAVAC',
                'app_id' => null,
                'app_name' => 'NEAVAC',
                'token_url' => 'https://stg.imepay.com.np:7979/api/Web/GetToken',
                'checkout_url' => 'https://stg.imepay.com.np:7979/WebCheckout/Checkout',
                'verify_url' => 'https://stg.imepay.com.np:7979/api/Web/Confirm',
                'recheck_url' => 'https://stg.imepay.com.np:7979/api/Web/Recheck',
                'username' => 'neahumanresources',
                'verify_password' => 'ime@1234',
                'cert_password' => null,
                'public_key' => null,
                'secret_key' => null,
                'created_at' => '2023-07-20 13:07:56',
                'updated_at' => '2023-07-20 13:08:07',
                'deleted_at' => null,
            ],
        ]);
    }
}
