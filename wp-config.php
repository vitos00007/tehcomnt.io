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
define( 'DB_NAME', 'wptehcomnt' );

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
define( 'AUTH_KEY',         's^e^oM&}]L/$1L{?23feeC/::-;c8ql@~W?dfWBz).~9na5Oy/2q-eW<0|j@3b@8' );
define( 'SECURE_AUTH_KEY',  'KiXhA#U,XOgb@=nLOPu$F+y ESO|jR1[%dU)r,o|($SJ!5cS0wAT(V*=>H:Tf)C.' );
define( 'LOGGED_IN_KEY',    '93mqFK5,5?!T18:ya },`~b5>]gSHKNs}RLr.TK%_PJ4o &gVr1kl&L(1qaOORAg' );
define( 'NONCE_KEY',        '5RAH,bNF{DXB1@g,BPs9-m<zT3AW&Rnbz/cE<dBbBe%gW~!(Bg7S),F5j~#Nf_+p' );
define( 'AUTH_SALT',        '^r@fa2mEt)26blB1C{nJ<d_={#2,^$L@2]AZYF)BeXmSoSp[nac+#@&y,w$[$Y<8' );
define( 'SECURE_AUTH_SALT', 'U7$,r%_kt1_f8^rXD!%L$!_PX %+~(/tvh,@xmWw0*bp}f5A%U{W4-VK$8;&5>!>' );
define( 'LOGGED_IN_SALT',   'b9~>F9-qS#Uh}eY)0^BzWO#Hk;WQLo{)Q0}SgzMSK]KDEFbV^P&F^P94D(s9fWfI' );
define( 'NONCE_SALT',       '%`=0M+C{*r;>=93O*.c>_gi-QTH97/8]xHNOL0Xo7&cmGJDkX_&+:e6.S+V:!l@Y' );

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
