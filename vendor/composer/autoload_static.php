<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit719c18e139cb2833421c0ea4e6272dc0
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'PiramideUploader' => __DIR__ . '/../..' . '/piramide-uploader/PiramideUploader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit719c18e139cb2833421c0ea4e6272dc0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit719c18e139cb2833421c0ea4e6272dc0::$classMap;

        }, null, ClassLoader::class);
    }
}
