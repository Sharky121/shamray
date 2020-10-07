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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/sharky/sites/shamray/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'shamray' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345678' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define ('WPLANG', 'en_RU');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#IJH`HKgQ8We$-LtKXB5YpzZD~=/!orN7mb ?9cpI={sjdRt3t:drO47WriGEf8;' );
define( 'SECURE_AUTH_KEY',  '`f!Lmtt^c*F4rdQZN*|ka;=]~@G4{^WYE<{8$y9nsg oDB*(0TqgncYHyOlHV7%e' );
define( 'LOGGED_IN_KEY',    'E/a[/2t=y4YUTo7g:aGshA/c8;6K.UlA+h<>IzCc]-0V?GrI|npv9%W=m~3*-jK_' );
define( 'NONCE_KEY',        'o%XsO`t~V/G)P;L$$KaERv!|y=>lS5<qXPMd__DRG<6-r&|_hM(zl{9w@nW5Hc=(' );
define( 'AUTH_SALT',        'k<J_>H F@] cNvfWr1F)4PKux:#o0gz2-F#X`=@UUkRo9R(J5O&=9#D22NiLi*%O' );
define( 'SECURE_AUTH_SALT', 'Gy@1[&huLI.EX4h#qP$5;/0$$o|suIq|L;b**0Fau C4b04m+}kc=wnw1AT9 -vJ' );
define( 'LOGGED_IN_SALT',   '}FU,@1C=8s=_V&w CadeR$BxzR43i_Tnw9^SaciT*5 1Wu>J@<aYd-(?R)07u~Vk' );
define( 'NONCE_SALT',       'vY;9s{N<BaFq=&n0]A:,5DEerg#X?|k--&~z4#Oo47`]-868%+l9oK*2VB~ZE`gs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'shamray_';

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
