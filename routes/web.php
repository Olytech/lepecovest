<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();


Route::get('/choose', 'ChooseRoleController@index')->name('choose_role');

Route::post('/become_partner', 'ChooseRoleController@become_partner')->name('become_partner');

Route::post('/become_buyer', 'ChooseRoleController@become_buyer')->name('become_buyer');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/profile_incomplete', 'UserProfileController@profile_incomplete')->name('profile_incomplete');

Route::post('/update_profile', 'UserProfileController@update_profile')->name('update_profile');

Route::post('/admin_verify', 'UserProfileController@admin_verify')->name('admin_verify')->middleware('admin');

Route::post('/disapprove_profile', 'UserProfileController@disapprove_profile')->name('disapprove_profile')->middleware('admin');


Route::get('/edit_profile', 'UserProfileController@edit_profile')->name('edit_profile');



// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'FrontPageController@home')->name('home');

Route::get('/about', 'FrontPageController@about')->name('about');

Route::get('/contact', 'FrontPageController@contact')->name('contact');

Route::get('/store', 'FrontPageController@store')->name('store');

Route::get('/listing', 'FrontPageController@listing')->name('listing');

// Buyers routes



Route::group(['middleware' => ['buyer'], 'prefix' => 'buyer'], function(){

    Route::get('/', 'BuyerPageController@home')->name('buyer.home');

    Route::get('/profile', 'BuyerPageController@profile')->name('buyer.profile');

    Route::get('/notifications', 'BuyerPageController@notifications')->name('buyer.notifications');

    Route::get('/account', 'BuyerPageController@account')->name('buyer.account');

  

});

// Tenant routes

Route::group(['middleware' => ['partner'], 'prefix' => 'partner'], function(){

    Route::get('/', 'TenantPageController@home')->name('partner.home');

    Route::get('/profile', 'TenantPageController@profile')->name('partner.profile');

    Route::get('/notifications', 'TenantPageController@notifications')->name('partner.notifications');

    Route::get('/listings', 'TenantPageController@listings')->name('partner.listings')->middleware('profile_update');

    Route::get('/listing', 'TenantPageController@listing')->name('partner.listing')->middleware('profile_update');

    Route::get('/create_listing', 'TenantPageController@create_listing')->name('partner.create_listing')->middleware('profile_update');
    
});

// Landlord routes

Route::group(['middleware' => ['landlord'], 'prefix' => 'landlord'], function(){

    Route::get('/', 'LandlordTenantPageController@home')->name('landlord.home');

    Route::get('/members', 'LandlordTenantPageController@members')->name('landlord.members');

    Route::get('/member/{user_code}', 'LandlordTenantPageController@member')->name('landlord.member');

    Route::get('/listings', 'LandlordTenantPageController@listings')->name('landlord.listings');

    Route::get('/notifications', 'LandlordTenantPageController@notifications')->name('landlord.notifications');

    Route::get('/reviews', 'LandlordTenantPageController@reviews')->name('landlord.reviews');

    Route::get('/listing', 'LandlordTenantPageController@listing')->name('landlord.listing');
    
});


// Investor routes

Route::group(['middleware' => ['investor'], 'prefix' => 'investor'], function(){

    Route::get('/', 'InvestorPageController@home')->name('investor.home');

    Route::get('/members', 'InvestorPageController@members')->name('investor.members');

    Route::get('/member/{user_code}', 'InvestorPageController@member')->name('investor.member');

    Route::get('/listings', 'InvestorPageController@listings')->name('investor.listings');

    Route::get('/notifications', 'InvestorPageController@notifications')->name('investor.notifications');

    Route::get('/reviews', 'InvestorPageController@reviews')->name('investor.reviews');

    Route::get('/listing', 'InvestorPageController@listing')->name('investor.listing');
    
});

// Admin routes

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'PageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member/{user_code}', 'AdminPageController@member')->name('admin.member');

    Route::get('/listings', 'AdminPageController@listings')->name('admin.listings');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

    Route::get('/reviews', 'AdminPageController@reviews')->name('admin.reviews');

    Route::get('/listing', 'AdminPageController@listing')->name('admin.listing');
    
});
