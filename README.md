Routes :
$router->post('/api/register', 'AdminsController@store');
$router->post('/api/putin', 'PutinsController@store');
$router->delete('/api/takeout/{id}', 'PutinsController@destroy');
$router->get('/api/koli/common/{id}', 'PutinsController@show');

<img width="621" alt="No 1" src="https://user-images.githubusercontent.com/86046191/180965992-42e875c9-6f2f-4ac6-98a5-4cf8510b0c8f.PNG">
<img width="624" alt="No 2" src="https://user-images.githubusercontent.com/86046191/180966002-11c6ab61-b550-4db9-b79f-988afde155ab.PNG">
<img width="627" alt="No 3" src="https://user-images.githubusercontent.com/86046191/180966005-b2436855-0b10-4a14-b92b-bdd25e988983.PNG">
<img width="618" alt="no 4" src="https://user-images.githubusercontent.com/86046191/180966007-e1e7a008-af86-4e88-81ef-868dc3b519ea.PNG">

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
