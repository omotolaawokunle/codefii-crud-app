<?php

/**
 * [$router description]
 * @var Network
 */
$router = new Codefii\Routing\Router();
$router->routes('/',['home@index']);
$router->routes('/home',['home@index']);
$router->routes('/add',['home@add']);
$router->routes('/edit/{id:([a-zA-z0-9])}',['home@edit']);
$router->routes('/delete/{id:([a-zA-z0-9])}',['home@delete']);
$router->routes('/about',['home@about']);




/**
 * [$router->routes description]
 * @var [type]
 */
$router->routes('/admin/login',['Sys\\FiiA@login']);
$router->routes('/admin/addUser',['Sys\\FiiA@addUser']);
$router->routes('/admin',['Sys\\FiiA@baseOffice']);
$router->routes('/admin/logout',['Sys\\FiiA@exitOffice']);
$router->routes('/admin/addposts/{addpost:([a-zA-Z0-9])*}',['Sys\\AddPosts@index']);
$router->routes('/admin/posts/{view:([a-zA-Z0-9])*}',['Sys\\Posts@index']);
$router->routes('/admin/posts/{post:([a-zA-Z0-9])*}/{id:([a-zA-Z0-9])*}',['Sys\\Posts@delete']);
