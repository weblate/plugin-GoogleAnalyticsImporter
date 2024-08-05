<?php

/**
 * This file is part of the ramsey/collection library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
declare (strict_types=1);
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Map;

use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Exception\InvalidArgumentException;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Tool\TypeTrait;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Tool\ValueToStringTrait;
/**
 * This class provides a basic implementation of `TypedMapInterface`, to
 * minimize the effort required to implement this interface.
 *
 * @template K of array-key
 * @template T
 * @extends AbstractMap<K, T>
 * @implements TypedMapInterface<K, T>
 */
abstract class AbstractTypedMap extends AbstractMap implements TypedMapInterface
{
    use TypeTrait;
    use ValueToStringTrait;
    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @inheritDoc
     * @psalm-suppress MoreSpecificImplementedParamType
     */
    public function offsetSet($offset, $value) : void
    {
        if ($this->checkType($this->getKeyType(), $offset) === \false) {
            throw new InvalidArgumentException('Key must be of type ' . $this->getKeyType() . '; key is ' . $this->toolValueToString($offset));
        }
        if ($this->checkType($this->getValueType(), $value) === \false) {
            throw new InvalidArgumentException('Value must be of type ' . $this->getValueType() . '; value is ' . $this->toolValueToString($value));
        }
        parent::offsetSet($offset, $value);
    }
}
