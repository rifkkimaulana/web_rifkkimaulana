<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers\Rifkkimaulana\Front');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// Front End Routes
$routes->group('/', ['namespace' => 'App\Controllers\Rifkkimaulana\Front'], function ($routes) {
    // Rute untuk HomeController
    $routes->get('/', 'Home::index');
    $routes->get('home', 'Home::index');

    // Rute untuk BlogController
    $routes->get('blog', 'Blog::index');
    $routes->get('blog/(:segment)', 'Blog::detail/$1');

    // Rute untuk AboutController
    $routes->get('about', 'About::index');

    // Rute untuk ContactController
    $routes->get('contact', 'Contact::index');
});

$routes->group('/', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
    $routes->get('login', 'Login::index');
    $routes->post('login', 'Login::login_post');
});

$routes->group('/', ['namespace' => 'App\Controllers\Rifkkimaulana\Admin'], function ($routes) {
    // BACK
    $routes->get('dashboard', 'Dashboard::index');

    $routes->get('r-settings/users', 'Settings\Settings::users');
    $routes->get('r-settings/profile', 'Settings\Settings::profile');

    $routes->get('artikel', 'Artikel\Artikel::index');
    $routes->get('artikel/new', 'Artikel\Artikel::new');
    $routes->post('artikel/new', 'Artikel\Artikel::new_post');
    $routes->get('artikel/ubah/(:num)', 'Artikel\Artikel::ubah/$1');
    $routes->post('artikel/ubah', 'Artikel\Artikel::ubah_post');
    $routes->get('artikel/delete/(:num)', 'Artikel\Artikel::delete/$1');

    $routes->get('artikel/kategori', 'Artikel\Kategori::index');
    $routes->get('artikel/kategori/delete/(:num)', 'Artikel\Kategori::delete/$1');
    $routes->post('artikel/kategori/tambah', 'Artikel\Kategori::tambah');
    $routes->post('artikel/kategori/ubah', 'Artikel\Kategori::ubah');

    $routes->get('artikel/tag', 'Artikel\Tag::index');
    $routes->get('artikel/tag/delete/(:num)', 'Artikel\Tag::delete/$1');
    $routes->post('artikel/tag/tambah', 'Artikel\Tag::tambah');
    $routes->post('artikel/tag/ubah', 'Artikel\Tag::ubah');

    $routes->get('r_log', 'LogActivity::index');
    $routes->get('logout', 'Dashboard::logout');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
