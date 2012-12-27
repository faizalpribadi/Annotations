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
 * Used to control method or property with the validate
 *
 * @author  Faizal Pribadi  <faizal_pribadi@aol.com>
 *
 * @Annotation
 * @Target({"METHOD", "PROPERTY"})
 */
class Validate
{
    /**
     * Validate object type name
     * @var string
     */
    public $type;

    /**
     * Options the validator
     * @var array
     */
    public $options = array();

    /**
     * The name of this annotation argument
     * @var string
     */
    public $argument;

    /**
     * Validate should be executed
     * @var array
     */
    public $validation = array();

    /**
     * @param  array                     $values
     * @throws \InvalidArgumentException
     */
    public function __construct(array $values)
    {
        if (!isset($values['type'])) {
            throw new \InvalidArgumentException(
                sprintf(
                    'invalid name of type "%s" restricted', $values['type']
                )
            );
        }
        $this->type = $values['type'];

        if (isset($values['options']) && is_array($values['options'])) {
            $this->options = $values['options'];
        }

        if (isset($values['argument'])) {
            $this->argument = ltrim($values['argument']);
        }

        if (isset($values['validation']) && is_array($values['validation'])) {
            $this->validation = $values['validation'];
        }
    }
}
