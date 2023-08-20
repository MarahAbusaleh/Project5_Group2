<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1dc51d6f36dc088b4769f6090c38fe69
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1dc51d6f36dc088b4769f6090c38fe69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1dc51d6f36dc088b4769f6090c38fe69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1dc51d6f36dc088b4769f6090c38fe69::$classMap;

        }, null, ClassLoader::class);
    }
}
