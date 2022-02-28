<?php

include_once './Factory/Payment.php';
include_once './Factory/CreditCard.php';

class CreditCardPayment extends Payment
{
    function __construct() {
        $this->createPayment();
    }

    function createPayment() {
        $this->objectPayment = new CreditCard();
    }

    function paymentDataObject() {

        try {
            if (empty($this->objectPayment)) {
                throw new Exception("There are no data on credit card payment");
            }
            return $this->objectPayment;
        } catch (\Exception $e) {
            print($e);
        }
    }

}