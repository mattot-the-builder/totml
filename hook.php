<?php

use Longman\TelegramBot\Entities\Update;

// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '6385098008:AAGzEjsHtGhZjwGYk5AQNI0pPzmBm5KN6vc';
$bot_username = 'totml_bot';


try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e->getMessage();
}
