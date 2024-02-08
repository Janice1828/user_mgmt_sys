<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa3f5164ddccbb50db0538148e1deb78
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa3f5164ddccbb50db0538148e1deb78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa3f5164ddccbb50db0538148e1deb78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa3f5164ddccbb50db0538148e1deb78::$classMap;

        }, null, ClassLoader::class);
    }
}