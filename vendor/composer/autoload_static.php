<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite73929f78827828d95f70b7a78dd45cf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shape\\' => 6,
        ),
        'I' => 
        array (
            'Interface\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shape\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Shape',
        ),
        'Interface\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Interface',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite73929f78827828d95f70b7a78dd45cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite73929f78827828d95f70b7a78dd45cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}