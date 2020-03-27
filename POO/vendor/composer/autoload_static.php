<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c098a7623676b21d5df28bc4d74bfff
{
    public static $files = array (
        '1853224d429726b1e0df33834223c0b6' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nata\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nata\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c098a7623676b21d5df28bc4d74bfff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c098a7623676b21d5df28bc4d74bfff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}