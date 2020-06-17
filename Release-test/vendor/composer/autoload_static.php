<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8608233655cf5a49ae7927b959f8cbb0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8608233655cf5a49ae7927b959f8cbb0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8608233655cf5a49ae7927b959f8cbb0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
