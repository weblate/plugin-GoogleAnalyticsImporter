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

use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\AbstractArray;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Exception\InvalidArgumentException;
use Traversable;
use function array_key_exists;
use function array_keys;
use function in_array;
use function var_export;
/**
 * This class provides a basic implementation of `MapInterface`, to minimize the
 * effort required to implement this interface.
 *
 * @template K of array-key
 * @template T
 * @extends AbstractArray<T>
 * @implements MapInterface<K, T>
 */
abstract class AbstractMap extends AbstractArray implements MapInterface
{
    /**
     * @param array<K, T> $data The initial items to add to this map.
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
    /**
     * @return Traversable<K, T>
     */
    public function getIterator() : Traversable
    {
        return parent::getIterator();
    }
    /**
     * @param mixed $offset The offset to set
     * @param mixed $value The value to set at the given offset.
     *
     * @inheritDoc
     * @psalm-suppress MoreSpecificImplementedParamType,DocblockTypeContradiction
     */
    public function offsetSet($offset, $value) : void
    {
        if ($offset === null) {
            throw new InvalidArgumentException('Map elements are key/value pairs; a key must be provided for ' . 'value ' . var_export($value, \true));
        }
        $this->data[$offset] = $value;
    }
    /**
     * @param int|string $key
     */
    public function containsKey($key) : bool
    {
        return array_key_exists($key, $this->data);
    }
    /**
     * @param mixed $value
     */
    public function containsValue($value) : bool
    {
        return in_array($value, $this->data, \true);
    }
    /**
     * @inheritDoc
     */
    public function keys() : array
    {
        return array_keys($this->data);
    }
    /**
     * @param int|string $key The key to return from the map.
     * @param mixed $defaultValue The default value to use if `$key` is not found.
     *
     * @return T | null the value or `null` if the key could not be found.
     */
    public function get($key, $defaultValue = null)
    {
        return $this[$key] ?? $defaultValue;
    }
    /**
     * @param int|string $key The key to put or replace in the map.
     * @param mixed $value The value to store at `$key`.
     *
     * @return T | null the previous value associated with key, or `null` if
     *     there was no mapping for `$key`.
     */
    public function put($key, $value)
    {
        $previousValue = $this->get($key);
        $this[$key] = $value;
        return $previousValue;
    }
    /**
     * @param int|string $key The key to put in the map.
     * @param mixed $value The value to store at `$key`.
     *
     * @return T | null the previous value associated with key, or `null` if
     *     there was no mapping for `$key`.
     */
    public function putIfAbsent($key, $value)
    {
        $currentValue = $this->get($key);
        if ($currentValue === null) {
            $this[$key] = $value;
        }
        return $currentValue;
    }
    /**
     * @param int|string $key The key to remove from the map.
     *
     * @return T | null the previous value associated with key, or `null` if
     *     there was no mapping for `$key`.
     */
    public function remove($key)
    {
        $previousValue = $this->get($key);
        unset($this[$key]);
        return $previousValue;
    }
    /**
     * @param int|string $key
     * @param mixed $value
     */
    public function removeIf($key, $value) : bool
    {
        if ($this->get($key) === $value) {
            unset($this[$key]);
            return \true;
        }
        return \false;
    }
    /**
     * @param int|string $key The key to replace.
     * @param mixed $value The value to set at `$key`.
     *
     * @return T | null the previous value associated with key, or `null` if
     *     there was no mapping for `$key`.
     */
    public function replace($key, $value)
    {
        $currentValue = $this->get($key);
        if ($this->containsKey($key)) {
            $this[$key] = $value;
        }
        return $currentValue;
    }
    /**
     * @param int|string $key
     * @param mixed $oldValue
     * @param mixed $newValue
     */
    public function replaceIf($key, $oldValue, $newValue) : bool
    {
        if ($this->get($key) === $oldValue) {
            $this[$key] = $newValue;
            return \true;
        }
        return \false;
    }
    /**
     * @return array<K, T>
     */
    public function __serialize() : array
    {
        return parent::__serialize();
    }
    /**
     * @return array<K, T>
     */
    public function toArray() : array
    {
        return parent::toArray();
    }
}
