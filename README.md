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

``` php
<?php

/**
 * @Mozart\Route(type = "View", name = "Route name for view template", params = {
 *      "view": "view",
 * })
 */
class ObjectRoute
{
    /**
     * @Mozart\Definition(name = "Mapper", definition = "Inject other class on this property")
     */
    private $mapper;

    /**
     * @Mozart\Schema(uri = "/", parameters = {
     *      "controller": "viewcontroller",
     * })
     */
    public function getViewController()
    {
        $options = array(
            'className' => 'DemoClass',
            'useClass' => 'Mozart\\Library\\Event\\DispatcherAware',
            'author'=> 'Faizal Pribadi',
            'annotation' => '@Route(type = "Template", name = "Template class", params = {
                "template": "template",
            })',
        );

        return <<<EOF
use Mozart\Library\Event\DispatcherAware;

/**
 * {$options['annotation']}
 * @author {$options['author']}
 */
class {$options['className']}
{

}
EOF;

    }
}

/**
 * Dumper Annotation
 */
$reader = new AnnotationReader();
$routeClass = new \ReflectionClass('ObjectRoute');
$methodClass = new \ReflectionMethod('ObjectRoute', 'getViewController');
$propertyClass = new \ReflectionProperty('ObjectRoute', 'mapper');
var_dump($reader->getClassAnnotations($routeClass));
var_dump($reader->getMethodAnnotations($methodClass));
var_dump($reader->getPropertyAnnotations($propertyClass));
```
