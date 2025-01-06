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
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection;

use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Exception\InvalidArgumentException;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Exception\NoSuchElementException;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Tool\TypeTrait;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Collection\Tool\ValueToStringTrait;
use function array_key_first;
/**
 * This class provides a basic implementation of `QueueInterface`, to minimize
 * the effort required to implement this interface.
 *
 * @template T
 * @extends AbstractArray<T>
 * @implements QueueInterface<T>
 */
class Queue extends AbstractArray implements QueueInterface
{
    /**
     * @var string
     * @readonly
     */
    private $queueType;
    use TypeTrait;
    use ValueToStringTrait;
    /**
     * Constructs a queue object of the specified type, optionally with the
     * specified data.
     *
     * @param string $queueType The type or class name associated with this queue.
     * @param array<array-key, T> $data The initial items to store in the queue.
     */
    public function __construct(string $queueType, array $data = [])
    {
        $this->queueType = $queueType;
        parent::__construct($data);
    }
    /**
     * {@inheritDoc}
     *
     * Since arbitrary offsets may not be manipulated in a queue, this method
     * serves only to fulfill the `ArrayAccess` interface requirements. It is
     * invoked by other operations when adding values to the queue.
     *
     * @throws InvalidArgumentException if $value is of the wrong type.
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value) : void
    {
        if ($this->checkType($this->getType(), $value) === \false) {
            throw new InvalidArgumentException('Value must be of type ' . $this->getType() . '; value is ' . $this->toolValueToString($value));
        }
        $this->data[] = $value;
    }
    /**
     * @throws InvalidArgumentException if $value is of the wrong type.
     * @param mixed $element
     */
    public function add($element) : bool
    {
        $this[] = $element;
        return \true;
    }
    /**
     * @return T
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function element()
    {
        if ($this->peek() !== null) {
            throw new NoSuchElementException('Can\'t return element from Queue. Queue is empty.');
        }
        return $this->peek();
    }
    /**
     * @param mixed $element
     */
    public function offer($element) : bool
    {
        try {
            return $this->add($element);
        } catch (InvalidArgumentException $exception) {
            return \false;
        }
    }
    /**
     * @return T | null
     */
    public function peek()
    {
        $index = array_key_first($this->data);
        if ($index === null) {
            return null;
        }
        return $this[$index];
    }
    /**
     * @return T | null
     */
    public function poll()
    {
        $index = array_key_first($this->data);
        if ($index === null) {
            return null;
        }
        $head = $this[$index];
        unset($this[$index]);
        return $head;
    }
    /**
     * @return T
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function remove()
    {
        if ($this->poll() !== null) {
            throw new NoSuchElementException('Can\'t return element from Queue. Queue is empty.');
        }
        return $this->poll();
    }
    public function getType() : string
    {
        return $this->queueType;
    }
}
