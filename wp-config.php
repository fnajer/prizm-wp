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

define( 'FORCE_SSL_ADMIN', false );

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "newprizmbotspace_db");

/** Имя пользователя MySQL */
define( 'DB_USER', "newprizmbot_usr");

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "eeGh4OhL1hu0chom0uu8");

/** Имя сервера MySQL */
define( 'DB_HOST', "db");

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1YXM%wLG!Gd}Z}T+BP4<c$HG|I-^C3p6t&pG>hHC7&t2#&4|%{o(u,*?A,cF]8w/');
define('SECURE_AUTH_KEY',  '3-@w04sXz>/3HW_?{E@@PHcH|plc369s*B!+z_}7q{J5:QTwjKXLI|!j6*}% hx0');
define('LOGGED_IN_KEY',    '/tVEj<`K&Ai,$]{Z+Nm;M](eK+-,4T@s?SH@q$]qUYc:m|qlqv6G%<PK<(GA^uX-');
define('NONCE_KEY',        ']k|s(x!!~#6oEU=I^FX_tsI~m;ak+}J<jEgdQfyYl|,{8al1_$r9yI*|)nTQl{.L');
define('AUTH_SALT',        'XcXmp2oT=C<m$,g/[8D8tz3}Y=v/_FS#_a<{CnXiaPmQ!HB;x(`ujO/a$@~8{DiF');
define('SECURE_AUTH_SALT', '&U- |Xt9L3s#F3qz+[{lwH!s`o$2`MES+C0<uSn-eL~|}J;| #h&/+R<|24qi<:-');
define('LOGGED_IN_SALT',   'dK7!=Nfv{w|$#trWDE.,XzTaG?r .U[ITL&e/@{6F9cR/1bJ+eV^3SF-7Q|&6@$e');
define('NONCE_SALT',       't6,[*G8Fu+p+r,3M@Vbh3|OV|~KQ4l#N+{ouGLYl)<-b+(pJ*9:ONFY8++yA+-0[');

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
