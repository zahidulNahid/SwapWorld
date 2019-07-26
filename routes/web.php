<?php

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
//before logged user's route and after logged user's route
Route::get('/','LoginController@index')->name('index');
Route::get('/login','LoginController@loginView')->name('Login.loginView');
Route::post('/login','LoginController@checkLogin');
Route::get('/index', 'LogoutController@index')->name('Logout.index');

Route::get('/resetPassword','MailController@getMailPage')->name('Mail.forgotPassword');
Route::post('/resetPassword','MailController@postMail');

Route::get('/user/home','UserController@index')->name('User.index');
Route::post('/user/home','UserController@searchBox');

Route::get('/user/result-not-found','UserController@result_not_found');

Route::get('/all-ads','AdController@withoutLoggedAdView')->name('Ad.loggedOutView');

Route::get('/location/{location_name}', 'AdController@searchByLocation')->name('Ad.searchByLocation');
Route::get('/search-categorywise/{category_name}', 'AdController@searchByCategory')->name('Ad.searchByCategory');

Route::get('/user/location/{location_name}', 'AdController@loggedUserSearchByLocation_user')->name('Ad.loggedUserSearchByLocation_user');

Route::get('/user/all-ads','AdController@withLoggedAdView')->name('Ad.withLoggedAdView');

Route::get('/user/allads/electronics/{pid}','UserController@viewProductForElectronics')->name('User.viewProductForElectronics');
Route::get('/ad/electronics/{pid}','UserController@viewProductForElectronics')->name('viewProductForElectronics');
Route::post('/user/allads/electronics/{pid}','UserController@deal_done');

// Route::post('/admin/allads/electronics/{pid}','AdminController@delete_ad');


Route::get('/user/allads/vehicles/{pid}', 'UserController@viewProductForVehicles')->name('User.viewProductForVehicles');
Route::get('/ad/vehicles/{pid}', 'UserController@viewProductForVehicles')->name('viewProductForVehicles');
Route::post('/user/allads/vehicles/{pid}', 'UserController@deal_done');
Route::post('/user/allads/vehicles/{pid}', 'AdminController@delete_ad');

Route::get('/user/ad/books/{pid}', 'UserController@viewProductForBooks')->name('User.viewProductForBooks');
Route::get('/ad/books/{pid}', 'UserController@viewProductForBooks')->name('viewProductForBooks');
Route::post('/user/ad/books/{pid}', 'UserController@deal_done');
// Route::post('/user/ad/books/{pid}', 'AdminController@deal_done');

Route::get('/user/ad/furniture/{pid}', 'UserController@viewProductForFurniture')->name('User.viewProductForFurniture');
Route::get('/ad/furniture/{pid}', 'UserController@viewProductForFurniture')->name('viewProductForFurniture');
Route::post('/user/ad/furniture/{pid}', 'UserController@deal_done');

Route::get('/ad/{product_id}', 'UserController@withoutLoggedViewProduct')->name('User.withoutLoggedViewProduct');

Route::get('/login','LoginController@loginView')->name('Login.loginView');
Route::post('/login','LoginController@checkLogin');
Route::get('/index', 'LogoutController@index')->name('Logout.index');

Route::get('/user/home','UserController@index')->name('User.index');

Route::get('/user/messageBox','UserController@allMessage')->name('User.messageBox');
Route::get('/user/send-messages/{user_id}','UserController@message')->name('User.sendMessage');
Route::post('/user/send-messages/{user_id}','UserController@send_message'); 

Route::get('/user/profile','UserController@getProfile')->name('User.profile');
Route::get('/user/profile/{user_name}','UserController@editProfile')->name('User.editProfile');
Route::post('/user/profile/{user_name}','UserController@updateProfile');
Route::get('/user/see-my-ad/{user_name}','UserController@see_my_ad')->name('User.see_my_ad');


Route::get('/user/notification','UserController@notification')->name('User.notification');

Route::get('/registration','LoginController@registrationView')->name('Login.registrationView');
Route::post('/registration','LoginController@checkRegistration');

Route::get('/user/post-your-ad','AdController@index')->name('Ad.selectType');
Route::get('/post-ad/electronics','AdController@postad_electronicsPage')->name('Ad.postad_electronicsPage');
Route::post('/post-ad/electronics','AdController@postad_electronics_data');

Route::get('/post-ad/vehicles','AdController@postad_vehiclesPage')->name('Ad.postad_vehiclesPage');
Route::post('/post-ad/vehicles','AdController@postad_vehicles_data');

Route::get('/post-ad/books','AdController@postad_booksPage')->name('Ad.postad_booksPage');
Route::post('/post-ad/books','AdController@postad_books_data');

Route::get('/post-ad/furniture','AdController@postad_furniturePage')->name('Ad.postad_furniturePage');
Route::post('/post-ad/furniture','AdController@postad_furniture_data');

// Route::get('/post-ad/property','AdController@postad_propertyPage')->name('Ad.postad_propertyPage');
// Route::post('/post-ad/property','AdController@postad_property_data');


#admin route
Route::get('/admin/home','AdminController@index')->name('Admin.index');
Route::post('/admin/home','UserController@searchBox');

Route::get('/admin/result-not-found','UserController@result_not_found');


Route::get('/admin/location/{location_name}', 'AdController@loggedUserSearchByLocation_admin')->name('Ad.loggedUserSearchByLocation_admin');
Route::get('/admin/users-list','AdminController@users_list')->name('Admin.users_list');
Route::get('/admin/users_profile/{userId}','AdminController@users_profile')->name('Admin.users_profile');

Route::get('/admin/all-ads','AdminController@withLoggedAdView')->name('Admin.withLoggedAdView');

Route::get('/admin/post-your-ad','AdminController@postad_type')->name('Admin.selectType');

Route::get('/admin/allads/electronics/{pid}', 'UserController@viewProductForElectronics')->name('Admin.viewProductForElectronics');
Route::post('/admin/allads/electronics/{pid}', 'AdminController@delete_ad');

Route::get('/admin/allads/vehicles/{pid}', 'UserController@viewProductForVehicles')->name('Admin.viewProductForVehicles');
Route::post('/admin/allads/vehicles/{pid}', 'AdminController@delete_ad');

Route::get('/admin/allads/books/{pid}', 'UserController@viewProductForBooks')->name('Admin.viewProductForBooks');
Route::post('/admin/allads/books/{pid}', 'AdminController@delete_ad');

Route::get('/admin/allads/furniture/{pid}', 'UserController@viewProductForFurniture')->name('Admin.viewProductForFurniture');
Route::post('/admin/allads/furniture/{pid}', 'AdminController@delete_ad');

Route::get('/admin/profile','UserController@getProfile')->name('Admin.profile');
Route::get('/admin/profile/{user_name}','UserController@editProfile')->name('Admin.editProfile');
Route::post('/admin/profile/{user_name}','UserController@updateProfile');
Route::get('/admin/see-my-ad/{user_name}','UserController@see_my_ad')->name('Admin.see_my_ad');

Route::get('/admin/messageBox','UserController@allMessage')->name('Admin.messageBox');
Route::get('/admin/send-messages/{user_id}','UserController@message')->name('Admin.sendMessage');
Route::post('/admin/send-messages/{user_id}','UserController@send_message');

Route::get('/Admin/notification','AdminController@notification')->name('Admin.notification');




