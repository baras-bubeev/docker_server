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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mpowder_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mpowder' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123qwe' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'f+/|3>9$R8kO*Q1j$LyC7 TZDFd ^M8@$ozLAg8`mGC2;pv-5T[>@s^cV,Lc+=-y' );
define( 'SECURE_AUTH_KEY',  'b:,!oeU(WV-YOgegK!|4QTt;h=!^0g+gk-sn!AyQ-.uTo:^T;-GDWs|bNyTg?,j1' );
define( 'LOGGED_IN_KEY',    '+]J M#1O;c*~p7`]|4ZpIkEUaw0?b![vRCXe{mO 5o!2G iq[]axw1mD#<>s|UXn' );
define( 'NONCE_KEY',        'dRNp[q jL;O$H(/iIp.ezef{TpkW[!uE.|/aoG&-dA8[=,Gwg!1e6gS+Mq!<33&b' );
define( 'AUTH_SALT',        '61_}MC9`w[amgBqgd8^H,Bz@FHk*+-WJdp9OVFH=`cBe<h5?G#cXVNwT^f~W)#d]' );
define( 'SECURE_AUTH_SALT', 'Bg;_yvyU3D,AF9_cfP+6[3KJM,B|BT:On$Fl+YX~U8lq|gP-bq91 jaxn*O|cvb#' );
define( 'LOGGED_IN_SALT',   'YDqJa,gQv(x~FsKx@C~zG@p`571A)IuP_4i!^J:r32X8HMUkZ5)1`/YJ~F8 &zF2' );
define( 'NONCE_SALT',       ' wiElE46)i=#wSS3;#-c(|G8pUMcP#+GgY*geTOncA[&Cur#~F,PXGCwoznnL:Xd' );







 

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';