# php-microtime-float
Get a more accurate time, using microtime as float

### Install with composer

`$ composer require ratacibernetica/php-microtime-float`

### Quickstart

```php
Use ratacibernetica\MicroTimeFloat as MTF;
$time = MTF::microtime_float();
sleep(1);
$time2 = MTF::microtime_float();

//in this example, the result of $time2 - $time1 would be > 1.00XXXX
```
