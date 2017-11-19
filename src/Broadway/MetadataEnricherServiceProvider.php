<?php namespace Nwidart\LaravelBroadway\Broadway;

use Broadway\EventSourcing\EventStreamDecorator;
use Broadway\EventSourcing\MetadataEnrichment\MetadataEnrichingEventStreamDecorator;
use Illuminate\Support\ServiceProvider;
use Nwidart\LaravelBroadway\Registries\MetaDataEnricherRegistry;

/**
 * Class MetadataEnricherServiceProvider
 *
 * @package Nwidart\LaravelBroadway\Broadway
 * @author Stefano Kowalke <blueduck@mailbox.org>
 */
class MetadataEnricherServiceProvider extends ServiceProvider
{

    /**
     * Register the MetadataEnrichingEventStreamDecorator
     */
    public function register()
    {
        $this->app->singleton(EventStreamDecorator::class, function () {
            return new MetadataEnrichingEventStreamDecorator();
        });

        $this->app->singleton('laravelbroadway.enricher.registry', function ($app) {
            return new MetaDataEnricherRegistry($app[EventStreamDecorator::class]);
        });
    }
}
