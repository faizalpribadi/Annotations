<?php
namespace Mozart\Library\Annotations;

/*
 * This file is a part of Mozart PHP Small MVC Framework
 *
 * (C) Faizal Pribadi - Gesture Media Ltd - 2012
 *
 * For the full copyright and license information, please view the LICENSE
 *
 * file that was distributed with this source code.
 */

/**
 * Returned session object with annotation class
 *
 * @author  Faizal Pribadi  <faizal_pribadi@aol.com>
 *
 * @Annotation
 * @Target("METHOD")
 */
final class Returned
{
    /**
     * Back the start session method
     * @var bool
     */
    public $comeBack = false;
}
