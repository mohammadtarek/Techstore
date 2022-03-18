<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41406e61cda5fe43263c7c64794989cb
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TechStore\\Classes\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TechStore\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41406e61cda5fe43263c7c64794989cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41406e61cda5fe43263c7c64794989cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41406e61cda5fe43263c7c64794989cb::$classMap;

        }, null, ClassLoader::class);
    }
}