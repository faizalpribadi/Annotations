# Mozart - Annotations Library

-. Development Version

dev-master: Master: [![Build Status](https://secure.travis-ci.org/FaizalPribadi/Annotations.png?branch=master)](http://travis-ci.org/FaizalPribadi/Annotations)

Usage The Annotations

``` php
<?php

use Mozart\Library\Annotations as Mozart;

/**
 * @Mozart\Access(" ")      // do something with @Access annotation
 * @Mozart\Inject(" ")      // do something with @Inject annotation
 * @Mozart\Lazy(" ")        // do something with @Lazy annotation
 * @Mozart\Returned(" ")    // do something with @Returned annotation
 * @Mozart\Rewind(" ")      // do something with @Rewind annotation
 * @Mozart\Scope(" ")       // do something with @Scope annotation
 * @Mozart\Validate(" ")    // do something with @Validate annotation
 * @Mozart\ValueObject(" ") // do something with @ValueObject annotation
 */
class Kernel
{
    /**
     * @Mozart\Inject()     // if some other class as { Service Class }
     * @var Service
     */
    protected $class;


    public function run($service)
    {
        return $this->class->set($service)->get();
    }
}

/**
 * The Service Class
 */
class Service
{
    protected $service;

    public function set($service)
    {
        $this->service = $service;

        return $this;   
    }

    public function get()
    {
        return $this->service;
    }
}
```
