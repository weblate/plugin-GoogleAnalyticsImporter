<?php

/**
 * This file is part of the ramsey/uuid library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
declare (strict_types=1);
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\Time;

use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\TimeProviderInterface;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Type\Integer as IntegerObject;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Type\Time;
/**
 * FixedTimeProvider uses a known time to provide the time
 *
 * This provider allows the use of a previously-generated, or known, time
 * when generating time-based UUIDs.
 */
class FixedTimeProvider implements TimeProviderInterface
{
    /**
     * @var \Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Type\Time
     */
    private $time;
    public function __construct(Time $time)
    {
        $this->time = $time;
    }
    /**
     * Sets the `usec` component of the time
     *
     * @param int|string|IntegerObject $value The `usec` value to set
     */
    public function setUsec($value) : void
    {
        $this->time = new Time($this->time->getSeconds(), $value);
    }
    /**
     * Sets the `sec` component of the time
     *
     * @param int|string|IntegerObject $value The `sec` value to set
     */
    public function setSec($value) : void
    {
        $this->time = new Time($value, $this->time->getMicroseconds());
    }
    public function getTime() : Time
    {
        return $this->time;
    }
}
