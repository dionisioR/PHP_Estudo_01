<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1532518a70ac0ee1f5e489845a04105
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1532518a70ac0ee1f5e489845a04105::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1532518a70ac0ee1f5e489845a04105::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1532518a70ac0ee1f5e489845a04105::$classMap;

        }, null, ClassLoader::class);
    }
}
