<?php

final class EmailSender
{
    public function send(User $user): void
    {
        $email = $user->email;

        // ...
    }
}
