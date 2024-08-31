<?php

declare(strict_types=1);

final class AuthUserCase
{
    public function handle(Login $login, Password $password): void
    {
        // ...
        // В данном примере use-кейс для авторизации имеет жесткую связь
        // на суперглобальную переменную $_SERVER
        // В консоли данные кейс уже не переиспользовать

        $user->setIpAddress($_SERVER['REMOTE_ADDR']);
        $user->setUserAgent($_SERVER['HTTP_USER_AGENT']);
    }
}
