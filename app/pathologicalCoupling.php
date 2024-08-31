<?php

class Database
{
    // ...
}

class DataManager
{
    public function accessDatabase(Database $db)
    {
        $reflection = new ReflectionClass($db);

        $hostProperty = $reflection->getProperty('host');
        $hostProperty->setAccessible(true);
        $hostProperty->setValue($db, 'new_host');

        $userProperty = $reflection->getProperty('user');
        $userProperty->setAccessible(true);
        $userProperty->setValue($db, 'new_user');

        $passwordProperty = $reflection->getProperty('password');
        $passwordProperty->setAccessible(true);
        $passwordProperty->setValue($db, 'new_password');

        $connectMethod = $reflection->getMethod('connect');
        $connectMethod->setAccessible(true);
        $connectMethod->invoke($db);

        $connection = $db->getConnection();
        echo "Accessed connection: $connection";
    }
}
