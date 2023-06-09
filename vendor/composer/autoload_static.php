<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64f8199853df376b88f7ba9651f44022
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit64f8199853df376b88f7ba9651f44022::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64f8199853df376b88f7ba9651f44022::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit64f8199853df376b88f7ba9651f44022::$classMap;

        }, null, ClassLoader::class);
    }
}
