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
define( 'DB_NAME', 'chgmed' );

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
define( 'AUTH_KEY',         'gPV7^YD&j4*(_/lWpIjBOW{=@_.iw#&`][l;v@C#&aW6}$-J:&AUw>b*Mqh{LFw~' );
define( 'SECURE_AUTH_KEY',  'F2|^x(IriLo)L{O:vmLH4*_&roxIC_@@+p0uB!7zL3dJA!TBuog64eJ=/5yR7/Ac' );
define( 'LOGGED_IN_KEY',    '1B$D4}fCFRF)tT}3(53s>^fcrFtooW{i6c2i_;OwI:~uahGP;P2Y$]>:;l)W;1++' );
define( 'NONCE_KEY',        'M%LEDAE:(aI/|3-XWaJh[L|>9; |84NfWqD`Fk@C%OdL=^U.{=h 6;,za4q:!Lfz' );
define( 'AUTH_SALT',        '0U/FNs Z=@/{1w]%#6uqMMumf;SF_!r@]<>2nV>kHdHOasxf[O:;@g<wZ*~%m4HN' );
define( 'SECURE_AUTH_SALT', 'R9KeL8VJoX!sk[#b&fFRW>)H/m0U/*t @RKRoG6rzoT-@K*Jh_MkNzeGacMGmrPd' );
define( 'LOGGED_IN_SALT',   '4(g@bGU:gA{d{IjMM,J%_b7G $/41#D7suX3!#?#vaE}!mab|lN5GEJQ?>=sYX|f' );
define( 'NONCE_SALT',       'jfu3LpE&tp||n~48?T=FFdpYXWi{+;^m XOe9U^LwiA4uH#?&,>!(sSO)Yqj0e]8' );

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
