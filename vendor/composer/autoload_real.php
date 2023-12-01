<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcaf2fde98e2819a78ba41e3a32acb890
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitcaf2fde98e2819a78ba41e3a32acb890', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcaf2fde98e2819a78ba41e3a32acb890', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcaf2fde98e2819a78ba41e3a32acb890::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
