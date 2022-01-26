<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpr' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y>TWzKd-TQ|We%2oSs7U[!Q%8yljUF]P6-sK)6~@DI:3%Voh,x>UH<P_1i>vpeh*' );
define( 'SECURE_AUTH_KEY',  'BLIzV!QxZeyaB`<TG&WKS;cfzAoVyEM=A._GAI*xs33nES5:`qc2875rf6E+#P 3' );
define( 'LOGGED_IN_KEY',    'cFNz?67W#>ESZgk]&C?r!:~>_e1(3KB7bV`f1;a@1|@/.t$^b6|}=O4pq.@q le2' );
define( 'NONCE_KEY',        'mcH+MULKQ!Ahgv]c)PFb85$!zX>!3?SXqP]JDv.bOl:Clm`s=O[Vh]8=~IzEoA#$' );
define( 'AUTH_SALT',        '4aM|S_%mm^w6qs@Jmuy9(B,8#g7,-8EXnSV|TlHc^) )Q*$&wdKr g9#{*{H_z&l' );
define( 'SECURE_AUTH_SALT', 'v@s!]:<Gg/YNcqB?OBH]A<P-*Km4Q[y@3Ve3z>xGCuX;~0CTBI1JQBe&-5u;9wR$' );
define( 'LOGGED_IN_SALT',   'Nkh9V-BG;4+T,_33Avmu[YqR{cl4]!A?J4GJ3D!}zWP[-!u6(q3/v&5WA~e<@LLR' );
define( 'NONCE_SALT',       'REB]fDQZB7l5x}JU+H~#+?ZSk2e@=qoscqAzJp@>sude>T4P>{*/N&*-;*SipOi:' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
