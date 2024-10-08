<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;

// Admin Routes
Route::controller(AdminLoginController::class)->group(function () {
    Route::get('master', 'showLoginForm')->name('master');
    Route::post('master', 'login')->name('master.post');
    Route::post('masterLogout', 'logout')->name('masterLogout');
});

Route::middleware(['auth:admin'])->group(function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['namespace' => 'Admin'], function () {

            // Admin Dashboard
            Route::get('/home', DashboardController::class)->name('home');

            // Permissions
            Route::delete(uri: 'permissions/destroy', action: 'PermissionController@massDestroy')->name(name: 'permissions.massDestroy');
            Route::resource(name: 'permission', controller: PermissionController::class);

            // Roles
            Route::delete(uri: 'roles/destroy', action: 'RoleController@massDestroy')->name(name: 'roles.massDestroy');
            Route::resource(name: 'role', controller: RoleController::class);

            // Admin Users
            Route::delete(uri: 'admins/destroy', action: 'AdminController@massDestroy')->name(name: 'admins.massDestroy');
            Route::get('/get-advertisements/{examCenterId}', 'AdminController@getAdvertisements');
            Route::resource(name: 'admin', controller: AdminController::class);

            // Payment Vendors
            Route::delete(uri: 'paymentVendors/destroy', action: 'PaymentVendorController@massDestroy')->name(name: 'paymentVendors.massDestroy');
            Route::resource(name: 'paymentVendor', controller: PaymentVendorController::class);

            // Provinces
            Route::delete(uri: 'provinces/destroy', action: 'ProvinceController@massDestroy')->name(name: 'provinces.massDestroy');
            Route::resource(name: 'province', controller: ProvinceController::class);

            // Districts
            Route::delete(uri: 'districts/destroy', action: 'DistrictController@massDestroy')->name(name: 'districts.massDestroy');
            Route::resource(name: 'district', controller: DistrictController::class);

            // Municipalities
            Route::delete(uri: 'municipalities/destroy', action: 'MunicipalityController@massDestroy')->name(name: 'municipalities.massDestroy');
            Route::resource(name: 'municipality', controller: MunicipalityController::class);

            // Fiscal Year
            Route::delete(uri: 'fiscalYears/destroy', action: 'FiscalYearController@massDestroy')->name(name: 'fiscalYears.massDestroy');
            Route::resource(name: 'fiscalYear', controller: FiscalYearController::class);

            // Countries
            Route::delete(uri: 'countries/destroy', action: 'CountryController@massDestroy')->name(name: 'countries.massDestroy');
            Route::resource(name: 'country', controller: CountryController::class);

            // Genders
            Route::delete(uri: 'genders/destroy', action: 'GenderController@massDestroy')->name(name: 'genders.massDestroy');
            Route::resource(name: 'gender', controller: GenderController::class);

            // Media Types
            Route::delete(uri: 'mediaTypes/destroy', action: 'MediaTypeController@massDestroy')->name(name: 'mediaTypes.massDestroy');
            Route::resource(name: 'mediaType', controller: MediaTypeController::class);

            // Qualifications
            Route::delete(uri: 'qualifications/destroy', action: 'QualificationController@massDestroy')->name(name: 'qualifications.massDestroy');
            Route::resource(name: 'qualification', controller: QualificationController::class);

            // Univeristies
            Route::delete(uri: 'universities/destroy', action: 'UniversityController@massDestroy')->name(name: 'universities.massDestroy');
            Route::resource(name: 'university', controller: UniversityController::class);

            // Divisions
            Route::delete(uri: 'divisions/destroy', action: 'DivisionController@massDestroy')->name(name: 'divisions.massDestroy');
            Route::resource(name: 'division', controller: DivisionController::class);

            // Recruitment Types
            Route::delete(uri: 'recruitmentTypes/destroy', action: 'RecruitmentTypeController@massDestroy')->name(name: 'recruitmentTypes.massDestroy');
            Route::resource(name: 'recruitmentType', controller: RecruitmentTypeController::class);

            // Sewas
            Route::delete(uri: 'categories/destroy', action: 'CategoryController@massDestroy')->name(name: 'categories.massDestroy');
            Route::resource(name: 'category', controller: CategoryController::class);

            // Groups
            Route::delete(uri: 'groups/destroy', action: 'GroupController@massDestroy')->name(name: 'groups.massDestroy');
            Route::resource(name: 'group', controller: GroupController::class);

            // Sub Groups
            Route::delete(uri: 'subGroups/destroy', action: 'SubGroupController@massDestroy')->name(name: 'subGroups.massDestroy');
            Route::resource(name: 'subGroup', controller: SubGroupController::class);

            // Levels
            Route::delete(uri: 'levels/destroy', action: 'LevelController@massDestroy')->name(name: 'levels.massDestroy');
            Route::resource(name: 'level', controller: LevelController::class);

            // Positions
            Route::get('/getSubGroupsAndLevels/{groupId}', 'PositionController@getSubGroupsAndLevels')->name('getSubGroupsAndLevels');
            Route::delete(uri: 'positions/destroy', action: 'PositionController@massDestroy')->name(name: 'positions.massDestroy');
            Route::resource(name: 'position', controller: PositionController::class);

            // Designations
            Route::delete(uri: 'designations/destroy', action: 'DesignationController@massDestroy')->name(name: 'designations.massDestroy');
            Route::resource(name: 'designation', controller: DesignationController::class);

            // Samabeshi Groups
            Route::delete(uri: 'samabeshiGroups/destroy', action: 'SamabeshiGroupController@massDestroy')->name(name: 'samabeshiGroups.massDestroy');
            Route::resource(name: 'samabeshiGroup', controller: SamabeshiGroupController::class);

            // Application Fees
            Route::delete(uri: 'applicationFees/destroy', action: 'ApplicationFeeController@massDestroy')->name(name: 'applicationFees.massDestroy');
            Route::resource(name: 'applicationFee', controller: ApplicationFeeController::class);

            // Exam Center
            Route::delete(uri: 'examCenters/destroy', action: 'ExamCenterController@massDestroy')->name(name: 'examCenters.massDestroy');
            Route::resource(name: 'examCenter', controller: ExamCenterController::class);

            // Advertisements
            Route::get('/get-groups/{categoryId}', 'AdvertisementController@getGroups');
            Route::get('/get-subgroups/{groupId}', 'AdvertisementController@getSubGroups');
            Route::get('/get-levels/{groupId}/{subGroupId}', 'AdvertisementController@getLevels');
            Route::get('/get-positions/{subGroupId}/{levelId}', 'AdvertisementController@getPositions');
            Route::delete(uri: 'advertisements/destroy', action: 'AdvertisementController@massDestroy')->name(name: 'advertisements.massDestroy');
            Route::resource(name: 'advertisement', controller: AdvertisementController::class);

            // Supports
            Route::delete(uri: 'supports/destroy', action: 'SupportController@massDestroy')->name(name: 'supports.massDestroy');
            Route::resource(name: 'support', controller: SupportController::class);

            // Applications
            Route::controller(ApplicationController::class)->group(function () {
                Route::get('application', 'index')->name('application.index');
                Route::get('application/show/{id}', 'show')->name('application.show');
                Route::get('application/viewApplication/{id}/{action}', 'viewApplications')->name('application.viewApplication');
                Route::get('application/viewUserDetail/{id}', 'viewUserDetail')->name('application.viewUserDetail');
            });

            // Application Verification
            Route::get('generateRollNo/{advertisementId}', 'PaymentVerificationController@generateRollNo')->name('generateRollNo');
            Route::get('/printExamCards/{advertisementId}', 'PrintFunctionController@printExamCards')->name('printExamCards');
            Route::get('generateCardForExamCenter/{advertisementId}', 'PaymentVerificationController@generateCardForExamCenter')->name('generateCardForExamCenter');
            Route::post('/payment-verification', 'PaymentVerificationController@store')->name('paymentVerification.store');

            //Reports
            Route::controller(ReportController::class)->group(function () {
                Route::get('getReportByPaymentVendors', 'getReportByPaymentVendors')->name('getReportByPaymentVendors');
                Route::get('getReportByApplicationCount', 'getReportByApplicationCount')->name('getReportByApplicationCount');
                Route::get('getReportByApplicantsCount', 'getReportByApplicantsCount')->name('getReportByApplicantsCount');
                Route::get('getReportByUsers', 'getReportByUsers')->name('getReportByUsers');
            });

            Route::get('language', 'LanguageController@index')->name('language');
            Route::post('language/update', 'LanguageController@update')->name('language.update');
        });
    });
});

Route::group(['prefix' => 'admin/profile', 'as' => 'admin.profile.', 'namespace' => 'Admin\Auth', 'middleware' => ['auth:admin']], function () {
    if (file_exists(app_path('Http/Controllers/Admin/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
