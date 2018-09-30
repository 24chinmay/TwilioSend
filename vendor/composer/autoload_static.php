<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit871f9dce265e714c7accf11cf684b32c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit871f9dce265e714c7accf11cf684b32c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit871f9dce265e714c7accf11cf684b32c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
