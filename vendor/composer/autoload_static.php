<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf946509490b5fd968a8c5c0e37324826
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf946509490b5fd968a8c5c0e37324826::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf946509490b5fd968a8c5c0e37324826::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf946509490b5fd968a8c5c0e37324826::$classMap;

        }, null, ClassLoader::class);
    }
}
