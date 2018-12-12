<?php
namespace Omnipay\Converge\Message;

/**
 * Converge Authorize/Purchase Request
 *
 * This is the request that will be called for any transaction which submits a credit card,
 * including `authorize` and `purchase`
 */
class PurchaseRequest extends AuthorizeRequest
{
    protected $transactionType = 'ccsale';
}
