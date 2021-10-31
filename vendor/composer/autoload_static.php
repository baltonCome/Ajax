<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1975369c97272353338b3755bab8a53
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WilliamCosta\\DotEnv\\' => 20,
            'WilliamCosta\\DatabaseManager\\' => 29,
        ),
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WilliamCosta\\DotEnv\\' => 
        array (
            0 => __DIR__ . '/..' . '/william-costa/dot-env/src',
        ),
        'WilliamCosta\\DatabaseManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/william-costa/database-manager/src',
        ),
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WilliamCosta\\DatabaseManager\\Database' => __DIR__ . '/..' . '/william-costa/database-manager/src/Database.php',
        'WilliamCosta\\DatabaseManager\\Pagination' => __DIR__ . '/..' . '/william-costa/database-manager/src/Pagination.php',
        'WilliamCosta\\DotEnv\\Environment' => __DIR__ . '/..' . '/william-costa/dot-env/src/Environment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1975369c97272353338b3755bab8a53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1975369c97272353338b3755bab8a53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1975369c97272353338b3755bab8a53::$classMap;

        }, null, ClassLoader::class);
    }
}
