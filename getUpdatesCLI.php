#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '6385098008:AAGzEjsHtGhZjwGYk5AQNI0pPzmBm5KN6vc';
$bot_username = 'totml_bot';

$mysql_credentials = [
   'host'     => 'theblazingbyte.com',
   'port'     => 3306, // optional
   'user'     => 'u578371853_mattot',
   'password' => 'Ambosukonaip16',
   'database' => 'u578371853_totml',
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Enable MySQL
    // $telegram->enableMySql($mysql_credentials);
    $telegram->useGetUpdatesWithoutDatabase();

    // Handle telegram getUpdates request
    $telegram->handleGetUpdates();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e->getMessage();
}
