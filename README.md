<h1 align="center"> laravel-aliyun-mns </h1>

<p align="center"> aliyun mns queue driver.</p>


## Installing

```shell
$ composer require cblink/laravel-aliyun-mns -vvv
```

## Config

Edit your config/queue.php, add mns connection

```php
<?php
return [
    'connections' => [
        // ...
        'mns'        => [
            'driver'       => 'mns',
            'key'          => env('QUEUE_MNS_ACCESS_KEY'),
            'secret'       => env('QUEUE_MNS_SECRET_KEY'),
            'endpoint'     => env('QUEUE_MNS_ENDPOINT'),
            'queue'        => env('QUEUE_NAME'),
            'wait_seconds' => 30,
        ]
    ]
];
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cblink/laravel-aliyun-mns/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/cblink/laravel-aliyun-mns/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT