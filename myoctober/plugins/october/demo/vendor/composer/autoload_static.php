<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9414a1fd8a652a6547be4f1bf09c9893
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'October\\Demo\\' => 13,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'October\\Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9414a1fd8a652a6547be4f1bf09c9893::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9414a1fd8a652a6547be4f1bf09c9893::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9414a1fd8a652a6547be4f1bf09c9893::$classMap;

        }, null, ClassLoader::class);
    }
}