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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(U8AzbH#IQ^Co!ntk1ps P(|TMuEQcor-),Afh-k*LcMj_/$uu -$|AHF$pHI-7!');
define('SECURE_AUTH_KEY',  'Y}vpx68_/B8/i5]{XmAB@I?(mi>!585]rS}a0^A,g.dM+dabdbl]UteJvL%hO^Q@');
define('LOGGED_IN_KEY',    ':?-| IO_>6*c13.Inroy|b47S7vy.-+xP3fz[:KlQaZB0`>]+cIG]G.7!hl*E7.n');
define('NONCE_KEY',        'x?FZ]%kxX(+s[}Pjw&$y[Pv0=h*$fgp90Rv(r{vd+Gndp|b(w.rpN+_=me2#XQFw');
define('AUTH_SALT',        'gfM+d?R,?Gxybd[y,T#yHAiUFs-2oy;U?%~z`spT?&>vkiX[%Q6mkTu2/w,Tmgbh');
define('SECURE_AUTH_SALT', '8B?[L1+,! 0h+L0$G<)+}LE<0u2v|={^zH0Dsj]$w|.Od^7(:Y5f_<`{?!WjmFv{');
define('LOGGED_IN_SALT',   '`S-_:G+Q>-#XZ.91BEh5pBB-*&k`?%N6mV it-rsEG^D@emQi/]MwCKJUO|+ c_E');
define('NONCE_SALT',       'c>in4R(Q#95mf5l|7zHxh|]Ehm89/nOb]kVH6!vl|YM{U@{w?Yb{Ntn;R`^cM!K>');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
