<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
$botman->hears('hai', function ($bot) {
    $bot->reply('hai juga');
});

$botman->fallback(function($bot) {
    $bot->reply('Maaf, saya tidak memahami perintah anda.');
    $bot->reply('Silahkan ketik "dinda" (tanpa tanda kutip) untuk memulai percakapan');
});
$botman->hears('dinda', BotManController::class.'@startConversation');
