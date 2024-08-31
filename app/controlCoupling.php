<?php

final class FileHandler
{
    public function processFile(string $filePath, string $mode)
    {
        // Поведение данного класса напрямую зависит от параметра $mode

        if ($mode === 'read') {
            echo 'Reading file: ' . $filePath;
        } elseif ($mode === 'write') {
            echo 'Writing to file: ' . $filePath;
        }
    }
}

$fileHandler = new FileHandler();
$fileHandler->processFile('example.txt', 'read');
