<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd487eb39062b37336c507c1263b844e3
{
    public static $files = array (
        'a4ecaeafb8cfb009ad0e052c90355e98' => __DIR__ . '/..' . '/beberlei/assert/lib/Assert/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'O' => 
        array (
            'OTPHP\\' => 6,
        ),
        'A' => 
        array (
            'Assert\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'OTPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/otphp/src',
        ),
        'Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/beberlei/assert/lib/Assert',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd487eb39062b37336c507c1263b844e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd487eb39062b37336c507c1263b844e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd487eb39062b37336c507c1263b844e3::$classMap;

        }, null, ClassLoader::class);
    }
}
