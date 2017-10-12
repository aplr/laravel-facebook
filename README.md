# Laravel-Facebook

## Introduction

The `laravel-facebook` package allows you to use the Facebook-SDK in a more laravel-ish way.

## Installation

Require the aplr/laravel-facebook package in your composer.json and update your dependencies:

```shell
$ composer require aplr/laravel-facebook
```
    
Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.
    
If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
Aplr\LaravelFacebook\ServiceProvider::class,
```
    
If you want to use the facade to conveniently access the Facebook SDK, add this to your facades in app.php:

```php
'Facebook' => Aplr\LaravelFacebook\Facade::class,
```

## Configuration

The defaults are set in config/facebook.php. Copy this file to your own config directory to modify the values. You can publish the config using this command:

```shell
$ php artisan vendor:publish --provider="Aplr\LaravelFacebook\ServiceProvider"
```

When using the default package configuration, you can set the Facebook SDK credentials in your `.env` file:

```
FACEBOOK_APP_ID=#YOUR APP ID#
FACEBOOK_APP_SECRET=#YOUR APP SECRET#
FACEBOOK_GRAPH_VERSION=v2.9
```

## Licence

Laravel-Facebook is open-sourced software licensed under the MIT license.