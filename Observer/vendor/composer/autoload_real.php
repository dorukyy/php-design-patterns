<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdddd82c4dd8d6def5b55f6a45bbe1022
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

        spl_autoload_register(array('ComposerAutoloaderInitdddd82c4dd8d6def5b55f6a45bbe1022', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdddd82c4dd8d6def5b55f6a45bbe1022', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdddd82c4dd8d6def5b55f6a45bbe1022::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
