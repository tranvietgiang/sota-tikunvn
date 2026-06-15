<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "<pre>";
echo "PHP OK\n";
echo "Version: " . PHP_VERSION . "\n";
echo "Server: " . ($_SERVER['SERVER_NAME'] ?? 'unknown') . "\n\n";

define('LIBRARIES', './libraries/');
define('SOURCES', './sources/');
define('LAYOUT', 'layout/');
define('THUMBS', 'thumbs');
define('WATERMARK', 'watermark');

try {
    require_once LIBRARIES . "config.php";
    echo "Config OK\n";
    echo "DB host: " . $config['database']['host'] . "\n";
    echo "DB name: " . $config['database']['dbname'] . "\n";
    echo "DB user: " . $config['database']['username'] . "\n\n";

    require_once LIBRARIES . 'autoload.php';
    require_once LIBRARIES . "config-type.php";
    new AutoLoad();
    echo "Autoload OK\n";

    $d = new PDODb($config['database']);
    $setting = $d->rawQueryOne("select id from #_setting limit 0,1");
    echo "DB connect OK\n";
    echo "table_setting row: " . (!empty($setting['id']) ? $setting['id'] : 'empty') . "\n";

    $homeNews = $d->rawQuery("select id from #_news where type = ? limit 0,1", array('home-news'));
    echo "table_news home-news rows test: " . count($homeNews) . "\n";
} catch (Throwable $e) {
    echo "\nERROR:\n";
    echo get_class($e) . ": " . $e->getMessage() . "\n";
    echo $e->getFile() . ":" . $e->getLine() . "\n";
}

echo "</pre>";
