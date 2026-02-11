<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('discography', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Discography', route('discography'));
});

Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Shop', route('shop'));
});
