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
 * Route the object class with definition
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @author  Faizal Pribadi <faizal_pribadi@aol.com>
 */
final class Route
{
    /**
     * @var string
     * @Required
     */
    public $type;

    /**
     * @var string
     * @Required
     */
    public $name;

    /**
     * @var array
     */
    public $params = array();
}
