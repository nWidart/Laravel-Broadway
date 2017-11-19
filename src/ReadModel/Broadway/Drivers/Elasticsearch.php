<?php namespace Nwidart\LaravelBroadway\ReadModel\Broadway\Drivers;

use Broadway\ReadModel\ElasticSearch\ElasticSearchClientFactory;
use Nwidart\LaravelBroadway\ReadModel\Driver;

class Elasticsearch implements Driver
{
    /**
     * @var \Illuminate\Config\Repository
     */
    private $config;

    public function __construct()
    {
        $this->config = app(\Illuminate\Config\Repository::class);
    }

    /**
     * @return object
     */
    public function getDriver()
    {
        $config = $this->config->get('broadway.read-model-connections.elasticsearch.config');

        return (new ElasticSearchClientFactory())->create($config);
    }
}
