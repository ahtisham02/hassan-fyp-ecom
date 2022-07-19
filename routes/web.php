<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Backend\CustomProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*  route */
Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'backend.'], function () {
// Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('account', 'AccountController@show')->name('account');
        Route::put('account/{id}', 'AccountController@update')->name('account.update');
        Route::get('announcement_list', 'AnnouncementsController@announcementsList')->name('announcements.list');
        Route::get('best_selling_product', 'HomeController@bestSellingProducts')->name('best_selling_products');
        Route::get('best_customers', 'HomeController@bestCustomers')->name('best_customers');
        Route::get('new_orders', 'HomeController@newOrders')->name('new_orders');
        Route::get('monthly_sale', 'HomeController@monthlySale')->name('monthly_sale');
        Route::get('best_selling_category', 'HomeController@bestSellingProductCategory');
        Route::get('banner_list', 'BannerController@bannerList')->name('banner.list');
        Route::get('product_review_list', 'ProductReviewController@productReviewList')->name('product_review.list');
        Route::get('role_list', 'RoleController@roleList')->name('role.list');
        Route::get('user_list', 'UserController@userList')->name('user.list');
        Route::get('permission_list', 'PermissionController@permissionList')->name('permission.list');
        Route::get('faq_category_list', 'FaqCategoryController@faqCategoryList')->name('faq_category.list');
        Route::get('faq_subcategory_list', 'FaqSubCategoryController@faqSubCategoryList')->name('faq_subcategory.list');
        Route::get('faq_content_list', 'FaqController@faqContentList')->name('faq_content.list');
        Route::get('currency_list', 'CurrencyController@currencyList')->name('currency.list');


        Route::group(['middleware' => ['check_permission']], function () {
            Route::get('/', 'HomeController@index')->name('home');
            Route::resource('roles', 'RoleController')->except(['show']);
            Route::get('user/changeStatus', 'UserController@changeStatus');
            Route::resource('users', 'UserController')->except(['show']);
            Route::resource('permissions', 'PermissionController')->except(['show']);
            Route::get('role_permissions', 'RoleController@rolePermissions');
            /* contents routes */
            Route::get('banner/changeStatus', 'BannerController@changeStatus');
            Route::resource('banners', 'BannerController')->except('show');
            Route::get('product_review/changeStatus', 'ProductReviewController@changeStatus');
            Route::resource('product_review', 'ProductReviewController')->except('create', 'store');
            /* faq routes */
            Route::get('faq_category/changeStatus', 'FaqCategoryController@changeStatus');
            Route::resource('faq_category', 'FaqCategoryController')->except('show');
            Route::get('faq_subcategory/changeStatus', 'FaqSubCategoryController@changeStatus');
            Route::resource('faq_subcategory', 'FaqSubCategoryController')->except('show');
            Route::get('faq_contents/changeStatus', 'FaqController@changeStatus');
            Route::resource('faq_content', 'FaqController');
            /* report routes */
            Route::get('stock_report_list', 'ReportController@stockReportList')->name('stock_report.list');
            Route::get('stock_report', 'ReportController@stockReport')->name('stock_report');
            Route::get('seller_report', 'ReportController@sellerReport')->name('seller_report');
            Route::get('seller_report_list', 'ReportController@sellerReportList')->name('seller_report.list');
            Route::get('customer_report', 'ReportController@customerReport')->name('customer_report');
            Route::get('customer_report_list', 'ReportController@customerReportList')->name('customer_report.list');
            /* website setting routes */
            Route::get('banner/changeStatus', 'BannerController@changeStatus');
            Route::get('website_setting/header', 'WebsiteSettingController@header')->name('website_setting.header');
            Route::get('website_setting/changeStatus', 'WebsiteSettingController@changeStatus');
            Route::post('website_setting/upload_logo', 'WebsiteSettingController@uploadLogo');
            Route::get('website_setting/page_list', 'WebsiteSettingController@pageList')->name('website_setting.page.list');
            Route::get('website_setting/pages', 'WebsiteSettingController@pages')->name('website_setting.pages');
            Route::get('website_setting/pages/{id}/edit', 'WebsiteSettingController@pageEdit')->name('website_setting.pages.edit');
            Route::put('website_setting/pages/{id}', 'WebsiteSettingController@pageUpdate')->name('website_setting.pages.update');
            Route::get('website_setting/changeMenuStatus', 'WebsiteSettingController@changeMenuStatus');
            Route::get('website_setting/appearance', 'WebsiteSettingController@appearance')->name('website_setting.appearance');
            Route::resource('website_setting/announcements', AnnouncementsController::class, ['names' => 'announcements']);
            Route::get('announcements/changeStatus', 'AnnouncementsController@changeStatus');
            Route::put('website_setting/appearance/{id}', 'WebsiteSettingController@appearanceUpdate')->name('website_setting.appearance.update');
            Route::resource('payment_gateway', PaymentGatewayController::class)->except(['create','store','show','destroy']);
            Route::resource('website_setting/currency', CurrencyController::class, ['names' => 'currency']);
            Route::get('currency/changeStatus', 'CurrencyController@changeStatus');

            Route::get('/create-custom-product','CustomProductController@Adminindex')->name('products.create-custom-product');
            Route::post('/search-custom-product','CustomProductController@Adminstore')->name('search-custom-product');
            Route::get('/pag1/{id}','CustomProductController@Adminshow')->name('pag1');
            Route::POST('/raw','\App\Http\Controllers\RawController@Adminstore')->name('raw');
            Route::POST('/slab','\App\Http\Controllers\SlabbedController@Adminstore')->name('slab');
            Route::POST('/pgo','\App\Http\Controllers\PageoController@Adminstore')->name('pgo');
            Route::POST('/pageth','\App\Http\Controllers\PagethController@Adminstore')->name('pageth');
            Route::POST('/pagefo','\App\Http\Controllers\PagefoController@Adminstore')->name('pagefo');
            // Route::POST('/pag1nn/{id}','\App\Http\Controllers\PageoController@Admincreate')->name('pag1nn');
            // Route::POST('/pag1sbooks/{id}','\App\Http\Controllers\PageoController@Adminupdate')->name('pag1sbooks');
            // Route::POST('/test','\App\Http\Controllers\PageoController@Adminedit')->name('test');
        });
    });
});
/* seller route */
Route::group(['prefix' => 'seller', 'namespace' => 'Backend', 'as' => 'seller.'], function () {
    Route::get('register','Auth\SellerLoginController@showRegistrationForm')->name('register');
    Route::post('register','Auth\SellerLoginController@showRegistrationForm')->name('register');
    /* seller authentication */
    Route::get('login', 'Auth\SellerLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\SellerLoginController@login');
    Route::post('logout', 'Auth\SellerLoginController@logout')->name('logout');

// Password Reset Routes...
    Route::get('password/reset', 'Auth\SellerForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\SellerForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\SellerResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\SellerResetPasswordController@reset')->name('password.update');

    Route::group(['middleware' => 'auth:seller'], function () {

        Route::get('account', 'AccountController@show')->name('account');
        Route::put('account/{id}', 'AccountController@update')->name('account.update');
        Route::get('announcement_list', 'AnnouncementsController@announcementsList')->name('announcements.list');
        Route::get('best_selling_product', 'HomeController@bestSellingProducts')->name('best_selling_products');
        Route::get('best_customers', 'HomeController@bestCustomers')->name('best_customers');
        Route::get('new_orders', 'HomeController@newOrders')->name('new_orders');
        Route::get('monthly_sale', 'HomeController@monthlySale')->name('monthly_sale');
        Route::get('best_selling_category', 'HomeController@bestSellingProductCategory');
        Route::get('banner_list', 'BannerController@bannerList')->name('banner.list');
        Route::get('product_review_list', 'ProductReviewController@productReviewList')->name('product_review.list');

        Route::group(['middleware' => ['check_permission']], function () {
            Route::get('/', 'HomeController@index')->name('home');
            /* contents routes */
            Route::get('banner/changeStatus', 'BannerController@changeStatus');
            Route::resource('banners', 'BannerController')->except('show');
            Route::get('product_review/changeStatus', 'ProductReviewController@changeStatus');
            Route::resource('product_review', 'ProductReviewController')->except('create', 'store');
            /* report routes */
            Route::get('stock_report_list', 'ReportController@stockReportList')->name('stock_report.list');
            Route::get('stock_report', 'ReportController@stockReport')->name('stock_report');
            Route::get('seller_report', 'ReportController@sellerReport')->name('seller_report');
            Route::get('seller_report_list', 'ReportController@sellerReportList')->name('seller_report.list');
            Route::get('customer_report', 'ReportController@customerReport')->name('customer_report');
            Route::get('customer_report_list', 'ReportController@customerReportList')->name('customer_report.list');
        });

        Route::get('/create-custom-product','CustomProductController@index')->name('products.create-custom-product');
        Route::post('/search-custom-product','CustomProductController@store')->name('search-custom-product');
        Route::get('/pag1/{id}','CustomProductController@show')->name('pag1');
        Route::POST('/raw','\App\Http\Controllers\RawController@store')->name('raw');
        Route::POST('/slab','\App\Http\Controllers\SlabbedController@store')->name('slab');
        // Route::post('/search-custom-product','\App\Http\Controllers\GcdBrndController@store')->name('search-custom-product');
        Route::POST('/pgo','\App\Http\Controllers\PageoController@store')->name('pgo');
        // Route::POST('/raw','\App\Http\Controllers\RawController@store')->name('raw');
        // Route::POST('/slab','\App\Http\Controllers\SlabbedController@store')->name('slab');
        Route::POST('/pageth','\App\Http\Controllers\PagethController@store')->name('pageth');
        Route::POST('/pagefo','\App\Http\Controllers\PagefoController@store')->name('pagefo');
        // Route::POST('/pag1/{id}','\App\Http\Controllers\PageoController@show')->name('pag1');
        Route::POST('/pag1nn/{id}','\App\Http\Controllers\PageoController@create')->name('pag1nn');
        Route::POST('/pag1sbooks/{id}','\App\Http\Controllers\PageoController@update')->name('pag1sbooks');
        Route::POST('/test','\App\Http\Controllers\PageoController@edit')->name('test');
    });
});

