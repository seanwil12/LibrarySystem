<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb673992dcd4f0eb9eb3b244927b07d87
{
    public static $classMap = array (
        'AdminIndexView' => __DIR__ . '/../..' . '/views/admin/admin_index_view.class.php',
        'Book' => __DIR__ . '/../..' . '/models/book.class.php',
        'CatalogAdd' => __DIR__ . '/../..' . '/views/catalog/add/book_add.class.php',
        'CatalogAddBook' => __DIR__ . '/../..' . '/views/catalog/addbookdb/catalog_add_book.class.php',
        'CatalogAddCart' => __DIR__ . '/../..' . '/views/catalog/addtocart/catalog_add_to_cart.class.php',
        'CatalogAddUser' => __DIR__ . '/../..' . '/views/catalog/adduser/add_user.class.php',
        'CatalogAdmin' => __DIR__ . '/../..' . '/views/catalog/admin/catalog_admin.class.php',
        'CatalogCart' => __DIR__ . '/../..' . '/views/catalog/cart/catalog_cart.class.php',
        'CatalogCheckout' => __DIR__ . '/../..' . '/views/catalog/checkout/catalog_checkout.class.php',
        'CatalogController' => __DIR__ . '/../..' . '/controllers/catalog_controller.class.php',
        'CatalogDelete' => __DIR__ . '/../..' . '/views/catalog/delete/catalog_delete.class.php',
        'CatalogDetail' => __DIR__ . '/../..' . '/views/catalog/detail/catalog_detail.class.php',
        'CatalogEdit' => __DIR__ . '/../..' . '/views/catalog/edit/book_edit.class.php',
        'CatalogEditUser' => __DIR__ . '/../..' . '/views/catalog/edituser/edit_user.class.php',
        'CatalogIndex' => __DIR__ . '/../..' . '/views/catalog/index/catalog_index.class.php',
        'CatalogIndexView' => __DIR__ . '/../..' . '/views/catalog/movie_index_view.class.php',
        'CatalogListUsers' => __DIR__ . '/../..' . '/views/catalog/listusers/list_users.class.php',
        'CatalogLogin' => __DIR__ . '/../..' . '/views/catalog/login/catalog_login.class.php',
        'CatalogLogout' => __DIR__ . '/../..' . '/views/catalog/logout/catalog_logout.class.php',
        'CatalogModel' => __DIR__ . '/../..' . '/models/catalog_model.class.php',
        'CatalogRegister' => __DIR__ . '/../..' . '/views/catalog/register/catalog_register.class.php',
        'CatalogRemoveUser' => __DIR__ . '/../..' . '/views/catalog/removeuser/remove_user.class.php',
        'CatalogSearch' => __DIR__ . '/../..' . '/views/catalog/search/catalog_search.class.php',
        'CatalogUpdate' => __DIR__ . '/../..' . '/views/catalog/update/catalog_update.class.php',
        'ComposerAutoloaderInitb673992dcd4f0eb9eb3b244927b07d87' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb673992dcd4f0eb9eb3b244927b07d87' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'Dispatcher' => __DIR__ . '/../..' . '/application/dispatcher.class.php',
        'IndexView' => __DIR__ . '/../..' . '/views/index_view.class.php',
        'MovieError' => __DIR__ . '/../..' . '/views/catalog/error/movie_error.class.php',
        'User' => __DIR__ . '/../..' . '/models/user.class.php',
        'WelcomeController' => __DIR__ . '/../..' . '/controllers/welcome_controller.class.php',
        'WelcomeIndex' => __DIR__ . '/../..' . '/views/welcome/welcome_index.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb673992dcd4f0eb9eb3b244927b07d87::$classMap;

        }, null, ClassLoader::class);
    }
}
