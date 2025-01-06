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
use function array_key_last;
use function array_pop;
use function array_unshift;
/**
 * This class provides a basic implementation of `DoubleEndedQueueInterface`, to
 * minimize the effort required to implement this interface.
 *
 * @template T
 * @extends Queue<T>
 * @implements DoubleEndedQueueInterface<T>
 */
class DoubleEndedQueue extends Queue implements DoubleEndedQueueInterface
{
    /**
     * @var string
     * @readonly
     */
    private $queueType;
    /**
     * Constructs a double-ended queue (dequeue) object of the specified type,
     * optionally with the specified data.
     *
     * @param string $queueType The type or class name associated with this dequeue.
     * @param array<array-key, T> $data The initial items to store in the dequeue.
     */
    public function __construct(string $queueType, array $data = [])
    {
        $this->queueType = $queueType;
        parent::__construct($this->queueType, $data);
    }
    /**
     * @throws InvalidArgumentException if $element is of the wrong type
     * @param mixed $element
     */
    public function addFirst($element) : bool
    {
        if ($this->checkType($this->getType(), $element) === \false) {
            throw new InvalidArgumentException('Value must be of type ' . $this->getType() . '; value is ' . $this->toolValueToString($element));
        }
        array_unshift($this->data, $element);
        return \true;
    }
    /**
     * @throws InvalidArgumentException if $element is of the wrong type
     * @param mixed $element
     */
    public function addLast($element) : bool
    {
        return $this->add($element);
    }
    /**
     * @param mixed $element
     */
    public function offerFirst($element) : bool
    {
        try {
            return $this->addFirst($element);
        } catch (InvalidArgumentException $exception) {
            return \false;
        }
    }
    /**
     * @param mixed $element
     */
    public function offerLast($element) : bool
    {
        return $this->offer($element);
    }
    /**
     * @return T the first element in this queue.
     *
     * @throws NoSuchElementException if the queue is empty
     */
    public function removeFirst()
    {
        return $this->remove();
    }
    /**
     * @return T the last element in this queue.
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function removeLast()
    {
        if ($this->pollLast() !== null) {
            throw new NoSuchElementException('Can\'t return element from Queue. Queue is empty.');
        }
        return $this->pollLast();
    }
    /**
     * @return T | null the head of this queue, or `null` if this queue is empty.
     */
    public function pollFirst()
    {
        return $this->poll();
    }
    /**
     * @return T | null the tail of this queue, or `null` if this queue is empty.
     */
    public function pollLast()
    {
        return array_pop($this->data);
    }
    /**
     * @return T the head of this queue.
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function firstElement()
    {
        return $this->element();
    }
    /**
     * @return T the tail of this queue.
     *
     * @throws NoSuchElementException if this queue is empty.
     */
    public function lastElement()
    {
        if ($this->peekLast() !== null) {
            throw new NoSuchElementException('Can\'t return element from Queue. Queue is empty.');
        }
        return $this->peekLast();
    }
    /**
     * @return T | null the head of this queue, or `null` if this queue is empty.
     */
    public function peekFirst()
    {
        return $this->peek();
    }
    /**
     * @return T | null the tail of this queue, or `null` if this queue is empty.
     */
    public function peekLast()
    {
        $lastIndex = array_key_last($this->data);
        if ($lastIndex === null) {
            return null;
        }
        return $this->data[$lastIndex];
    }
}
