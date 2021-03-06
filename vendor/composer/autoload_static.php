<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a091ab27be82d8f5fe4784ec77e2601
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RRZE\\LetItSnow\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RRZE\\LetItSnow\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a091ab27be82d8f5fe4784ec77e2601::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a091ab27be82d8f5fe4784ec77e2601::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
