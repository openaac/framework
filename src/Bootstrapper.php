<?php

namespace OpenAAC\Framework;

class Bootstrapper
{
    /**
     * Holds the application's root directory.
     *
     * @var string
     */
    public static $root;

    /**
     * Run the bootstrap procedure.
     *
     * @param  string  $root
     * @return void
     */
    public function run($root)
    {
        static::$root = $root;

        require_once __DIR__.'/../bootstrap/bootstrap.php';
    }

    /**
     * Run the console bootstrap procedure.
     *
     * @param  string  $root
     * @return void
     */
    public function console($root)
    {
        static::$root = $root;

        require_once __DIR__.'/../bootstrap/console.php';
    }

    /**
     * Retrieve the application's root directory.
     *
     * @return string
     */
    public static function rootDirectory()
    {
        return static::$root;
    }
}
