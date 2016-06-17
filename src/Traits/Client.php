<?php namespace Datashaman\ElasticModel\Traits;

use Elasticsearch\ClientBuilder;

trait Client
{
    protected static $client;

    /**
     * Get/set the client for a specific model class
     */
    public static function client()
    {
        if (func_num_args() == 0) {
            if (!isset(static::$client)) {
                static::$client = ClientBuilder::create()->build();
            }

            return static::$client;
        } else {
            static::$client = func_get_arg(0);
        }
    }
}
