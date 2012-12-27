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
 * Used will be execute the object class
 *
 * @author  Faizal Pribadi  <faizal_pribadi@aol.com>
 *
 * @Annotation
 * @Target("CLASS")
 */
class Scope
{
    /**
     * Scope initialize object will be execute class
     *
     * @var string
     */
    public $value;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->value = $values['value'];
        }
    }
}
