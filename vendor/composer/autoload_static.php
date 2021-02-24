<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e1b030315ca1aa678228ea24e76baba
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e1b030315ca1aa678228ea24e76baba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e1b030315ca1aa678228ea24e76baba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e1b030315ca1aa678228ea24e76baba::$classMap;

        }, null, ClassLoader::class);
    }
}
