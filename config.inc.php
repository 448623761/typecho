<?php

define('__TYPECHO_SECURE__',true);
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);

// register autoload
require_once 'Typecho/Common.php';

// init
Typecho_Common::init();

// config db
$db = new Typecho_Db('Pdo_SQLite', 'typecho_');
$db->addServer(array (
  'file' => __TYPECHO_ROOT_DIR__.'/usr/644fb1c4692f6.db',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);