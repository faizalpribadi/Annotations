<?php
namespace Mozart\Library\Annotations;

/*
 * This file is a part of Mozart PHP Small MVC Framework
 *
 * (c) Faizal Pribadi <faizal_pribadi@aol.com>
 *
 * For the full copyright and license information, please view the LICENSE
 *
 * file that was distributed with this source code.
 */

/**
 * Create definition of method and property on class
 *
 * @Annotation
 * @Target("PROPERTY")
 *
 * @author  Faizal Pribadi <faizal_pribadi@aol.com>
 */
class Schema
{
    /**
     * @var string
     */
    public $uri;

    /**
     * @var array
     */
    public $parameters = array();
}
