<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc066aa5f1506511472b57300d8d191e5
{
    public static $files = array (
        '2a63b016e165baffec83cc8614cb2e00' => __DIR__ . '/../..' . '/app/config.php',
        '60382fcd583c501ef9658cb25097b974' => __DIR__ . '/../..' . '/app/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/system',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc066aa5f1506511472b57300d8d191e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc066aa5f1506511472b57300d8d191e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc066aa5f1506511472b57300d8d191e5::$classMap;

        }, null, ClassLoader::class);
    }
}