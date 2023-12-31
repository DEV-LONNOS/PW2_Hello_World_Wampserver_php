<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91aa5225a5eb7734fd75df515bfc48ec
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luisl\\PastaTeste\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luisl\\PastaTeste\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit91aa5225a5eb7734fd75df515bfc48ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91aa5225a5eb7734fd75df515bfc48ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91aa5225a5eb7734fd75df515bfc48ec::$classMap;

        }, null, ClassLoader::class);
    }
}
