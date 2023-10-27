<?php

// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key = '6385098008:AAGzEjsHtGhZjwGYk5AQNI0pPzmBm5KN6vc';
$bot_username = 'totml_bot';
$hook_url     = 'https://theblazingbyte.com/hook.php';

$allowed_updates = [
  Update::TYPE_MESSAGE,
  Update::TYPE_CHANNEL_POST,
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url, ['allowed_updates' => $allowed_updates]);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e->getMessage();
}
