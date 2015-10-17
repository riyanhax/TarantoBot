<?php
//modulo delle KEYs per funzionamento dei bot (da non committare)

//Telegram
define('API’,’’);\\api key google shortner
define('TELEGRAM_BOT','');
define('BOT_WEBHOOK', 'start.php’);\\inserire il path https di start.php se webhook attivo
define('LOG_FILE', 'telegram.log');

$db_path=dirname(__FILE__).'/./db/taranto.sqlite'; \\la dir e file devono essere scrivibili da apache/www-data

$csv_path=dirname(__FILE__).'/./db/map_data.csv'; \\la dir e file devono essere scrivibili da apache/www-data
define ('DB_NAME', "sqlite:". $db_path);
define('DB_TABLE',"user");
define('DB_TABLE_GEO',"segnalazioni");
define('DB_CONF', 0666);
define('DB_ERR', "errore database SQLITE");

// Your Openstreetmap Query settings
define('AROUND', 5000);						//Number of meters to calculate radius to search
define('MAX', 30);							//max number of points to search
//define('TAG','"amenity"="pharmacy"');

?>
