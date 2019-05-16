<?php
/**
 * Westpac Transaction Detail Request
 */
namespace Omnipay\Westpac\Message;

/**
 * Westpac Bank Account List Request
 *
 * @link https://www.payway.com.au/docs/rest.html#your-bank-accounts
 */
class BankAccountListRequest extends AbstractRequest
{
    public function getData()
    {
        return $data = array();
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/your-bank-accounts';
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
