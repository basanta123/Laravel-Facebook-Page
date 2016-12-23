<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function (SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
    $login_url = $fb->getLoginUrl(['email']);

    return view('welcome')->with('login_url', $login_url);
});

Route::get('/page', function (SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
    // Obtain an access token.
    try {
        $token = $fb->getAccessTokenFromRedirect();
        if ($token) {
            Session::put('fb_user_access_token', (string) $token);

            return redirect('pagevamp');
        }
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }
});


Route::get('pagevamp', function () {
    $info = Session::get('fb_user_access_token');
    if ($info) {
        echo 'Yes';
    }
});
