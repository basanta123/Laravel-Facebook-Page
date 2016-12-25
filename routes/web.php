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
            $response = $fb->get('/me?fields=id,name,email', $token);
            $userNode = $response->getGraphUser();

            Session::put('fb_user_access_token', [$userNode->getName(), (string) $token]);

            return redirect('pagevamp');
        }
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }
});

Route::get('pagevamp', function () {
    $info = Session::get('fb_user_access_token');
    if (!$info) {
        return redirect('/');
    }

    return view('dashboard')->with('info', $info);
});

Route::get('logout', function () {
    Session::remove('fb_user_access_token');

    return redirect('/');
});

Route::get('api/v1/page', 'ApiController@index');
Route::get('api/v1/posts', 'ApiController@posts');
Route::get('api/v1/post/{id}', 'ApiController@show');
