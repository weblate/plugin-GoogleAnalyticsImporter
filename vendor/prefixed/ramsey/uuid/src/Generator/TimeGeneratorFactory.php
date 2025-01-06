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
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Generator;

use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Converter\TimeConverterInterface;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\NodeProviderInterface;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\TimeProviderInterface;
/**
 * TimeGeneratorFactory retrieves a default time generator, based on the
 * environment
 */
class TimeGeneratorFactory
{
    /**
     * @var \Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\NodeProviderInterface
     */
    private $nodeProvider;
    /**
     * @var \Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Converter\TimeConverterInterface
     */
    private $timeConverter;
    /**
     * @var \Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\TimeProviderInterface
     */
    private $timeProvider;
    public function __construct(NodeProviderInterface $nodeProvider, TimeConverterInterface $timeConverter, TimeProviderInterface $timeProvider)
    {
        $this->nodeProvider = $nodeProvider;
        $this->timeConverter = $timeConverter;
        $this->timeProvider = $timeProvider;
    }
    /**
     * Returns a default time generator, based on the current environment
     */
    public function getGenerator() : TimeGeneratorInterface
    {
        return new DefaultTimeGenerator($this->nodeProvider, $this->timeConverter, $this->timeProvider);
    }
}
