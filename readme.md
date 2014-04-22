## Webshop - Authentication Package
A Laravel 4 package for basic authentication

## Installation

Add the following to you composer.json file

    "ahsanpackage/webshopauthenticate": "dev-master"

Run

    composer update

Add the following to app/config/app.php

    'Ahsanpackage\Webshopauthenticate\WebshopauthenticateServiceProvider',

Publish the config

    php artisan config:publish ahsanpackage/webshopauthenticate

Publish the asset

    php artisan asset:publish ahsanpackage/webshopauthenticate

Run the migration

    php artisan migrate --package="ahsanpackage/webshopauthenticate"

Run the db seed

    php artisan db:seed --class="Ahsanpackage\Webshopauthenticate\UsersGroupsTableSeeder"

Add the following to app/routes.php

	Route::get(
		\Config::get('webshopauthenticate::uri').'/login',
		'Ahsanpackage\Webshopauthenticate\AuthController@index'
	);
	Route::post(
		\Config::get('webshopauthenticate::uri').'/login',
		'Ahsanpackage\Webshopauthenticate\AuthController@postLogin'
	);
	Route::get(
		\Config::get('webshopauthenticate::uri').'/logout',
		'Ahsanpackage\Webshopauthenticate\AuthController@getLogout'
	);
	Route::get(
		\Config::get('webshopauthenticate::uri').'/signup',
		'Ahsanpackage\Webshopauthenticate\AuthController@signUp'
	);
	Route::post(
		\Config::get('webshopauthenticate::uri').'/signup',
		'Ahsanpackage\Webshopauthenticate\AuthController@postSignup'
	);
	Route::get(
		\Config::get('webshopauthenticate::uri').'/forgotpassword',
		'Ahsanpackage\Webshopauthenticate\AuthController@forgotPassword'
	);
	Route::post(
		\Config::get('webshopauthenticate::uri').'/forgotpassword',
		'Ahsanpackage\Webshopauthenticate\AuthController@postForgotpassword'
	);
	Route::get(
		\Config::get('webshopauthenticate::uri').'/reset-password/{token}',
		'Ahsanpackage\Webshopauthenticate\AuthController@getResetPassword'
	);
	Route::get(
		\Config::get('webshopauthenticate::uri').'/change-password/{token}',
		'Ahsanpackage\Webshopauthenticate\AuthController@getChangePassword'
	);
	Route::post(
		\Config::get('webshopauthenticate::uri').'/change-password',
		'Ahsanpackage\Webshopauthenticate\AuthController@postChangePassword'
	);
	Route::get(\Config::get('webshopauthenticate::uri').'/activation/{activationCode}', 'Ahsanpackage\Webshopauthenticate\AuthController@getActivate');
	Route::group(array('before' => 'sentry.member'), function()
	{
		Route::get(\Config::get('webshopauthenticate::uri').'/myaccount', 'Ahsanpackage\Webshopauthenticate\AccountController@getIndex');
		Route::post(\Config::get('webshopauthenticate::uri').'/myaccount', 'Ahsanpackage\Webshopauthenticate\AccountController@postIndex');
	});
	Route::group(array('before' => 'sentry.admin'), function()
	{
		Route::get(Config::get('webshopauthenticate::admin_uri'), 'Ahsanpackage\Webshopauthenticate\AdminUserController@index');
		Route::get(Config::get('webshopauthenticate::admin_uri').'/users/add', 'Ahsanpackage\Webshopauthenticate\AdminUserController@getAddUsers');
		Route::post(Config::get('webshopauthenticate::admin_uri').'/users/add', 'Ahsanpackage\Webshopauthenticate\AdminUserController@postAddUsers');
		Route::get(Config::get('webshopauthenticate::admin_uri').'/users/edit/{user_id}', 'Ahsanpackage\Webshopauthenticate\AdminUserController@getEditUsers');
		Route::post(Config::get('webshopauthenticate::admin_uri').'/users/edit/{user_id}', 'Ahsanpackage\Webshopauthenticate\AdminUserController@postEditUsers');
		Route::any(Config::get('webshopauthenticate::admin_uri').'/users/changestatus', 'Ahsanpackage\Webshopauthenticate\AdminUserController@getChangeUserStatus');
	});
	
##