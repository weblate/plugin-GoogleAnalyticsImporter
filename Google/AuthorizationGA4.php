<?php

/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\GoogleAnalyticsImporter\Google;

use Piwik\Container\StaticContainer;
use Piwik\Piwik;
class AuthorizationGA4
{
    const CLIENT_CONFIG_OPTION_NAME = 'GoogleAnalyticsImporter.clientConfiguration';
    const ACCESS_TOKEN_OPTION_NAME = 'GoogleAnalyticsImporter.oauthAccessToken';
    public function getClient()
    {
        $klass = StaticContainer::get('GoogleAnalyticsImporter.googleAnalyticsDataClientClass');
        $client = new $klass($this->getClientClassArguments());
        return $client;
    }
    public function getAdminClient()
    {
        $klass = StaticContainer::get('GoogleAnalyticsImporter.googleAnalyticsAdminServiceClientClass');
        $adminClient = new $klass($this->getClientClassArguments());
        return $adminClient;
    }
    public function getClientConfiguration()
    {
        $clientConfig = StaticContainer::get('GoogleAnalyticsGA4Importer.clientConfiguration');
        if (empty($clientConfig['client_id']) || empty($clientConfig['client_secret'])) {
            throw new \Exception(Piwik::translate('GoogleAnalyticsImporter_MissingClientConfiguration'));
        }
        if (empty($clientConfig['refresh_token'])) {
            throw new \Exception(Piwik::translate('GoogleAnalyticsImporter_MissingClientConfiguration'));
        }
        return $clientConfig;
    }

    protected function getClientClassArguments(): array
    {
        $arguments = [
            'keyFile' => $this->getClientConfiguration()
        ];

        $proxyHttpClient = StaticContainer::get('GoogleAnalyticsImporter.proxyHttpClient');
        if ($proxyHttpClient) {
            $proxyHttpHandler = \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Auth\HttpHandler\HttpHandlerFactory::build($proxyHttpClient);
            $arguments['credentialsConfig'] = ['authHttpHandler' => $proxyHttpHandler];
            $arguments['transport'] = 'rest';
            $arguments['transportConfig'] = ['rest' => ['httpHandler' => $proxyHttpHandler]];

            return $arguments;
        }

        $credentialWrapper =  \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\CredentialsWrapper::build($arguments);

        return ['credentials' => $credentialWrapper];
    }
}
