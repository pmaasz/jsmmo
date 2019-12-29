<?php

Namespace APPNAME\Service;

/**
 * Trait Singleton
 *
 * @package App\Service
 */
trait Singleton
{
    /**
     * @var mixed
     */
    protected static $instance;
    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }
    /**
     * clones Object we want to use when calling the instance
     */
    protected function __clone()
    {
    }

    /**
     * returns the instance of the Object you want to use. For this to work the class you want to use has to use the Singleton.
     *
     * @return mixed
     */
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}