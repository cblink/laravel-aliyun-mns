<?php

namespace Cblink\Aliyun\Mns;

use Illuminate\Support\ServiceProvider;

/**
 * Class AliyunMnsServiceProvider
 * @package Cblink\Aliyun\Mns
 */
class AliyunMnsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    public function boot()
    {
        $this->registerConnector($this->app['queue']);

        $this->commands('command.queue.mns.clear');
    }

    /**
     * Add the connector to the queue drivers.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.queue.mns.clear', function () {
            return new MnsClearCommand();
        });
    }

    /**
     * Register the MNS queue connector.
     *
     * @param \Illuminate\Queue\QueueManager $manager
     *
     * @return void
     */
    protected function registerConnector($manager)
    {
        $manager->addConnector('mns', function () {
            return new MNSConnector();
        });
    }
}