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
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\Node;

use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Exception\NodeException;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Provider\NodeProviderInterface;
use Matomo\Dependencies\GoogleAnalyticsImporter\Ramsey\Uuid\Type\Hexadecimal;
/**
 * FallbackNodeProvider retrieves the system node ID by stepping through a list
 * of providers until a node ID can be obtained
 */
class FallbackNodeProvider implements NodeProviderInterface
{
    /**
     * @var iterable<NodeProviderInterface>
     */
    private $providers;
    /**
     * @param iterable<NodeProviderInterface> $providers Array of node providers
     */
    public function __construct(iterable $providers)
    {
        $this->providers = $providers;
    }
    public function getNode() : Hexadecimal
    {
        $lastProviderException = null;
        foreach ($this->providers as $provider) {
            try {
                return $provider->getNode();
            } catch (NodeException $exception) {
                $lastProviderException = $exception;
                continue;
            }
        }
        throw new NodeException('Unable to find a suitable node provider', 0, $lastProviderException);
    }
}
