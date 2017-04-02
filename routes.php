<?php

// register routes
$router->map('GET', '/register', 'BetterBeing\Controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/register', 'BetterBeing\Controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET', '/verify-account', 'BetterBeing\Controllers\RegisterController@getVerifyAccount', 'verify_account');



// applications feed
$router->map('GET', '/browse-applications', 'BetterBeing\Controllers\browseApplicationsController@getShowBrowseApplications', 'browse_applications');

// logged in badge routes
if (BetterBeing\Auth\LoggedIn::user()){
$router->map('GET', '/painting-apply', 'BetterBeing\Controllers\PaintingApplyController@getShowAdd', 'painting_apply');
$router->map('POST', '/painting-apply', 'BetterBeing\Controllers\PaintingApplyController@postShowAdd', 'painting_apply_post');
}

// login/logout routes
$router->map('POST', '/login', 'BetterBeing\Controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('GET', '/logout', 'BetterBeing\Controllers\AuthenticationController@getLogout', 'logout');




// page routes
$router->map('GET', '/', 'BetterBeing\Controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/page-not-found', 'BetterBeing\Controllers\PageController@getShow404');
$router->map('GET', '/[*]', 'BetterBeing\Controllers\PageController@getShowPage', 'generic_page');

//$user = BetterBeing\Models\User::find(1);
//dd($user); *die and dump
//$testimonials = $user->testimonials()->get();
//dd($testimonials);

//echo $user->first_name;
//echo "<br>";
//print_r($testimonials);





// If you delete your tables you will need a slug column in pages table.

//$router->map('GET', '/testemail', function(){
//    
//    BetterBeing\Email\SendEmail::sendEmail('john@here.com', 'My test subject', 'My message', 'somebody@somewhere.com');
//    echo "Sent mail!";
//    
//});