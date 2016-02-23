# Matchi Web Server

This is the web server for the Matchi app. Below is a description of the use cases required for testing.

## Use Case Tests

ServerIP: http://52.16.78.184/

This is a RESTful api. Requests are made with standard HTTP request methods GET, POST, and DELETE. 
Requests will eventually use the PUT method, but these have not been implemented yet.

You may find it helpful to use resty to make HTTP requests - this can be found at https://github.com/micha/resty 

If not, curl (https://curl.haxx.se/) may be helpful.

### Create user
DESCRIPTION: HTTP POST request to the resource /api/users containing json content body with the keys
             'firstname', 'lastname' and optionally 'email'. The server shall return json with the 
             keys 'userid' and 'AuthToken'.

### Get user
DESCRIPTION: HTTP GET request to the resource /api/users/{userid} with the custom header 'AuthToken' the
             'AuthToken' being the same as is returned when creating a user, as seen above. Without the 'AuthToken'
             header, the server should return 'Unauthorised'.

### Delete user
DESCRIPTION: HTTP DELETE request to the resource /api/users/{userid} with the custom header 'AuthToken' the
             'AuthToken' the same as is returned when creating a user. Without the 'AuthToken' header, the server
             should return 'Unauthorised'. Subsequest get requests for this user should fail with 'Unauthorised'.

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

