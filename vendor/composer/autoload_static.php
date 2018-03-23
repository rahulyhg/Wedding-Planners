<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit746cfd1883f0ef7438813013fb5e7150
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit746cfd1883f0ef7438813013fb5e7150::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit746cfd1883f0ef7438813013fb5e7150::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
