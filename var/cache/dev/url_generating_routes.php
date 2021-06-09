<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_article_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::index'], [], [['text', '/admin/article/']], [], []],
    'admin_article_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::new'], [], [['text', '/admin/article/new']], [], []],
    'admin_article_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'admin_article_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'admin_article_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'admin_article_change_status' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::changeStatus'], [], [['text', '/change-status'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'category_change_status' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::changeStatus'], [], [['text', '/change-status'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'article_search_json' => [[], ['_controller' => 'App\\Controller\\ArticleController::searchJson'], [], [['text', '/article/search-json']], [], []],
    'article_search' => [[], ['_controller' => 'App\\Controller\\ArticleController::search'], [], [['text', '/article/search']], [], []],
    'showMain' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::home'], [], [['text', '/']], [], []],
    'cgu' => [[], ['_controller' => 'App\\Controller\\MainController::cgu'], [], [['text', '/cgu']], [], []],
    'mentions-legales' => [[], ['_controller' => 'App\\Controller\\MainController::mentionsLegales'], [], [['text', '/mentions-legales']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
