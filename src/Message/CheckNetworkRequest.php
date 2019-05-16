<?php

/**
 * Westpac check network
 */
namespace Eify\Westpac\Message;

/**
 * Westpac check network
 *
 * Check network connectivity to PayWay REST API.
 *
 * @link https://www.payway.com.au/rest-docs/index.html#use-curl-to-check-network
 */
class CheckNetworkRequest extends AbstractRequest
{
    public function getData()
    {
        return array();
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
