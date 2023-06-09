<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc75b68c66f14b51391a8e533f2221c3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PEAR_Exception' => __DIR__ . '/..' . '/pear/pear_exception/PEAR/Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc75b68c66f14b51391a8e533f2221c3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc75b68c66f14b51391a8e533f2221c3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc75b68c66f14b51391a8e533f2221c3c::$classMap;

        }, null, ClassLoader::class);
    }
}
