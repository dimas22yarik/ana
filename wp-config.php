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
define( 'DB_NAME', 'anaknazeva_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+Y%)ZVqd[Z7T$t%I!*90Z7uXeV?&j>dw?8#p;:1N(:o$z$/&`2WMU jdN_>8bu{c' );
define( 'SECURE_AUTH_KEY',  'jbMr&ZRsQDnA}zM@^hU6/|1.*z.R8K,Z-II@eog8TD{;4J<1:3](nV-[A|suTORK' );
define( 'LOGGED_IN_KEY',    'U;OhJ5##iOa>=^p;nx2J.?c~`KS!},10x)^a[qn[O+0WDYWX[rFiHGZ5(-7DRg]#' );
define( 'NONCE_KEY',        'f:Uc&j|;`Ze!ui<2g%6US$/W;h7*Ox^7DzqS,Wq>.ZSKCpZ*}D,;pexz>],-7><w' );
define( 'AUTH_SALT',        '{&u1P<Y.|qkSC 26bTSSLnmk`XI{UDUmf,h,k8;aJ WGt,/ZerPKDUwb|emKc&KQ' );
define( 'SECURE_AUTH_SALT', '6vFOo,2K%[77i5fv81LZKE~`|W0:)~1J%+|~xP8rGByW u)<,^^N%GBA|27H#k|{' );
define( 'LOGGED_IN_SALT',   '<VlARnZhkOu:8h$0zT*uo~,*`Bju4ldbcx>K&+l[El9!b(p1FuJ#jd7$I#go!6CS' );
define( 'NONCE_SALT',       '5Z~rF5p*6xNRj<xgw7xpJ-z<gUfN@9LJUjo&mwqn$JL3z!aTbz0n{.e1$aqUwo-J' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
