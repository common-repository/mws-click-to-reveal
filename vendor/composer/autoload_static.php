<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6199f2094d8d8d41f20b1d991df6ac69
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ModernWebServices\\Plugins\\ClickToReveal\\' => 40,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ModernWebServices\\Plugins\\ClickToReveal\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/mws-click-to-reveal/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6199f2094d8d8d41f20b1d991df6ac69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6199f2094d8d8d41f20b1d991df6ac69::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
