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
define('DB_NAME', 'skrygrou_medeya');

/** Имя пользователя MySQL */
define('DB_USER', 'skrygrou_medeya');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bvhy5ad6');

/** Имя сервера MySQL */
define('DB_HOST', 'skrygrou.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         'iih:ks`0w=&:$]WfkWFfc CMRDeu{/%&c%[r>]GGi=_fT6*rsYL{g^| 1DcDT)A?');
define('SECURE_AUTH_KEY',  'lSmC!@_#lS^l7M|<! CP^Ex8FpYiM]9{=dVJ9GNsFsU`P|_Ro|(aJ{vZ}r>Y+NMY');
define('LOGGED_IN_KEY',    '=nv3VfFnDNi2:q)pid0OdYrvR2XPqzY/P x3}wSo!5_hHz}2xEr*C[*bu&/7ZfHL');
define('NONCE_KEY',        '!2 *F6<y4P.E!#Bs:O$gU+<kVr2[#09MNK}PcMi6wV&`z>l+SEd{5=jo-/~xnmJl');
define('AUTH_SALT',        'T_0+EwK2en(SRMqg@`HHiy?l~J0q83$o,g`X3UMQT?$-prM8unk+T2IuJsTvOAzq');
define('SECURE_AUTH_SALT', '4Pny%UE;#u(I-k@2:qoggyml(b2%M(;$Fa,|Z2(36WG=DCOe0i=D?X6V[bKX!87m');
define('LOGGED_IN_SALT',   'ghIUsFz~`+H{_14g<(k_{&E{,[d:*:1QxzA6mgKtBWqo8_keeo;rL8[8wN/AU+qJ');
define('NONCE_SALT',       '`Iu/$(mDk62fNe4QdMCh?hA^r2~ [VFGpzbyFQ3Mc}{|HD~<N4ORm:&X,my?_J-s');

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
