<?php

namespace PayEx\Payments\Block\Info;

class Gc extends \PayEx\Payments\Block\Info\AbstractInfo
{
    /**
     * @var string
     */
    protected $_template = 'PayEx_Payments::info/gc.phtml';

    /**
     * @var array
     */
    protected $transactionFields = [
        'PayEx Payment Method' => ['paymentMethod', 'cardProduct'],
        //'Masked Number' => ['maskedNumber', 'maskedCard'],
        //'Bank Hash' => ['BankHash', 'csId', 'panId'],
        'Bank Reference' => ['bankReference'],
        'Authenticated Status' => ['AuthenticatedStatus', 'authenticatedStatus'],
        'Transaction Ref' => ['transactionRef'],
        'PayEx Transaction Number' => ['transactionNumber'],
        'PayEx Transaction Status' => ['transactionStatus'],
        'Transaction Error Code' => ['transactionErrorCode'],
        'Transaction Error Description' => ['transactionErrorDescription'],
        'Transaction ThirdParty Error' => ['transactionThirdPartyError']
    ];

    /**
     * Render as PDF
     * @return string
     */
    public function toPdf()
    {
        $this->setTemplate('PayEx_Payments::info/pdf/gc.phtml');
        return $this->toHtml();
    }
}
