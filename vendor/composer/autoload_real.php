<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit575448c2e872ca98312c2b7308479ecc
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

        spl_autoload_register(array('ComposerAutoloaderInit575448c2e872ca98312c2b7308479ecc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit575448c2e872ca98312c2b7308479ecc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit575448c2e872ca98312c2b7308479ecc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
