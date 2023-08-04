<?php

declare(strict_types=1);

use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    $advertisements = Advertisement::with('category', 'group', 'subGroup', 'level')->get();

    return view('welcome')->with(compact('advertisements'));
})->name('test');

Route::redirect('/', '/login');

Route::group(['middleware' => ['auth', 'validate.tab']], function () {

    Route::group(['prefix' => ''], function () {
        Route::group(['namespace' => 'User'], function () {

            Route::get('support', [App\Http\Controllers\User\SupportController::class, 'index'])->name('support');
            Route::post('support/store', [App\Http\Controllers\User\SupportController::class, 'store'])->name('support.store');

            // Personal Details
            Route::get(uri: '/personal', action: 'PersonalController@index')->name(name: 'personal');
            Route::post(uri: '/personal/store', action: 'PersonalController@store')->name(name: 'personal.store');

            // Contact Details
            Route::get(uri: '/contact', action: 'ContactController@index')->name(name: 'contact');
            Route::post(uri: '/contact/store', action: 'ContactController@store')->name(name: 'contact.store');
            Route::get('/get-districts/{provinceId}', 'ContactController@getDistricts');
            Route::get('/get-municipalities/{districtId}', 'ContactController@getMunicipalities');

            // Education Details
            Route::resource('education', EducationController::class)->except(['show']);

            // Training Details
            Route::resource('training', TrainingController::class)->except(['show']);

            // Experience Details
            Route::resource('experience', ExperienceController::class)->except(['show']);

            // Uploads
            Route::get(uri: 'upload', action: 'UploadController@index')->name(name: 'upload');
            Route::post(uri: '/upload/store', action: 'UploadController@store')->name(name: 'upload.store');

            Route::post('/update_advAmount', 'ApplicationController@updateAdvAmount');
            Route::get('application/applied', 'ApplicationController@applied')->name('application.applied');
            Route::get('/load-applications', 'ApplicationController@loadApplications')->name('load.applications');
            Route::resource('application', ApplicationController::class);

            // Payment
            Route::resource('payment', PaymentController::class)->only(['index', 'show']);

            // FOR ESEWA
            Route::get('esewa/payments/{applicationRefID}', [App\Http\Controllers\User\Payments\EsewaController::class, 'initializeEsewa'])->name('esewa.payments');
            Route::get('esewa/payments-success/{paymentRefID}', [App\Http\Controllers\User\Payments\EsewaController::class, 'successEsewa'])->name('esewa.success');
            Route::get('esewa/payments-failure/{paymentRefID}', [App\Http\Controllers\User\Payments\EsewaController::class, 'failureEsewa'])->name('esewa.failure');

            // FOR KHALTI
            Route::post(
                '/khalti/payments/{applicationRefID}',
                [App\Http\Controllers\User\Payments\KhaltiController::class, 'initializeKhalti']
            )->name('khalti.payments');
            Route::get(
                'khalti/payments-verification',
                [App\Http\Controllers\User\Payments\KhaltiController::class, 'verificationKhalti']
            )->name('khalti.payments-verification');

            // FOR CONNECTIPS
            Route::get('connectips/payments/{applicationRefID}', [App\Http\Controllers\User\Payments\ConnectIpsController::class, 'initializeIPS'])->name('connectips.payments');
            Route::any('connectips/payments-success/{id}', [App\Http\Controllers\User\Payments\ConnectIpsController::class, 'successIPS'])->name('connectips.success');
            Route::any('connectips/payments-failure/{id}', [App\Http\Controllers\User\Payments\ConnectIpsController::class, 'failureIPS'])->name('connectips.failure');

            // FOR IMEPAY
            Route::get('imepay/payments/{applicationRefID}', [App\Http\Controllers\User\Payments\ImePayController::class, 'initializeImePay'])->name('imepay.payments');
            Route::get('imepay/payments-success/{paymentRefID}', [App\Http\Controllers\User\Payments\ImePayController::class, 'imePaymentResponse'])->name('imepay.success');
            Route::get('imepay/payments-failure/{paymentRefID}', [App\Http\Controllers\User\Payments\ImePayController::class, 'imePaymentResponseCancel'])->name('imepay.failure');
        });
    });
});

Route::get('/media/{media}', [\App\Http\Controllers\Admin\MediaController::class, 'download'])->name('download.media');

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require __DIR__ . '/admin.php';
