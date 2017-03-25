<?php

$router->map('GET', '/', 'BetterBeing\Controllers\PageController@getShowHomePage', 'home');

$router->map('GET', '/register', 'BetterBeing\Controllers\RegisterController@getShowRegisterPage', 'register');

$router->map('POST', '/register', 'BetterBeing\Controllers\RegisterController@postShowRegisterPage', 'register_post');