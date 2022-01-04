<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee5b91a9754f5f670384dcc4af759529
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Killian\\Public\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Killian\\Public\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitee5b91a9754f5f670384dcc4af759529::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee5b91a9754f5f670384dcc4af759529::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee5b91a9754f5f670384dcc4af759529::$classMap;

        }, null, ClassLoader::class);
    }
}
