<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit645dda4609666d2218a9b9ae340686ae
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matheus\\Dionivan\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matheus\\Dionivan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit645dda4609666d2218a9b9ae340686ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit645dda4609666d2218a9b9ae340686ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit645dda4609666d2218a9b9ae340686ae::$classMap;

        }, null, ClassLoader::class);
    }
}
