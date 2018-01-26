<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'magazin');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1ts]*5PLPNch<$eZg<tQF$I8[:ZKn%g7K,, Gq/G5*eU1:#0lH[6+ }z.A&I|o/7');
define('SECURE_AUTH_KEY',  'e0.50fM(NPzR|MLmNzEQP4$6DKhd6/%a!Dp I@.T%;-joumNr&{}EY.TkG^,(ToB');
define('LOGGED_IN_KEY',    '#/6B)=-UY}Kk}2F1ppbF2eMxr%IKbs$.Y3RT%V *_+j2Zp&wHuGXh})^}xx/u.tu');
define('NONCE_KEY',        'd+5BZf,Ll?q0;dxRvk9N;TqsoPrA3)pxzlb;oF1-WdTEXm`&Z_U6s]{[iVlH>;UO');
define('AUTH_SALT',        '/&63_oH!zokkh@`I{>(U1!eL:{shCKTMLt(7^e{+[/{,OFnR22hF9(QEFOHxbtY~');
define('SECURE_AUTH_SALT', '$lNDxmZ::^7aa-e%,:`Vpr`N^Nto$oBI#89pDUSb`k]oO&9!Y:*0Lk>#$ oei)dD');
define('LOGGED_IN_SALT',   't}mmma+8g1YW@A~?(eDX:v|G5++AUO$TPfu?=}7Lr{e17GBBtAnQ3^%+wmKj-;  ');
define('NONCE_SALT',       'e#)^Ca|4Kqk/)H@=;EPw3Bw09Qv,PyfH8]7CR|YzUy+t/*a8Yf?x(]w[/i~Tt$8;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'magazin_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
