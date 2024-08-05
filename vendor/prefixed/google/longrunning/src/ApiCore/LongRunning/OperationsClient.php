<?php

namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\LongRunning;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\LongRunning\Gapic\OperationsGapicClient;
if (\false) {
    /**
     * This class is deprecated. Use Google\LongRunning\OperationsClient instead.
     * @deprecated
     */
    class OperationsClient extends OperationsGapicClient
    {
    }
}
// Autoload the class and its alias
class_exists('Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\LongRunning\\OperationsClient');
