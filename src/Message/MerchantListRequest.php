<?php
/**
 * Westpac Transaction Detail Request
 */
namespace Eify\Westpac\Message;

/**
 * Westpac Merchant ListRequest
 *
 * @link https://www.payway.com.au/docs/rest.html#list-merchants
 */
class MerchantListRequest extends AbstractRequest
{
    public function getData()
    {
        return $data = array();
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/merchants';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

    public function getUseSecretKey()
    {
        return true;
    }
}
