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
 * Inject annotation class will be used dependency injection property
 *
 * @author  Faizal Pribadi  <faizal_pribadi@aol.com>
 *
 * @Annotation
 *
 * @Target("PROPERTY")
 */
class Inject
{
    public $class;

    public function __construct($values = null)
    {
        if (null !== $values && !is_array($values)) {
            $values = array(
                'class' => new \ReflectionClass($this)
            );
        }

        $this->class = isset($values['class']) ? $values['class'] : $values['value'];

        if (!class_exists($this->class)) {
            throw new \Exception(sprintf('Class of ["%s"] not found', $this->class));
        }
    }
}