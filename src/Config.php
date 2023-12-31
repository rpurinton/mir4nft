<?php

namespace RPurinton\Mir4nft;

class Config
{
    public static function get(string $file): array|bool|string|int|float
    {
        $config = json_decode(file_get_contents(__DIR__ . "/../config/$file.json"), true);
        if (!$config) throw new Error("Failed to load config file: $file.json");
        return $config;
    }
}
