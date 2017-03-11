<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3273db00177ec34236b4477d6f503d10
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ucc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ucc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3273db00177ec34236b4477d6f503d10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3273db00177ec34236b4477d6f503d10::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}