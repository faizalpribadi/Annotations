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
 * Filter the definition of method from function
 *
 * @Annotation
 * @Target("PROPERTY")
 *
 * @author  Faizal Pribadi <faizal_pribadi@aol.com>
 */
class Definition
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $definition;
}
