<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 06.08.19
 * Time: 10:02
 */

namespace App\Service;


class Data
{
    public function createMessages()
    {
        $bot = new \TelegramBot\Api\Client(config('app.bot_token'));

        // команда для start
        $bot->command('start', function ($message) use ($bot) {
            $answer = 'Добро пожаловать!';
            $bot->sendMessage($message->getChat()->getId(), $answer);
        });
        // команда для помощи
        $bot->command('help', function ($message) use ($bot) {
            $answer = 'Команды:
		/help - вывод справки';
            $bot->sendMessage($message->getChat()->getId(), $answer);
        });
        $bot->command('push', function ($message) use ($bot) {
            $text = $message->getText();
            $param = str_replace('/push ', '', $text);
            $answer = 'Неизвестная команда';
            $bot->sendMessage($message->getChat()->getId(), 'ok');
        });
        $bot->run();
    }
}
