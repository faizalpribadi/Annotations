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
 * Wiring the dependency injection executable
 *
 * @author  Faizal Pribadi  <faizal_pribadi@aol.com>
 *
 * @Annotation
 * @Target({"METHOD", "CLASS"})
 */
final class Rewind
{
    /**
     * Rewind automatic enabled
     * @var bool
     */
    public $isEnable = true;

    /**
     * Rewind disabled
     * @var bool
     */
    public $isDisabled = false;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (array() !== $values['value']) {
            $this->isEnable = isset($values['isEnabled']) ? (boolean) $values['isEnabled'] : (boolean) $values['value'];
        }

        if (isset($values['isDisabled'])) {
            $this->isDisabled = $values['isDisabled'];
            unset($this->isDisabled);
        }
    }
}
