<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a277021d9c1928f31b0a5730176c5f2
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a277021d9c1928f31b0a5730176c5f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a277021d9c1928f31b0a5730176c5f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a277021d9c1928f31b0a5730176c5f2::$classMap;

        }, null, ClassLoader::class);
    }
}
