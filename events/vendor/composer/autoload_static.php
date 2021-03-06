<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf61cc4ca81d758a86ef3f9624bc16ee0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf61cc4ca81d758a86ef3f9624bc16ee0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf61cc4ca81d758a86ef3f9624bc16ee0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
