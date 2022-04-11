<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita41b538b85dbb2fbc9d3269d51220bcc
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '972fda704d680a3a53c68e34e193cb22' => __DIR__ . '/..' . '/react/promise-timer/src/functions_include.php',
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
        'fe62ba7e10580d903cc46d808b5961a4' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/helpers.php',
        'caf31cc6ec7cf2241cb6f12c226c3846' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/alias.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tightenco\\Collect\\' => 18,
        ),
        'S' => 
        array (
            'Spatie\\Macroable\\' => 17,
        ),
        'R' => 
        array (
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'M' => 
        array (
            'Mpociot\\Pipeline\\' => 17,
            'Modules\\Facebook\\' => 17,
        ),
        'B' => 
        array (
            'BotMan\\Drivers\\Facebook\\' => 24,
            'BotMan\\BotMan\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tightenco\\Collect\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Collect',
        ),
        'Spatie\\Macroable\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/macroable/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'Mpociot\\Pipeline\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpociot/pipeline/src',
        ),
        'Modules\\Facebook\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'BotMan\\Drivers\\Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/botman/driver-facebook/src',
        ),
        'BotMan\\BotMan\\' => 
        array (
            0 => __DIR__ . '/..' . '/botman/botman/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita41b538b85dbb2fbc9d3269d51220bcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita41b538b85dbb2fbc9d3269d51220bcc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita41b538b85dbb2fbc9d3269d51220bcc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
